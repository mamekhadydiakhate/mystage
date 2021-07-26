<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210719154039 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ayant_droit ADD agent_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ayant_droit ADD CONSTRAINT FK_965F6F7E3414710B FOREIGN KEY (agent_id) REFERENCES agent (id)');
        $this->addSql('CREATE INDEX IDX_965F6F7E3414710B ON ayant_droit (agent_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ayant_droit DROP FOREIGN KEY FK_965F6F7E3414710B');
        $this->addSql('DROP INDEX IDX_965F6F7E3414710B ON ayant_droit');
        $this->addSql('ALTER TABLE ayant_droit DROP agent_id');
    }
}
