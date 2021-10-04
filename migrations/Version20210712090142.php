<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210712090142 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE document_interimaire DROP FOREIGN KEY FK_E93EE4F8C33F7837');
        $this->addSql('DROP TABLE document');
        $this->addSql('DROP TABLE document_interimaire');
        $this->addSql('DROP TABLE manager');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE document (id INT AUTO_INCREMENT NOT NULL, agence_id INT DEFAULT NULL, type_document_id INT DEFAULT NULL, contrat_id INT DEFAULT NULL, user_id INT DEFAULT NULL, interimaire_id INT DEFAULT NULL, libelle VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, date_creation DATETIME NOT NULL, etat TINYINT(1) DEFAULT NULL, INDEX IDX_D8698A761823061F (contrat_id), INDEX IDX_D8698A768826AFA6 (type_document_id), INDEX IDX_D8698A765CA839FE (interimaire_id), INDEX IDX_D8698A76A76ED395 (user_id), INDEX IDX_D8698A76D725330D (agence_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE document_interimaire (id INT AUTO_INCREMENT NOT NULL, interimaire_id INT DEFAULT NULL, document_id INT DEFAULT NULL, contrat_id INT DEFAULT NULL, INDEX IDX_E93EE4F85CA839FE (interimaire_id), INDEX IDX_E93EE4F81823061F (contrat_id), UNIQUE INDEX UNIQ_E93EE4F8C33F7837 (document_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE manager (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE document ADD CONSTRAINT FK_D8698A761823061F FOREIGN KEY (contrat_id) REFERENCES contrat (id)');
        $this->addSql('ALTER TABLE document ADD CONSTRAINT FK_D8698A765CA839FE FOREIGN KEY (interimaire_id) REFERENCES interimaire (id)');
        $this->addSql('ALTER TABLE document ADD CONSTRAINT FK_D8698A768826AFA6 FOREIGN KEY (type_document_id) REFERENCES type_document (id)');
        $this->addSql('ALTER TABLE document ADD CONSTRAINT FK_D8698A76A76ED395 FOREIGN KEY (user_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE document ADD CONSTRAINT FK_D8698A76D725330D FOREIGN KEY (agence_id) REFERENCES agence (id)');
        $this->addSql('ALTER TABLE document_interimaire ADD CONSTRAINT FK_E93EE4F81823061F FOREIGN KEY (contrat_id) REFERENCES contrat (id)');
        $this->addSql('ALTER TABLE document_interimaire ADD CONSTRAINT FK_E93EE4F85CA839FE FOREIGN KEY (interimaire_id) REFERENCES interimaire (id)');
        $this->addSql('ALTER TABLE document_interimaire ADD CONSTRAINT FK_E93EE4F8C33F7837 FOREIGN KEY (document_id) REFERENCES document (id)');
    }
}
