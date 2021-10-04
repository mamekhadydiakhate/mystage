<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210715213540 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE agent (id INT AUTO_INCREMENT NOT NULL, transfert_action_id INT DEFAULT NULL, matricule VARCHAR(255) DEFAULT NULL, nom VARCHAR(255) NOT NULL, nombre_action INT DEFAULT NULL, commentaire LONGTEXT DEFAULT NULL, date_transfert_action DATETIME DEFAULT NULL, validite INT DEFAULT NULL, numero_dossier INT DEFAULT NULL, INDEX IDX_268B9C9DAFDE6752 (transfert_action_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ayant_droit (id INT AUTO_INCREMENT NOT NULL, statut_legal_id INT DEFAULT NULL, document_id INT DEFAULT NULL, lien_familial_id INT DEFAULT NULL, agent_id INT DEFAULT NULL, nom VARCHAR(255) DEFAULT NULL, prenom VARCHAR(255) DEFAULT NULL, date_naissance VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, tel1 VARCHAR(255) DEFAULT NULL, tel2 VARCHAR(255) DEFAULT NULL, sexe VARCHAR(255) DEFAULT NULL, validite INT DEFAULT NULL, UNIQUE INDEX UNIQ_965F6F7E1DBD80F8 (statut_legal_id), UNIQUE INDEX UNIQ_965F6F7EC33F7837 (document_id), UNIQUE INDEX UNIQ_965F6F7E3F932970 (lien_familial_id), INDEX IDX_965F6F7E3414710B (agent_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lien_familial (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE societe_gestion_action (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE statut_legal (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE transfert_action (id INT AUTO_INCREMENT NOT NULL, societe_gestion_action_id INT DEFAULT NULL, numero_transfert INT DEFAULT NULL, nombre_action INT DEFAULT NULL, validite INT DEFAULT NULL, INDEX IDX_A556675A67800ACB (societe_gestion_action_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE agent ADD CONSTRAINT FK_268B9C9DAFDE6752 FOREIGN KEY (transfert_action_id) REFERENCES transfert_action (id)');
        $this->addSql('ALTER TABLE ayant_droit ADD CONSTRAINT FK_965F6F7E1DBD80F8 FOREIGN KEY (statut_legal_id) REFERENCES statut_legal (id)');
        $this->addSql('ALTER TABLE ayant_droit ADD CONSTRAINT FK_965F6F7EC33F7837 FOREIGN KEY (document_id) REFERENCES document (id)');
        $this->addSql('ALTER TABLE ayant_droit ADD CONSTRAINT FK_965F6F7E3F932970 FOREIGN KEY (lien_familial_id) REFERENCES lien_familial (id)');
        $this->addSql('ALTER TABLE ayant_droit ADD CONSTRAINT FK_965F6F7E3414710B FOREIGN KEY (agent_id) REFERENCES agent (id)');
        $this->addSql('ALTER TABLE transfert_action ADD CONSTRAINT FK_A556675A67800ACB FOREIGN KEY (societe_gestion_action_id) REFERENCES societe_gestion_action (id)');
        $this->addSql('ALTER TABLE document ADD notaire_id INT DEFAULT NULL, ADD agent_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE document ADD CONSTRAINT FK_D8698A7693B43CD5 FOREIGN KEY (notaire_id) REFERENCES notaire (id)');
        $this->addSql('ALTER TABLE document ADD CONSTRAINT FK_D8698A763414710B FOREIGN KEY (agent_id) REFERENCES agent (id)');
        $this->addSql('CREATE INDEX IDX_D8698A7693B43CD5 ON document (notaire_id)');
        $this->addSql('CREATE INDEX IDX_D8698A763414710B ON document (agent_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ayant_droit DROP FOREIGN KEY FK_965F6F7E3414710B');
        $this->addSql('ALTER TABLE document DROP FOREIGN KEY FK_D8698A763414710B');
        $this->addSql('ALTER TABLE ayant_droit DROP FOREIGN KEY FK_965F6F7E3F932970');
        $this->addSql('ALTER TABLE transfert_action DROP FOREIGN KEY FK_A556675A67800ACB');
        $this->addSql('ALTER TABLE ayant_droit DROP FOREIGN KEY FK_965F6F7E1DBD80F8');
        $this->addSql('ALTER TABLE agent DROP FOREIGN KEY FK_268B9C9DAFDE6752');
        $this->addSql('DROP TABLE agent');
        $this->addSql('DROP TABLE ayant_droit');
        $this->addSql('DROP TABLE lien_familial');
        $this->addSql('DROP TABLE societe_gestion_action');
        $this->addSql('DROP TABLE statut_legal');
        $this->addSql('DROP TABLE transfert_action');
        $this->addSql('ALTER TABLE document DROP FOREIGN KEY FK_D8698A7693B43CD5');
        $this->addSql('DROP INDEX IDX_D8698A7693B43CD5 ON document');
        $this->addSql('DROP INDEX IDX_D8698A763414710B ON document');
        $this->addSql('ALTER TABLE document DROP notaire_id, DROP agent_id');
    }
}
