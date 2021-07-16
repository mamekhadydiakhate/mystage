<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210715122642 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE operation (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE signature_cachet (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, libelle VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_4774B596A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE trace (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, operation_id INT DEFAULT NULL, details VARCHAR(255) NOT NULL, date DATETIME DEFAULT NULL, addresse_ip VARCHAR(255) DEFAULT NULL, INDEX IDX_315BD5A1A76ED395 (user_id), INDEX IDX_315BD5A144AC3583 (operation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE signature_cachet ADD CONSTRAINT FK_4774B596A76ED395 FOREIGN KEY (user_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE trace ADD CONSTRAINT FK_315BD5A1A76ED395 FOREIGN KEY (user_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE trace ADD CONSTRAINT FK_315BD5A144AC3583 FOREIGN KEY (operation_id) REFERENCES operation (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE trace DROP FOREIGN KEY FK_315BD5A144AC3583');
        $this->addSql('DROP TABLE operation');
        $this->addSql('DROP TABLE signature_cachet');
        $this->addSql('DROP TABLE trace');
    }
}
