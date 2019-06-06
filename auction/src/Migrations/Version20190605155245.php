<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190605155245 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE bid_history CHANGE user_id user_id INT DEFAULT NULL, CHANGE product_id product_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE product CHANGE owner_id owner_id INT DEFAULT NULL, CHANGE price_id price_id INT DEFAULT NULL, CHANGE product_category_id product_category_id INT DEFAULT NULL, CHANGE product_about_id product_about_id INT DEFAULT NULL, CHANGE product_status_id product_status_id INT DEFAULT NULL, CHANGE order_id order_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE `order` CHANGE product_id product_id INT DEFAULT NULL, CHANGE price_id price_id INT DEFAULT NULL, CHANGE bank_details_id bank_details_id INT DEFAULT NULL, CHANGE order_status_id order_status_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE product_photo CHANGE product_id product_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE delivery CHANGE address_cities_id address_cities_id INT DEFAULT NULL, CHANGE delivery_service_id delivery_service_id INT DEFAULT NULL, CHANGE delivery_status_id delivery_status_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE address_cities CHANGE address_countries_id address_countries_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE address CHANGE address_cities_id address_cities_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE address ADD CONSTRAINT FK_D4E6F8150866FD0 FOREIGN KEY (address_cities_id) REFERENCES address_cities (id)');
        $this->addSql('CREATE INDEX IDX_D4E6F8150866FD0 ON address (address_cities_id)');
        $this->addSql('ALTER TABLE user CHANGE currency_id currency_id INT DEFAULT NULL, CHANGE address_id address_id INT DEFAULT NULL, CHANGE profile_user_id profile_user_id INT DEFAULT NULL, CHANGE user_role_id user_role_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE product_category CHANGE parent_id parent_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE address DROP FOREIGN KEY FK_D4E6F8150866FD0');
        $this->addSql('DROP INDEX IDX_D4E6F8150866FD0 ON address');
        $this->addSql('ALTER TABLE address CHANGE address_cities_id address_cities_id INT NOT NULL');
        $this->addSql('ALTER TABLE address_cities CHANGE address_countries_id address_countries_id INT NOT NULL');
        $this->addSql('ALTER TABLE bid_history CHANGE product_id product_id INT NOT NULL, CHANGE user_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE delivery CHANGE address_cities_id address_cities_id INT NOT NULL, CHANGE delivery_service_id delivery_service_id INT NOT NULL, CHANGE delivery_status_id delivery_status_id INT NOT NULL');
        $this->addSql('ALTER TABLE `order` CHANGE bank_details_id bank_details_id INT NOT NULL, CHANGE order_status_id order_status_id INT NOT NULL, CHANGE price_id price_id INT NOT NULL, CHANGE product_id product_id INT NOT NULL');
        $this->addSql('ALTER TABLE product CHANGE price_id price_id INT NOT NULL, CHANGE product_category_id product_category_id INT NOT NULL, CHANGE product_status_id product_status_id INT NOT NULL, CHANGE owner_id owner_id INT NOT NULL, CHANGE order_id order_id INT NOT NULL, CHANGE product_about_id product_about_id INT NOT NULL');
        $this->addSql('ALTER TABLE product_category CHANGE parent_id parent_id INT NOT NULL');
        $this->addSql('ALTER TABLE product_photo CHANGE product_id product_id INT NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE address_id address_id INT NOT NULL, CHANGE currency_id currency_id INT NOT NULL, CHANGE profile_user_id profile_user_id INT NOT NULL, CHANGE user_role_id user_role_id INT NOT NULL');
    }
}
