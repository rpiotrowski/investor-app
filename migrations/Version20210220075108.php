<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210220075108 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('
INSERT INTO inflation values (2019,102.3), (2018,101.6), (2017,102.0), (2016,99.4), (2015,99.1)
');


    }

    public function down(Schema $schema) : void
    {
        $this->addSql('
DELETE FROM inflation where year in (2019,2018,2017,2016,2015)
');
    }
}
