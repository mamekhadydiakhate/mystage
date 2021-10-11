<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211011121539 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE interim ADD username VARCHAR(180) NOT NULL, ADD username_canonical VARCHAR(180) NOT NULL, ADD email VARCHAR(180) NOT NULL, ADD email_canonical VARCHAR(180) NOT NULL, ADD enabled TINYINT(1) NOT NULL, ADD salt VARCHAR(255) DEFAULT NULL, ADD password VARCHAR(255) NOT NULL, ADD last_login DATETIME DEFAULT NULL, ADD confirmation_token VARCHAR(180) DEFAULT NULL, ADD password_requested_at DATETIME DEFAULT NULL, ADD roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', ADD login_tentative INT DEFAULT NULL, ADD login_tentative_at DATETIME DEFAULT NULL, ADD nom VARCHAR(255) DEFAULT NULL, ADD prenom VARCHAR(255) DEFAULT NULL, ADD matricule VARCHAR(255) DEFAULT NULL, ADD service VARCHAR(255) DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_615F886992FC23A8 ON interim (username_canonical)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_615F8869A0D96FBF ON interim (email_canonical)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_615F8869C05FB297 ON interim (confirmation_token)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_615F886992FC23A8 ON interim');
        $this->addSql('DROP INDEX UNIQ_615F8869A0D96FBF ON interim');
        $this->addSql('DROP INDEX UNIQ_615F8869C05FB297 ON interim');
        $this->addSql('ALTER TABLE interim DROP username, DROP username_canonical, DROP email, DROP email_canonical, DROP enabled, DROP salt, DROP password, DROP last_login, DROP confirmation_token, DROP password_requested_at, DROP roles, DROP login_tentative, DROP login_tentative_at, DROP nom, DROP prenom, DROP matricule, DROP service');
    }
}
