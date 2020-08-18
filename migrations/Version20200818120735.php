<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200818120735 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql("INSERT INTO role (name, description)
        VALUES 
        ('ROLE_APP_SETTING', 'Permet d’accéder aux paramétrages de l’application'),
        ('ROLE_PAY', 'Permet de créer des fiches de paie'),
        ('ROLE_GED', 'Permet d’accéder à la gestion documentaire'),
        ('ROLE_AGENDA', 'Permet d’accéder au module agenda'),
        ('ROLE_TEAM_MEETING', 'Permet d’accéder au module réunions d’équipes'),
        ('ROLE_SITE', 'Permet d’accéder au module ‘consultation chantier’')
        ");
    }

    public function down(Schema $schema): void
    {
    }
}
