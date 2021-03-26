<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210326143545 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE company ADD `owner_id` INT NOT NULL');
       // $this->addSql('ALTER TABLE company ADD CONSTRAINT FK_4FBF094F7E3C61F9 FOREIGN KEY (owner_id) REFERENCES user (id)');
        //$this->addSql('CREATE UNIQUE INDEX UNIQ_4FBF094F7E3C61F9 ON company (owner_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE company DROP FOREIGN KEY FK_4FBF094F7E3C61F9');
        $this->addSql('DROP INDEX UNIQ_4FBF094F7E3C61F9 ON company');
        $this->addSql('ALTER TABLE company DROP owner_id');
    }
}
