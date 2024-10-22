<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230401000000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add dtb_page table';
    }

    public function up(Schema $schema): void
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE dtb_page (
            id INT AUTO_INCREMENT NOT NULL,
            page_name VARCHAR(255) NOT NULL,
            url VARCHAR(255) NOT NULL,
            file_name VARCHAR(255) NOT NULL,
            edit_type SMALLINT NOT NULL,
            author VARCHAR(255) DEFAULT NULL,
            description LONGTEXT DEFAULT NULL,
            keyword LONGTEXT DEFAULT NULL,
            create_date DATETIME NOT NULL,
            update_date DATETIME NOT NULL,
            meta_robots VARCHAR(255) DEFAULT NULL,
            meta_tags LONGTEXT DEFAULT NULL,
            PRIMARY KEY(id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE dtb_page');
    }
}