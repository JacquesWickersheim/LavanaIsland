<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200926080623 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE concess (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, prix INT NOT NULL, vitesse_max INT NOT NULL, puissance INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE addon_account');
        $this->addSql('DROP TABLE addon_account_data');
        $this->addSql('DROP TABLE addon_inventory');
        $this->addSql('DROP TABLE addon_inventory_items');
        $this->addSql('DROP TABLE aircraft_categories');
        $this->addSql('DROP TABLE aircraftdealer_aircrafts');
        $this->addSql('DROP TABLE aircrafts');
        $this->addSql('DROP TABLE billing');
        $this->addSql('DROP TABLE boat_categories');
        $this->addSql('DROP TABLE boatdealer_boats');
        $this->addSql('DROP TABLE boats');
        $this->addSql('DROP TABLE car_parking');
        $this->addSql('DROP TABLE cardealer_vehicles');
        $this->addSql('DROP TABLE characters');
        $this->addSql('DROP TABLE datastore');
        $this->addSql('DROP TABLE datastore_data');
        $this->addSql('DROP TABLE fine_types');
        $this->addSql('DROP TABLE fine_types_biker');
        $this->addSql('DROP TABLE fine_types_gang');
        $this->addSql('DROP TABLE fine_types_gouv');
        $this->addSql('DROP TABLE fine_types_mafia');
        $this->addSql('DROP TABLE items');
        $this->addSql('DROP TABLE jail');
        $this->addSql('DROP TABLE job_grades');
        $this->addSql('DROP TABLE jobs');
        $this->addSql('DROP TABLE licenses');
        $this->addSql('DROP TABLE org');
        $this->addSql('DROP TABLE org_gradeorg');
        $this->addSql('DROP TABLE organisation_moneywash');
        $this->addSql('DROP TABLE owned_aircrafts');
        $this->addSql('DROP TABLE owned_boats');
        $this->addSql('DROP TABLE owned_properties');
        $this->addSql('DROP TABLE owned_vehicles');
        $this->addSql('DROP TABLE phone_app_chat');
        $this->addSql('DROP TABLE phone_calls');
        $this->addSql('DROP TABLE phone_messages');
        $this->addSql('DROP TABLE phone_users_contacts');
        $this->addSql('DROP TABLE playerstattoos');
        $this->addSql('DROP INDEX id ON users');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE addon_account (name VARCHAR(60) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, label VARCHAR(100) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, shared INT NOT NULL, PRIMARY KEY(name)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE addon_account_data (id INT AUTO_INCREMENT NOT NULL, account_name VARCHAR(100) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, money INT NOT NULL, owner VARCHAR(255) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, INDEX index_addon_account_data_account_name (account_name), UNIQUE INDEX index_addon_account_data_account_name_owner (account_name, owner), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE addon_inventory (name VARCHAR(60) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, label VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, shared INT NOT NULL, PRIMARY KEY(name)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE addon_inventory_items (id INT AUTO_INCREMENT NOT NULL, inventory_name VARCHAR(100) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, name VARCHAR(100) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, count INT NOT NULL, owner VARCHAR(60) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, INDEX index_addon_inventory_inventory_name (inventory_name), INDEX index_addon_inventory_items_inventory_name_name (inventory_name, name), INDEX index_addon_inventory_items_inventory_name_name_owner (inventory_name, name, owner), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE aircraft_categories (name VARCHAR(60) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, label VARCHAR(60) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, PRIMARY KEY(name)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE aircraftdealer_aircrafts (id INT AUTO_INCREMENT NOT NULL, vehicle VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, price INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE aircrafts (model VARCHAR(60) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, name VARCHAR(60) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, price INT NOT NULL, category VARCHAR(60) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, PRIMARY KEY(model)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE billing (id INT AUTO_INCREMENT NOT NULL, identifier VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, sender VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, target_type VARCHAR(50) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, target VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, label VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, amount INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE boat_categories (name VARCHAR(60) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, label VARCHAR(60) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, PRIMARY KEY(name)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE boatdealer_boats (id INT AUTO_INCREMENT NOT NULL, vehicle VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, price INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE boats (model VARCHAR(60) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, name VARCHAR(60) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, price INT NOT NULL, category VARCHAR(60) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, PRIMARY KEY(model)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE car_parking (id INT AUTO_INCREMENT NOT NULL, owner VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, plate VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, data LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, time BIGINT NOT NULL, parking VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE cardealer_vehicles (id INT AUTO_INCREMENT NOT NULL, vehicle VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, price INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE characters (id INT AUTO_INCREMENT NOT NULL, identifier VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, firstname VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, lastname VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, dateofbirth VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, sex VARCHAR(1) CHARACTER SET latin1 DEFAULT \'M\' NOT NULL COLLATE `latin1_swedish_ci`, height VARCHAR(128) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, INDEX identifier (identifier), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE datastore (name VARCHAR(60) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, label VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, shared INT NOT NULL, PRIMARY KEY(name)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE datastore_data (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(60) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, owner VARCHAR(60) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, data LONGTEXT CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, UNIQUE INDEX index_datastore_data_name_owner (name, owner), INDEX index_datastore_data_name (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE fine_types (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(255) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, amount INT DEFAULT NULL, category INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE fine_types_biker (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(255) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, amount INT DEFAULT NULL, category INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE fine_types_gang (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(255) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, amount INT DEFAULT NULL, category INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE fine_types_gouv (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(255) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, amount INT DEFAULT NULL, category INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE fine_types_mafia (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(255) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, amount INT DEFAULT NULL, category INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE items (name VARCHAR(50) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, label VARCHAR(50) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, `limit` INT DEFAULT -1 NOT NULL, rare INT DEFAULT 0 NOT NULL, can_remove INT DEFAULT 1 NOT NULL, PRIMARY KEY(name)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE jail (identifier VARCHAR(100) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, isjailed TINYINT(1) DEFAULT NULL, J_Time DATETIME NOT NULL, J_Cell VARCHAR(20) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, Jailer VARCHAR(100) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, Jailer_ID VARCHAR(100) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, PRIMARY KEY(identifier)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE job_grades (id INT AUTO_INCREMENT NOT NULL, job_name VARCHAR(50) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, grade INT NOT NULL, name VARCHAR(50) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, label VARCHAR(50) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, salary INT NOT NULL, skin_male LONGTEXT CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, skin_female LONGTEXT CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE jobs (name VARCHAR(50) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, label VARCHAR(50) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, whitelisted TINYINT(1) DEFAULT \'0\' NOT NULL, SecondaryJob TINYINT(1) DEFAULT \'0\' NOT NULL, PRIMARY KEY(name)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE licenses (type VARCHAR(60) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, label VARCHAR(60) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, PRIMARY KEY(type)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE org (name VARCHAR(50) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, label VARCHAR(255) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, PRIMARY KEY(name)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE org_gradeorg (id INT AUTO_INCREMENT NOT NULL, org_name VARCHAR(255) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, gradeorg INT NOT NULL, name VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, label VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, salary INT NOT NULL, skin_male LONGTEXT CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, skin_female LONGTEXT CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE organisation_moneywash (id INT AUTO_INCREMENT NOT NULL, identifier VARCHAR(60) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, organisation VARCHAR(60) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, amount INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE owned_aircrafts (plate VARCHAR(12) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, owner VARCHAR(30) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, state TINYINT(1) DEFAULT \'0\' NOT NULL COMMENT \'State of the aircraft\', vehicle LONGTEXT CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, PRIMARY KEY(plate)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE owned_boats (plate VARCHAR(12) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, owner VARCHAR(30) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, state TINYINT(1) DEFAULT \'0\' NOT NULL COMMENT \'State of the boat\', vehicle LONGTEXT CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, PRIMARY KEY(plate)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE owned_properties (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, price DOUBLE PRECISION NOT NULL, rented INT NOT NULL, owner VARCHAR(60) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE owned_vehicles (plate VARCHAR(12) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, owner VARCHAR(22) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, state TINYINT(1) DEFAULT \'0\' NOT NULL COMMENT \'Etat de la voiture\', vehicle LONGTEXT CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, type VARCHAR(20) CHARACTER SET latin1 DEFAULT \'car\' NOT NULL COLLATE `latin1_swedish_ci`, job VARCHAR(20) CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, `stored` TINYINT(1) DEFAULT \'0\' NOT NULL, garage VARCHAR(200) CHARACTER SET latin1 DEFAULT \'A\' COLLATE `latin1_swedish_ci`, PRIMARY KEY(plate)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE phone_app_chat (id INT AUTO_INCREMENT NOT NULL, channel VARCHAR(20) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, message VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, time DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE phone_calls (id INT AUTO_INCREMENT NOT NULL, owner VARCHAR(10) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci` COMMENT \'Num tel proprio\', num VARCHAR(10) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci` COMMENT \'Num reférence du contact\', incoming INT NOT NULL COMMENT \'Défini si on est à l\'\'origine de l\'\'appels\', time DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, accepts INT NOT NULL COMMENT \'Appels accepter ou pas\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE phone_messages (id INT AUTO_INCREMENT NOT NULL, transmitter VARCHAR(10) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, receiver VARCHAR(10) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, message VARCHAR(255) CHARACTER SET utf8 DEFAULT \'0\' NOT NULL COLLATE `utf8_general_ci`, time DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, isRead INT DEFAULT 0 NOT NULL, owner INT DEFAULT 0 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE phone_users_contacts (id INT AUTO_INCREMENT NOT NULL, identifier VARCHAR(60) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, number VARCHAR(10) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, display VARCHAR(64) CHARACTER SET utf8mb4 DEFAULT \'-1\' NOT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE playerstattoos (id INT AUTO_INCREMENT NOT NULL, identifier VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, tattoos VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE concess');
        $this->addSql('CREATE UNIQUE INDEX id ON users (id)');
    }
}
