pipeline {
    /* choisir un slave Jenkins qui a le label php7 */
    agent  {label 'dst-preprod'}
    environment {
        EMAIL_RECIPIENTS = 'MoctarThiam.MBODJ@orange-sonatel.com, Madiagne.Sylla@orange-sonatel.com, mohamed.sall@orange-sonatel.com, Binetou.Diallo@orange-sonatel.com, babacar.fall4@orange-sonatel.com, mamadou.ndao@orange-sonatel.com'
        IMAGE = 'registry.tools.orange-sonatel.com/dd/koleure-api'
        VERSION = readMavenPom().getVersion()
        NAME = readMavenPom().getArtifactId()
        MAILER_URL="smtp://10.100.56.56:25"
        DATABASE_URL="mysql://koleure:klr_pma@s2m@172.17.0.1:3306/koleure?serverVersion=13&charset=utf8"
    }
    tools {
        maven "Maven_3.3.9"
    }
    stages {
        stage('Installation des packets') {
            steps {
                sh 'docker ps -qa -f name=${NAME} | xargs --no-run-if-empty docker rm -f'
                sh 'docker images -f reference=${IMAGE} -qa | xargs --no-run-if-empty docker rmi'
                sh 'rm -rf target/'
                sh 'rm -rf vendor'
                sh 'rm -rf composer.phar*'
                sh 'wget https://getcomposer.org/download/1.10.19/composer.phar'
                sh 'php73 composer.phar install'
                sh 'php73 bin/console d:s:u --force'
            }
        }
        // stage('SonarQube Scan') {
        //     steps{
        //         script{
        //             withSonarQubeEnv('SonarQubeServer') {
        //                 sh 'mvn sonar:sonar -X'
        //             }
        //         }
        //     }
        // }
/*
        stage("SonarQube Quality Gate") {
            steps{
                script{
                    timeout(time: 5, unit: 'MINUTES') {
                    def qg = waitForQualityGate()
                    if (qg.status != 'OK') {
                        error "Pipeline aborted due to quality gate failure: ${qg.status}"
                    }
                }
        
                }
            }
        }*/

        stage(' Build Docker image') {
            when {
                anyOf { branch 'master' }
            }
            steps {
                sh 'docker ps -qa -f name=${NAME} | xargs --no-run-if-empty docker rm -f'
                sh 'docker images -f reference=${IMAGE} -qa | xargs --no-run-if-empty docker rmi'
                sh 'sed -i "/DATABASE_URL/ s/^/# /" .env'
                sh 'sed -i "/MAILER_URL/ s/^/# /" .env'
                sh 'docker build  --no-cache -t ${IMAGE}:${VERSION} .'
                sh 'docker push ${IMAGE}:${VERSION}'
            }
        }

        stage(' Deploy IN Dev') {
            steps {
                sh 'docker run --name=${NAME} -d --restart=always -e DATABASE_URL=$DATABASE_URL -e MAILER_URL=$MAILER_URL -e APP_ENV=dev -e APP_DEBUG=1 --memory-reservation=256M --memory=512M -p 2232:22 -p 8032:80 ${IMAGE}:${VERSION}'
            }
        }
    }

    post {
        changed {
            emailext attachLog: true, body: '$DEFAULT_CONTENT', subject: '$DEFAULT_SUBJECT',  to: '$EMAIL_RECIPIENTS'
        }
        failure {
            emailext attachLog: true, body: '$DEFAULT_CONTENT', subject: '$DEFAULT_SUBJECT',  to: '$EMAIL_RECIPIENTS'
        }
    }
}
