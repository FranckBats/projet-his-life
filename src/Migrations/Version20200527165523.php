<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200527165523 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE people_event (people_id INT NOT NULL, event_id INT NOT NULL, INDEX IDX_F0CD70E73147C936 (people_id), INDEX IDX_F0CD70E771F7E88B (event_id), PRIMARY KEY(people_id, event_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE people_family (people_id INT NOT NULL, family_id INT NOT NULL, INDEX IDX_D3F103B13147C936 (people_id), INDEX IDX_D3F103B1C35E566A (family_id), PRIMARY KEY(people_id, family_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE family_child (family_id INT NOT NULL, child_id INT NOT NULL, INDEX IDX_1EC4C75AC35E566A (family_id), INDEX IDX_1EC4C75ADD62C21B (child_id), PRIMARY KEY(family_id, child_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE people_event ADD CONSTRAINT FK_F0CD70E73147C936 FOREIGN KEY (people_id) REFERENCES people (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE people_event ADD CONSTRAINT FK_F0CD70E771F7E88B FOREIGN KEY (event_id) REFERENCES event (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE people_family ADD CONSTRAINT FK_D3F103B13147C936 FOREIGN KEY (people_id) REFERENCES people (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE people_family ADD CONSTRAINT FK_D3F103B1C35E566A FOREIGN KEY (family_id) REFERENCES family (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE family_child ADD CONSTRAINT FK_1EC4C75AC35E566A FOREIGN KEY (family_id) REFERENCES family (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE family_child ADD CONSTRAINT FK_1EC4C75ADD62C21B FOREIGN KEY (child_id) REFERENCES child (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event ADD family_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT FK_3BAE0AA7C35E566A FOREIGN KEY (family_id) REFERENCES family (id)');
        $this->addSql('CREATE INDEX IDX_3BAE0AA7C35E566A ON event (family_id)');
        $this->addSql('ALTER TABLE contact ADD family_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E638C35E566A FOREIGN KEY (family_id) REFERENCES family (id)');
        $this->addSql('CREATE INDEX IDX_4C62E638C35E566A ON contact (family_id)');
        $this->addSql('ALTER TABLE picture ADD people_id INT DEFAULT NULL, ADD family_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE picture ADD CONSTRAINT FK_16DB4F893147C936 FOREIGN KEY (people_id) REFERENCES people (id)');
        $this->addSql('ALTER TABLE picture ADD CONSTRAINT FK_16DB4F89C35E566A FOREIGN KEY (family_id) REFERENCES family (id)');
        $this->addSql('CREATE INDEX IDX_16DB4F893147C936 ON picture (people_id)');
        $this->addSql('CREATE INDEX IDX_16DB4F89C35E566A ON picture (family_id)');
        $this->addSql('ALTER TABLE post ADD people_id INT DEFAULT NULL, ADD family_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8D3147C936 FOREIGN KEY (people_id) REFERENCES people (id)');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8DC35E566A FOREIGN KEY (family_id) REFERENCES family (id)');
        $this->addSql('CREATE INDEX IDX_5A8A6C8D3147C936 ON post (people_id)');
        $this->addSql('CREATE INDEX IDX_5A8A6C8DC35E566A ON post (family_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE people_event');
        $this->addSql('DROP TABLE people_family');
        $this->addSql('DROP TABLE family_child');
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E638C35E566A');
        $this->addSql('DROP INDEX IDX_4C62E638C35E566A ON contact');
        $this->addSql('ALTER TABLE contact DROP family_id');
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY FK_3BAE0AA7C35E566A');
        $this->addSql('DROP INDEX IDX_3BAE0AA7C35E566A ON event');
        $this->addSql('ALTER TABLE event DROP family_id');
        $this->addSql('ALTER TABLE picture DROP FOREIGN KEY FK_16DB4F893147C936');
        $this->addSql('ALTER TABLE picture DROP FOREIGN KEY FK_16DB4F89C35E566A');
        $this->addSql('DROP INDEX IDX_16DB4F893147C936 ON picture');
        $this->addSql('DROP INDEX IDX_16DB4F89C35E566A ON picture');
        $this->addSql('ALTER TABLE picture DROP people_id, DROP family_id');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8D3147C936');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8DC35E566A');
        $this->addSql('DROP INDEX IDX_5A8A6C8D3147C936 ON post');
        $this->addSql('DROP INDEX IDX_5A8A6C8DC35E566A ON post');
        $this->addSql('ALTER TABLE post DROP people_id, DROP family_id');
    }
}
