<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20230126114726 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create a legacy table with enum field that is never referenced in the project.';
    }

    public function up(Schema $schema): void
    {
        $this->addSql(
            "CREATE TABLE legacy_table (
                id INT AUTO_INCREMENT NOT NULL,
                type ENUM ('A', 'B', 'C') NOT NULL,
                PRIMARY KEY(id)
            ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB"
        );
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE legacy_table');
    }
}
