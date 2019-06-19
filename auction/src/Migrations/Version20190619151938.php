<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190619151938 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE bid_history (id INT AUTO_INCREMENT NOT NULL, product_id INT DEFAULT NULL, user_id INT DEFAULT NULL, bid_time DATETIME NOT NULL, bid_amount VARCHAR(45) NOT NULL, INDEX bid_history_user_id_fk (user_id), INDEX fk_bid_history_product1_idx (product_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, product_category_id INT DEFAULT NULL, owner VARCHAR(255) DEFAULT NULL, price VARCHAR(25) DEFAULT NULL, photo VARCHAR(255) DEFAULT NULL, about TEXT DEFAULT NULL, status VARCHAR(25) DEFAULT NULL, product_code INT NOT NULL, start_at DATETIME NOT NULL, finish_at DATETIME NOT NULL, INDEX fk_product_product_category1_idx (product_category_id), UNIQUE INDEX UNIQ_D34A04ADD614C7E7 (price), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `order` (id INT AUTO_INCREMENT NOT NULL, product_id INT DEFAULT NULL, user_id INT DEFAULT NULL, price VARCHAR(20) DEFAULT NULL, payment_details TEXT DEFAULT NULL, status VARCHAR(25) DEFAULT NULL, INDEX fk_order_product1_idx (product_id), INDEX order_user_id_fk (user_id), UNIQUE INDEX UNIQ_F52993984584665A (product_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, first_name VARCHAR(45) NOT NULL, last_name VARCHAR(45) NOT NULL, email VARCHAR(45) NOT NULL, password VARCHAR(200) NOT NULL, phone VARCHAR(45) NOT NULL, address VARCHAR(150) DEFAULT NULL, role VARCHAR(15) DEFAULT \'USER\', status VARCHAR(15) DEFAULT \'NEW\', identific_code VARCHAR(45) DEFAULT NULL, date_registration DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product_category (id INT AUTO_INCREMENT NOT NULL, parent_id INT DEFAULT NULL, name VARCHAR(200) NOT NULL, INDEX fk_product_category_product_category1_idx (parent_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bid_history ADD CONSTRAINT FK_79922F584584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE bid_history ADD CONSTRAINT FK_79922F58A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04ADBE6903FD FOREIGN KEY (product_category_id) REFERENCES product_category (id)');
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT FK_F52993984584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT FK_F5299398A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE product_category ADD CONSTRAINT FK_CDFC7356727ACA70 FOREIGN KEY (parent_id) REFERENCES product_category (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE bid_history DROP FOREIGN KEY FK_79922F584584665A');
        $this->addSql('ALTER TABLE `order` DROP FOREIGN KEY FK_F52993984584665A');
        $this->addSql('ALTER TABLE bid_history DROP FOREIGN KEY FK_79922F58A76ED395');
        $this->addSql('ALTER TABLE `order` DROP FOREIGN KEY FK_F5299398A76ED395');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04ADBE6903FD');
        $this->addSql('ALTER TABLE product_category DROP FOREIGN KEY FK_CDFC7356727ACA70');
        $this->addSql('DROP TABLE bid_history');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE `order`');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE product_category');
    }
}
