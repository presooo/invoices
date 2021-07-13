<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210712124639 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE invoice_headers (id INT AUTO_INCREMENT NOT NULL, location_id INT NOT NULL, date DATE DEFAULT NULL, status VARCHAR(255) DEFAULT NULL, INDEX IDX_5DA7956918DB72 (location_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE invoice_lines (id INT AUTO_INCREMENT NOT NULL, invoice_header_id INT NOT NULL, description VARCHAR(255) NOT NULL, value NUMERIC(10, 2) NOT NULL, INDEX IDX_72DBDC235327CAC4 (invoice_header_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE locations (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE invoice_headers ADD CONSTRAINT FK_5DA7956918DB72 FOREIGN KEY (location_id) REFERENCES locations (id)');
        $this->addSql('ALTER TABLE invoice_lines ADD CONSTRAINT FK_72DBDC235327CAC4 FOREIGN KEY (invoice_header_id) REFERENCES invoice_headers (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE invoice_lines DROP FOREIGN KEY FK_72DBDC235327CAC4');
        $this->addSql('ALTER TABLE invoice_headers DROP FOREIGN KEY FK_5DA7956918DB72');
        $this->addSql('DROP TABLE invoice_headers');
        $this->addSql('DROP TABLE invoice_lines');
        $this->addSql('DROP TABLE locations');
    }
}
