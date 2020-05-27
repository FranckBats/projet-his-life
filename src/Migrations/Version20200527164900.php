<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200527164900 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE note (id INT AUTO_INCREMENT NOT NULL, child_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, file VARCHAR(255) NOT NULL, INDEX IDX_CFBDFA14DD62C21B (child_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE note ADD CONSTRAINT FK_CFBDFA14DD62C21B FOREIGN KEY (child_id) REFERENCES child (id)');
        $this->addSql('ALTER TABLE healthbook ADD child_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE healthbook ADD CONSTRAINT FK_B44961DBDD62C21B FOREIGN KEY (child_id) REFERENCES child (id)');
        $this->addSql('CREATE INDEX IDX_B44961DBDD62C21B ON healthbook (child_id)');
        $this->addSql('ALTER TABLE grade ADD child_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE grade ADD CONSTRAINT FK_595AAE34DD62C21B FOREIGN KEY (child_id) REFERENCES child (id)');
        $this->addSql('CREATE INDEX IDX_595AAE34DD62C21B ON grade (child_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE note');
        $this->addSql('ALTER TABLE grade DROP FOREIGN KEY FK_595AAE34DD62C21B');
        $this->addSql('DROP INDEX IDX_595AAE34DD62C21B ON grade');
        $this->addSql('ALTER TABLE grade DROP child_id');
        $this->addSql('ALTER TABLE healthbook DROP FOREIGN KEY FK_B44961DBDD62C21B');
        $this->addSql('DROP INDEX IDX_B44961DBDD62C21B ON healthbook');
        $this->addSql('ALTER TABLE healthbook DROP child_id');
    }
}
