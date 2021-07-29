<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210729093052 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE courrier (id INT AUTO_INCREMENT NOT NULL, type_courrier_id INT DEFAULT NULL, user_id INT DEFAULT NULL, agent_id INT DEFAULT NULL, numero_courrier INT DEFAULT NULL, objet_courrier VARCHAR(255) DEFAULT NULL, reference_saisine_dfc VARCHAR(255) DEFAULT NULL, date_courrier DATETIME DEFAULT NULL, jugement_heredite INT DEFAULT NULL, piece_identite INT DEFAULT NULL, procuration INT DEFAULT NULL, numero_case_cochee_procuration LONGTEXT DEFAULT NULL, certificat_administration_legale VARCHAR(255) DEFAULT NULL, jugement_curatelle INT DEFAULT NULL, numero_case_cochee_certificat LONGTEXT DEFAULT NULL, numero_case_cochee_jugement_curatelle LONGTEXT DEFAULT NULL, conclusion_demande VARCHAR(255) DEFAULT NULL, commentaire LONGTEXT DEFAULT NULL, generateur_courrier INT DEFAULT NULL, validite INT DEFAULT NULL, date_validite_courrier DATETIME DEFAULT NULL, generateur_validite_courrier INT DEFAULT NULL, date_accuse_dfc DATETIME DEFAULT NULL, courrier_envoye INT DEFAULT NULL, notification72heures INT DEFAULT NULL, date_derniere_notification DATETIME DEFAULT NULL, fichier VARCHAR(255) DEFAULT NULL, attestation_non_revocation INT DEFAULT NULL, numero_case_cochee_attestation_non_revocation LONGTEXT DEFAULT NULL, nouvelle_numerotation_courrier VARCHAR(255) DEFAULT NULL, numerotation INT DEFAULT NULL, INDEX IDX_BEF47CAAC0EDCA56 (type_courrier_id), INDEX IDX_BEF47CAAA76ED395 (user_id), INDEX IDX_BEF47CAA3414710B (agent_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE prenom (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_courrier (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE courrier ADD CONSTRAINT FK_BEF47CAAC0EDCA56 FOREIGN KEY (type_courrier_id) REFERENCES type_courrier (id)');
        $this->addSql('ALTER TABLE courrier ADD CONSTRAINT FK_BEF47CAAA76ED395 FOREIGN KEY (user_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE courrier ADD CONSTRAINT FK_BEF47CAA3414710B FOREIGN KEY (agent_id) REFERENCES agent (id)');
        $this->addSql('ALTER TABLE agent ADD prenom VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE courrier DROP FOREIGN KEY FK_BEF47CAAC0EDCA56');
        $this->addSql('DROP TABLE courrier');
        $this->addSql('DROP TABLE prenom');
        $this->addSql('DROP TABLE type_courrier');
        $this->addSql('ALTER TABLE agent DROP prenom');
    }
}
