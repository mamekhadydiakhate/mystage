<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210923102858 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE profil ADD prenom VARCHAR(255) NOT NULL, ADD nom VARCHAR(255) NOT NULL, ADD matricule VARCHAR(255) NOT NULL, ADD telephone VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE utilisateur DROP INDEX IDX_1D1C63B3275ED078, ADD UNIQUE INDEX UNIQ_1D1C63B3275ED078 (profil_id)');
        $this->addSql('ALTER TABLE utilisateur ADD profile VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE profil DROP prenom, DROP nom, DROP matricule, DROP telephone');
        $this->addSql('ALTER TABLE utilisateur DROP INDEX UNIQ_1D1C63B3275ED078, ADD INDEX IDX_1D1C63B3275ED078 (profil_id)');
        $this->addSql('ALTER TABLE utilisateur DROP profile');
    }
}
