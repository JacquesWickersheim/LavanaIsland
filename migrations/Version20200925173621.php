<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200925173621 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD name_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64971179CD6 FOREIGN KEY (name_id) REFERENCES users (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D64971179CD6 ON user (name_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64971179CD6');
        $this->addSql('DROP INDEX UNIQ_8D93D64971179CD6 ON user');
        $this->addSql('ALTER TABLE user DROP name_id');
    }
}
