<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210720110459 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE paiement (id INT AUTO_INCREMENT NOT NULL, ayant_droit_id INT DEFAULT NULL, agent_id INT DEFAULT NULL, user_id INT DEFAULT NULL, numero_paiement INT DEFAULT NULL, date_emission DATETIME DEFAULT NULL, date_reception DATETIME DEFAULT NULL, numero_dossier INT DEFAULT NULL, fichier VARCHAR(255) DEFAULT NULL, validite INT DEFAULT NULL, montant DOUBLE PRECISION DEFAULT NULL, INDEX IDX_B1DC7A1E219FBBF1 (ayant_droit_id), INDEX IDX_B1DC7A1E3414710B (agent_id), INDEX IDX_B1DC7A1EA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1E219FBBF1 FOREIGN KEY (ayant_droit_id) REFERENCES ayant_droit (id)');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1E3414710B FOREIGN KEY (agent_id) REFERENCES agent (id)');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1EA76ED395 FOREIGN KEY (user_id) REFERENCES utilisateur (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE paiement');
    }
}
