<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200925171251 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, user_id_id INT DEFAULT NULL, identifier VARCHAR(255) DEFAULT NULL, license VARCHAR(255) DEFAULT NULL, money INT DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, skin LONGTEXT DEFAULT NULL, job VARCHAR(255) DEFAULT NULL, job_grade INT DEFAULT NULL, job2 VARCHAR(255) DEFAULT NULL, job2_grade INT DEFAULT NULL, loadout LONGTEXT DEFAULT NULL, position VARCHAR(255) DEFAULT NULL, bank INT DEFAULT NULL, permission_level INT DEFAULT NULL, groupe VARCHAR(255) DEFAULT NULL, is_dead INT DEFAULT NULL, firstname VARCHAR(255) DEFAULT NULL, lastname VARCHAR(255) DEFAULT NULL, dateofbirth VARCHAR(255) DEFAULT NULL, sex VARCHAR(255) DEFAULT NULL, height VARCHAR(255) DEFAULT NULL, last_property VARCHAR(255) DEFAULT NULL, status LONGTEXT DEFAULT NULL, jail INT DEFAULT NULL, phone_number VARCHAR(255) DEFAULT NULL, hair LONGTEXT NOT NULL, UNIQUE INDEX UNIQ_1483A5E99D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E99D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE users');
    }
}
