<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200925181510 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD name_serveur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649205EB41B FOREIGN KEY (name_serveur_id) REFERENCES users (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649205EB41B ON user (name_serveur_id)');
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E9ED766068');
        $this->addSql('DROP INDEX UNIQ_1483A5E9ED766068 ON users');
        $this->addSql('ALTER TABLE users DROP username_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649205EB41B');
        $this->addSql('DROP INDEX UNIQ_8D93D649205EB41B ON user');
        $this->addSql('ALTER TABLE user DROP name_serveur_id');
        $this->addSql('ALTER TABLE users ADD username_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E9ED766068 FOREIGN KEY (username_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1483A5E9ED766068 ON users (username_id)');
    }
}
