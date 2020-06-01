<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200530112237 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE people (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, birthdate DATETIME NOT NULL, picture VARCHAR(255) DEFAULT NULL, role VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_28166A26E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE people_event (people_id INT NOT NULL, event_id INT NOT NULL, INDEX IDX_F0CD70E73147C936 (people_id), INDEX IDX_F0CD70E771F7E88B (event_id), PRIMARY KEY(people_id, event_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE people_family (people_id INT NOT NULL, family_id INT NOT NULL, INDEX IDX_D3F103B13147C936 (people_id), INDEX IDX_D3F103B1C35E566A (family_id), PRIMARY KEY(people_id, family_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE event (id INT AUTO_INCREMENT NOT NULL, family_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_3BAE0AA7C35E566A (family_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE healthbook (id INT AUTO_INCREMENT NOT NULL, child_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, file VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_B44961DBDD62C21B (child_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, family_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, job VARCHAR(255) NOT NULL, address VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_4C62E638C35E566A (family_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE note (id INT AUTO_INCREMENT NOT NULL, child_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, file VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_CFBDFA14DD62C21B (child_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE grade (id INT AUTO_INCREMENT NOT NULL, child_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, file VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_595AAE34DD62C21B (child_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE family (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, picture VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE family_child (family_id INT NOT NULL, child_id INT NOT NULL, INDEX IDX_1EC4C75AC35E566A (family_id), INDEX IDX_1EC4C75ADD62C21B (child_id), PRIMARY KEY(family_id, child_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE child (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, gender VARCHAR(255) NOT NULL, birthdate DATETIME NOT NULL, picture VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE picture (id INT AUTO_INCREMENT NOT NULL, people_id INT DEFAULT NULL, family_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, file VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_16DB4F893147C936 (people_id), INDEX IDX_16DB4F89C35E566A (family_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE post (id INT AUTO_INCREMENT NOT NULL, people_id INT DEFAULT NULL, family_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, content LONGTEXT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_5A8A6C8D3147C936 (people_id), INDEX IDX_5A8A6C8DC35E566A (family_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE people_event ADD CONSTRAINT FK_F0CD70E73147C936 FOREIGN KEY (people_id) REFERENCES people (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE people_event ADD CONSTRAINT FK_F0CD70E771F7E88B FOREIGN KEY (event_id) REFERENCES event (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE people_family ADD CONSTRAINT FK_D3F103B13147C936 FOREIGN KEY (people_id) REFERENCES people (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE people_family ADD CONSTRAINT FK_D3F103B1C35E566A FOREIGN KEY (family_id) REFERENCES family (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT FK_3BAE0AA7C35E566A FOREIGN KEY (family_id) REFERENCES family (id)');
        $this->addSql('ALTER TABLE healthbook ADD CONSTRAINT FK_B44961DBDD62C21B FOREIGN KEY (child_id) REFERENCES child (id)');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E638C35E566A FOREIGN KEY (family_id) REFERENCES family (id)');
        $this->addSql('ALTER TABLE note ADD CONSTRAINT FK_CFBDFA14DD62C21B FOREIGN KEY (child_id) REFERENCES child (id)');
        $this->addSql('ALTER TABLE grade ADD CONSTRAINT FK_595AAE34DD62C21B FOREIGN KEY (child_id) REFERENCES child (id)');
        $this->addSql('ALTER TABLE family_child ADD CONSTRAINT FK_1EC4C75AC35E566A FOREIGN KEY (family_id) REFERENCES family (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE family_child ADD CONSTRAINT FK_1EC4C75ADD62C21B FOREIGN KEY (child_id) REFERENCES child (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE picture ADD CONSTRAINT FK_16DB4F893147C936 FOREIGN KEY (people_id) REFERENCES people (id)');
        $this->addSql('ALTER TABLE picture ADD CONSTRAINT FK_16DB4F89C35E566A FOREIGN KEY (family_id) REFERENCES family (id)');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8D3147C936 FOREIGN KEY (people_id) REFERENCES people (id)');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8DC35E566A FOREIGN KEY (family_id) REFERENCES family (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE people_event DROP FOREIGN KEY FK_F0CD70E73147C936');
        $this->addSql('ALTER TABLE people_family DROP FOREIGN KEY FK_D3F103B13147C936');
        $this->addSql('ALTER TABLE picture DROP FOREIGN KEY FK_16DB4F893147C936');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8D3147C936');
        $this->addSql('ALTER TABLE people_event DROP FOREIGN KEY FK_F0CD70E771F7E88B');
        $this->addSql('ALTER TABLE people_family DROP FOREIGN KEY FK_D3F103B1C35E566A');
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY FK_3BAE0AA7C35E566A');
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E638C35E566A');
        $this->addSql('ALTER TABLE family_child DROP FOREIGN KEY FK_1EC4C75AC35E566A');
        $this->addSql('ALTER TABLE picture DROP FOREIGN KEY FK_16DB4F89C35E566A');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8DC35E566A');
        $this->addSql('ALTER TABLE healthbook DROP FOREIGN KEY FK_B44961DBDD62C21B');
        $this->addSql('ALTER TABLE note DROP FOREIGN KEY FK_CFBDFA14DD62C21B');
        $this->addSql('ALTER TABLE grade DROP FOREIGN KEY FK_595AAE34DD62C21B');
        $this->addSql('ALTER TABLE family_child DROP FOREIGN KEY FK_1EC4C75ADD62C21B');
        $this->addSql('DROP TABLE people');
        $this->addSql('DROP TABLE people_event');
        $this->addSql('DROP TABLE people_family');
        $this->addSql('DROP TABLE event');
        $this->addSql('DROP TABLE healthbook');
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP TABLE note');
        $this->addSql('DROP TABLE grade');
        $this->addSql('DROP TABLE family');
        $this->addSql('DROP TABLE family_child');
        $this->addSql('DROP TABLE child');
        $this->addSql('DROP TABLE picture');
        $this->addSql('DROP TABLE post');
    }
}
