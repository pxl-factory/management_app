<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220422083158 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE employee_equipment_it (employee_id INT NOT NULL, equipment_it_id INT NOT NULL, INDEX IDX_62FDD2DA8C03F15C (employee_id), INDEX IDX_62FDD2DAC604E82C (equipment_it_id), PRIMARY KEY(employee_id, equipment_it_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE employee_equipment_it ADD CONSTRAINT FK_62FDD2DA8C03F15C FOREIGN KEY (employee_id) REFERENCES employee (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE employee_equipment_it ADD CONSTRAINT FK_62FDD2DAC604E82C FOREIGN KEY (equipment_it_id) REFERENCES equipment_it (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE employee_equipment_it');
    }
}
