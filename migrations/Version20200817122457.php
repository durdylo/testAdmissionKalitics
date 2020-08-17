<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200817122457 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE fonction (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fonction_role (fonction_id INT NOT NULL, role_id INT NOT NULL, INDEX IDX_2253C43657889920 (fonction_id), INDEX IDX_2253C436D60322AC (role_id), PRIMARY KEY(fonction_id, role_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, descripton VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, function_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_8D93D64967048801 (function_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE fonction_role ADD CONSTRAINT FK_2253C43657889920 FOREIGN KEY (fonction_id) REFERENCES fonction (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE fonction_role ADD CONSTRAINT FK_2253C436D60322AC FOREIGN KEY (role_id) REFERENCES role (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64967048801 FOREIGN KEY (function_id) REFERENCES fonction (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fonction_role DROP FOREIGN KEY FK_2253C43657889920');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64967048801');
        $this->addSql('ALTER TABLE fonction_role DROP FOREIGN KEY FK_2253C436D60322AC');
        $this->addSql('DROP TABLE fonction');
        $this->addSql('DROP TABLE fonction_role');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE user');
    }
}
