<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210715155236 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE document (id INT AUTO_INCREMENT NOT NULL, type_document_id INT DEFAULT NULL, user_id INT DEFAULT NULL, numero_document INT DEFAULT NULL, libelle VARCHAR(255) DEFAULT NULL, date_delivrance VARCHAR(255) DEFAULT NULL, date_validite DATE DEFAULT NULL, date_expiration DATETIME DEFAULT NULL, fichier VARCHAR(255) DEFAULT NULL, INDEX IDX_D8698A768826AFA6 (type_document_id), INDEX IDX_D8698A76A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE jugement (id INT AUTO_INCREMENT NOT NULL, tribunal_id INT DEFAULT NULL, nom VARCHAR(255) DEFAULT NULL, date DATETIME DEFAULT NULL, numero_jugement INT NOT NULL, validite INT DEFAULT NULL, INDEX IDX_F53C8E5075C2CEC3 (tribunal_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tribunal (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) DEFAULT NULL, adresse VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_document (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE document ADD CONSTRAINT FK_D8698A768826AFA6 FOREIGN KEY (type_document_id) REFERENCES type_document (id)');
        $this->addSql('ALTER TABLE document ADD CONSTRAINT FK_D8698A76A76ED395 FOREIGN KEY (user_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE jugement ADD CONSTRAINT FK_F53C8E5075C2CEC3 FOREIGN KEY (tribunal_id) REFERENCES tribunal (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE jugement DROP FOREIGN KEY FK_F53C8E5075C2CEC3');
        $this->addSql('ALTER TABLE document DROP FOREIGN KEY FK_D8698A768826AFA6');
        $this->addSql('DROP TABLE document');
        $this->addSql('DROP TABLE jugement');
        $this->addSql('DROP TABLE tribunal');
        $this->addSql('DROP TABLE type_document');
    }
}
