<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211011122257 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE admin_pp DROP FOREIGN KEY FK_E5F1FF7529C96BD8');
        $this->addSql('DROP INDEX IDX_E5F1FF7529C96BD8 ON admin_pp');
        $this->addSql('ALTER TABLE admin_pp DROP interim_id');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_615F886992FC23A8 ON interim (username_canonical)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_615F8869A0D96FBF ON interim (email_canonical)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_615F8869C05FB297 ON interim (confirmation_token)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE admin_pp ADD interim_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE admin_pp ADD CONSTRAINT FK_E5F1FF7529C96BD8 FOREIGN KEY (interim_id) REFERENCES interim (id)');
        $this->addSql('CREATE INDEX IDX_E5F1FF7529C96BD8 ON admin_pp (interim_id)');
        $this->addSql('DROP INDEX UNIQ_615F886992FC23A8 ON interim');
        $this->addSql('DROP INDEX UNIQ_615F8869A0D96FBF ON interim');
        $this->addSql('DROP INDEX UNIQ_615F8869C05FB297 ON interim');
    }
}
