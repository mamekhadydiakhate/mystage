<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210719155328 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ayant_droit DROP INDEX UNIQ_965F6F7E1DBD80F8, ADD INDEX IDX_965F6F7E1DBD80F8 (statut_legal_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ayant_droit DROP INDEX IDX_965F6F7E1DBD80F8, ADD UNIQUE INDEX UNIQ_965F6F7E1DBD80F8 (statut_legal_id)');
    }
}
