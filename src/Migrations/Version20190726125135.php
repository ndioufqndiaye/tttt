<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190726125135 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE utilisateur ADD administrateur_id INT NOT NULL');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B37EE5403C FOREIGN KEY (administrateur_id) REFERENCES administrateur (id)');
        $this->addSql('CREATE INDEX IDX_1D1C63B37EE5403C ON utilisateur (administrateur_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B37EE5403C');
        $this->addSql('DROP INDEX IDX_1D1C63B37EE5403C ON utilisateur');
        $this->addSql('ALTER TABLE utilisateur DROP administrateur_id');
    }
}
