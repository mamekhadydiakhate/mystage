<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210930144308 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE activite ADD structure_id INT DEFAULT NULL, ADD user_id INT DEFAULT NULL, ADD tranche_horaire_id INT DEFAULT NULL, ADD historique_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE activite ADD CONSTRAINT FK_B87555152534008B FOREIGN KEY (structure_id) REFERENCES structure (id)');
        $this->addSql('ALTER TABLE activite ADD CONSTRAINT FK_B8755515A76ED395 FOREIGN KEY (user_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE activite ADD CONSTRAINT FK_B875551569832F6F FOREIGN KEY (tranche_horaire_id) REFERENCES tranche_horaire (id)');
        $this->addSql('ALTER TABLE activite ADD CONSTRAINT FK_B87555156128735E FOREIGN KEY (historique_id) REFERENCES historique (id)');
        $this->addSql('CREATE INDEX IDX_B87555152534008B ON activite (structure_id)');
        $this->addSql('CREATE INDEX IDX_B8755515A76ED395 ON activite (user_id)');
        $this->addSql('CREATE INDEX IDX_B875551569832F6F ON activite (tranche_horaire_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B87555156128735E ON activite (historique_id)');
        $this->addSql('ALTER TABLE admin_pp ADD interim_id INT DEFAULT NULL, ADD username VARCHAR(180) NOT NULL, ADD username_canonical VARCHAR(180) NOT NULL, ADD email VARCHAR(180) NOT NULL, ADD email_canonical VARCHAR(180) NOT NULL, ADD enabled TINYINT(1) NOT NULL, ADD salt VARCHAR(255) DEFAULT NULL, ADD password VARCHAR(255) NOT NULL, ADD last_login DATETIME DEFAULT NULL, ADD confirmation_token VARCHAR(180) DEFAULT NULL, ADD password_requested_at DATETIME DEFAULT NULL, ADD roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', ADD login_tentative INT DEFAULT NULL, ADD login_tentative_at DATETIME DEFAULT NULL, ADD nom VARCHAR(255) DEFAULT NULL, ADD prenom VARCHAR(255) DEFAULT NULL, ADD matricule VARCHAR(255) DEFAULT NULL, ADD service VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE admin_pp ADD CONSTRAINT FK_E5F1FF7529C96BD8 FOREIGN KEY (interim_id) REFERENCES interim (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_E5F1FF7592FC23A8 ON admin_pp (username_canonical)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_E5F1FF75A0D96FBF ON admin_pp (email_canonical)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_E5F1FF75C05FB297 ON admin_pp (confirmation_token)');
        $this->addSql('CREATE INDEX IDX_E5F1FF7529C96BD8 ON admin_pp (interim_id)');
        $this->addSql('ALTER TABLE autorite ADD evenement_id INT DEFAULT NULL, ADD nom VARCHAR(255) NOT NULL, ADD prenom VARCHAR(255) NOT NULL, ADD tel VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE autorite ADD CONSTRAINT FK_BC599E16FD02F13 FOREIGN KEY (evenement_id) REFERENCES evenement (id)');
        $this->addSql('CREATE INDEX IDX_BC599E16FD02F13 ON autorite (evenement_id)');
        $this->addSql('ALTER TABLE commentaire ADD evenement_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCFD02F13 FOREIGN KEY (evenement_id) REFERENCES evenement (id)');
        $this->addSql('CREATE INDEX IDX_67F068BCFD02F13 ON commentaire (evenement_id)');
        $this->addSql('ALTER TABLE difficulte ADD activite_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE difficulte ADD CONSTRAINT FK_AF6A33A09B0F88B1 FOREIGN KEY (activite_id) REFERENCES activite (id)');
        $this->addSql('CREATE INDEX IDX_AF6A33A09B0F88B1 ON difficulte (activite_id)');
        $this->addSql('ALTER TABLE evenement ADD structure_id INT DEFAULT NULL, ADD historique_evenement_id INT DEFAULT NULL, ADD periodicite_id INT DEFAULT NULL, DROP autorite');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681E2534008B FOREIGN KEY (structure_id) REFERENCES structure (id)');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681EABD84570 FOREIGN KEY (historique_evenement_id) REFERENCES historique_evenement (id)');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681E2928752A FOREIGN KEY (periodicite_id) REFERENCES periodicite (id)');
        $this->addSql('CREATE INDEX IDX_B26681E2534008B ON evenement (structure_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B26681EABD84570 ON evenement (historique_evenement_id)');
        $this->addSql('CREATE INDEX IDX_B26681E2928752A ON evenement (periodicite_id)');
        $this->addSql('ALTER TABLE extraction ADD type_periodicite_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE extraction ADD CONSTRAINT FK_3ADCB5D67FEB5CBE FOREIGN KEY (type_periodicite_id) REFERENCES type_periodicite (id)');
        $this->addSql('CREATE INDEX IDX_3ADCB5D67FEB5CBE ON extraction (type_periodicite_id)');
        $this->addSql('ALTER TABLE point_de_coordination ADD activite_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE point_de_coordination ADD CONSTRAINT FK_9BFC84739B0F88B1 FOREIGN KEY (activite_id) REFERENCES activite (id)');
        $this->addSql('CREATE INDEX IDX_9BFC84739B0F88B1 ON point_de_coordination (activite_id)');
        $this->addSql('ALTER TABLE structure ADD extraction_id INT DEFAULT NULL, ADD type_structure_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE structure ADD CONSTRAINT FK_6F0137EAF992488A FOREIGN KEY (extraction_id) REFERENCES extraction (id)');
        $this->addSql('ALTER TABLE structure ADD CONSTRAINT FK_6F0137EAA277BA8E FOREIGN KEY (type_structure_id) REFERENCES type_structure (id)');
        $this->addSql('CREATE INDEX IDX_6F0137EAF992488A ON structure (extraction_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6F0137EAA277BA8E ON structure (type_structure_id)');
        $this->addSql('ALTER TABLE utilisateur ADD profil_id INT DEFAULT NULL, ADD workflow_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B3275ED078 FOREIGN KEY (profil_id) REFERENCES profil (id)');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B32C7C2CBA FOREIGN KEY (workflow_id) REFERENCES workflow (id)');
        $this->addSql('CREATE INDEX IDX_1D1C63B3275ED078 ON utilisateur (profil_id)');
        $this->addSql('CREATE INDEX IDX_1D1C63B32C7C2CBA ON utilisateur (workflow_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE activite DROP FOREIGN KEY FK_B87555152534008B');
        $this->addSql('ALTER TABLE activite DROP FOREIGN KEY FK_B8755515A76ED395');
        $this->addSql('ALTER TABLE activite DROP FOREIGN KEY FK_B875551569832F6F');
        $this->addSql('ALTER TABLE activite DROP FOREIGN KEY FK_B87555156128735E');
        $this->addSql('DROP INDEX IDX_B87555152534008B ON activite');
        $this->addSql('DROP INDEX IDX_B8755515A76ED395 ON activite');
        $this->addSql('DROP INDEX IDX_B875551569832F6F ON activite');
        $this->addSql('DROP INDEX UNIQ_B87555156128735E ON activite');
        $this->addSql('ALTER TABLE activite DROP structure_id, DROP user_id, DROP tranche_horaire_id, DROP historique_id');
        $this->addSql('ALTER TABLE admin_pp DROP FOREIGN KEY FK_E5F1FF7529C96BD8');
        $this->addSql('DROP INDEX UNIQ_E5F1FF7592FC23A8 ON admin_pp');
        $this->addSql('DROP INDEX UNIQ_E5F1FF75A0D96FBF ON admin_pp');
        $this->addSql('DROP INDEX UNIQ_E5F1FF75C05FB297 ON admin_pp');
        $this->addSql('DROP INDEX IDX_E5F1FF7529C96BD8 ON admin_pp');
        $this->addSql('ALTER TABLE admin_pp DROP interim_id, DROP username, DROP username_canonical, DROP email, DROP email_canonical, DROP enabled, DROP salt, DROP password, DROP last_login, DROP confirmation_token, DROP password_requested_at, DROP roles, DROP login_tentative, DROP login_tentative_at, DROP nom, DROP prenom, DROP matricule, DROP service');
        $this->addSql('ALTER TABLE autorite DROP FOREIGN KEY FK_BC599E16FD02F13');
        $this->addSql('DROP INDEX IDX_BC599E16FD02F13 ON autorite');
        $this->addSql('ALTER TABLE autorite DROP evenement_id, DROP nom, DROP prenom, DROP tel');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCFD02F13');
        $this->addSql('DROP INDEX IDX_67F068BCFD02F13 ON commentaire');
        $this->addSql('ALTER TABLE commentaire DROP evenement_id');
        $this->addSql('ALTER TABLE difficulte DROP FOREIGN KEY FK_AF6A33A09B0F88B1');
        $this->addSql('DROP INDEX IDX_AF6A33A09B0F88B1 ON difficulte');
        $this->addSql('ALTER TABLE difficulte DROP activite_id');
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681E2534008B');
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681EABD84570');
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681E2928752A');
        $this->addSql('DROP INDEX IDX_B26681E2534008B ON evenement');
        $this->addSql('DROP INDEX UNIQ_B26681EABD84570 ON evenement');
        $this->addSql('DROP INDEX IDX_B26681E2928752A ON evenement');
        $this->addSql('ALTER TABLE evenement ADD autorite VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, DROP structure_id, DROP historique_evenement_id, DROP periodicite_id');
        $this->addSql('ALTER TABLE extraction DROP FOREIGN KEY FK_3ADCB5D67FEB5CBE');
        $this->addSql('DROP INDEX IDX_3ADCB5D67FEB5CBE ON extraction');
        $this->addSql('ALTER TABLE extraction DROP type_periodicite_id');
        $this->addSql('ALTER TABLE point_de_coordination DROP FOREIGN KEY FK_9BFC84739B0F88B1');
        $this->addSql('DROP INDEX IDX_9BFC84739B0F88B1 ON point_de_coordination');
        $this->addSql('ALTER TABLE point_de_coordination DROP activite_id');
        $this->addSql('ALTER TABLE structure DROP FOREIGN KEY FK_6F0137EAF992488A');
        $this->addSql('ALTER TABLE structure DROP FOREIGN KEY FK_6F0137EAA277BA8E');
        $this->addSql('DROP INDEX IDX_6F0137EAF992488A ON structure');
        $this->addSql('DROP INDEX UNIQ_6F0137EAA277BA8E ON structure');
        $this->addSql('ALTER TABLE structure DROP extraction_id, DROP type_structure_id');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B3275ED078');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B32C7C2CBA');
        $this->addSql('DROP INDEX IDX_1D1C63B3275ED078 ON utilisateur');
        $this->addSql('DROP INDEX IDX_1D1C63B32C7C2CBA ON utilisateur');
        $this->addSql('ALTER TABLE utilisateur DROP profil_id, DROP workflow_id');
    }
}
