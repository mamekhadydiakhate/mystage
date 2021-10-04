<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210720101237 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE destinataire (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, role_destinataire_id INT DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, INDEX IDX_FEA9FF92A76ED395 (user_id), INDEX IDX_FEA9FF926B2B53C4 (role_destinataire_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE periodicite (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role_destinataire (id INT AUTO_INCREMENT NOT NULL, periodicite_id INT DEFAULT NULL, libelle VARCHAR(255) DEFAULT NULL, INDEX IDX_6AFF934E2928752A (periodicite_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE destinataire ADD CONSTRAINT FK_FEA9FF92A76ED395 FOREIGN KEY (user_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE destinataire ADD CONSTRAINT FK_FEA9FF926B2B53C4 FOREIGN KEY (role_destinataire_id) REFERENCES role_destinataire (id)');
        $this->addSql('ALTER TABLE role_destinataire ADD CONSTRAINT FK_6AFF934E2928752A FOREIGN KEY (periodicite_id) REFERENCES periodicite (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE role_destinataire DROP FOREIGN KEY FK_6AFF934E2928752A');
        $this->addSql('ALTER TABLE destinataire DROP FOREIGN KEY FK_FEA9FF926B2B53C4');
        $this->addSql('DROP TABLE destinataire');
        $this->addSql('DROP TABLE periodicite');
        $this->addSql('DROP TABLE role_destinataire');
    }
}
