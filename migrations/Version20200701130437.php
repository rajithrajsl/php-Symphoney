<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200701130437 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE admin_data_condition_groups (id INT AUTO_INCREMENT NOT NULL, prodh_5 VARCHAR(80) DEFAULT NULL, cond_group INT DEFAULT NULL, cond_group_text VARCHAR(255) DEFAULT NULL, vkbur VARCHAR(30) DEFAULT NULL, gbl_lead VARCHAR(180) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE admin_data_local_customer_group (id INT AUTO_INCREMENT NOT NULL, kdgrp_local VARCHAR(80) DEFAULT NULL, kdgrp_text VARCHAR(255) DEFAULT NULL, vl_lead VARCHAR(180) DEFAULT NULL, gbl_lead VARCHAR(180) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE condition_zprn_net_price (id INT AUTO_INCREMENT NOT NULL, kotabnr VARCHAR(30) DEFAULT NULL, knumh INT DEFAULT NULL, kappl VARCHAR(30) DEFAULT NULL, kschl VARCHAR(30) DEFAULT NULL, vkorg VARCHAR(30) DEFAULT NULL, vtweg INT DEFAULT NULL, kunnr INT DEFAULT NULL, matnr INT DEFAULT NULL, datab DATETIME DEFAULT NULL, datbi DATETIME DEFAULT NULL, hienr INT DEFAULT NULL, konda INT DEFAULT NULL, konms VARCHAR(30) DEFAULT NULL, kstbm NUMERIC(8, 3) DEFAULT \'0.000\', kbetr NUMERIC(8, 3) DEFAULT \'0.000\', konwa VARCHAR(30) DEFAULT NULL, kpein INT DEFAULT NULL, kmein VARCHAR(30) DEFAULT NULL, kznep INT DEFAULT NULL, zterm INT DEFAULT NULL, kstbm001 NUMERIC(8, 3) DEFAULT \'0.000\', kbetr001 NUMERIC(8, 3) DEFAULT \'0.000\', kstbm002 NUMERIC(8, 3) DEFAULT \'0.000\', kbetr002 NUMERIC(8, 3) DEFAULT \'0.000\', kstbm003 NUMERIC(8, 3) DEFAULT \'0.000\', kbetr003 NUMERIC(8, 3) DEFAULT \'0.000\', kstbm004 NUMERIC(8, 3) DEFAULT \'0.000\', kbetr004 NUMERIC(8, 3) DEFAULT \'0.000\', kstbm005 NUMERIC(8, 3) DEFAULT \'0.000\', kbetr005 NUMERIC(8, 3) DEFAULT \'0.000\', supkbetr_zraz NUMERIC(8, 3) DEFAULT \'0.000\', supkonwa_zraz VARCHAR(30) DEFAULT NULL, supkpein_zraz INT DEFAULT NULL, supkmein_zraz INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE condition_zprp_pallet_price (id INT AUTO_INCREMENT NOT NULL, kotabnr VARCHAR(30) DEFAULT NULL, knumh INT DEFAULT NULL, kappl VARCHAR(30) DEFAULT NULL, kschl VARCHAR(30) DEFAULT NULL, vkorg VARCHAR(30) DEFAULT NULL, vtweg INT DEFAULT NULL, kunnr INT DEFAULT NULL, matnr INT DEFAULT NULL, datab DATETIME DEFAULT NULL, datbi DATETIME DEFAULT NULL, hienr INT DEFAULT NULL, spart INT DEFAULT NULL, rke_kvgr1 INT DEFAULT NULL, rke_kvgr2 INT DEFAULT NULL, kfrst INT DEFAULT NULL, konms VARCHAR(30) DEFAULT NULL, kstbm NUMERIC(8, 3) DEFAULT \'0.000\', kbetr NUMERIC(8, 3) DEFAULT \'0.000\', konwa VARCHAR(30) DEFAULT NULL, kpein INT DEFAULT NULL, kmein VARCHAR(30) DEFAULT NULL, kznep INT DEFAULT NULL, zterm INT DEFAULT NULL, kstbm001 NUMERIC(8, 3) DEFAULT \'0.000\', kbetr001 NUMERIC(8, 3) DEFAULT \'0.000\', kstbm002 NUMERIC(8, 3) DEFAULT \'0.000\', kbetr002 NUMERIC(8, 3) DEFAULT \'0.000\', kstbm003 NUMERIC(8, 3) DEFAULT \'0.000\', kbetr003 NUMERIC(8, 3) DEFAULT \'0.000\', kstbm004 NUMERIC(8, 3) DEFAULT \'0.000\', kbetr004 NUMERIC(8, 3) DEFAULT \'0.000\', kstbm005 NUMERIC(8, 3) DEFAULT \'0.000\', kbetr005 NUMERIC(8, 3) DEFAULT \'0.000\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE master_data_customer_0001 (id INT AUTO_INCREMENT NOT NULL, kunnr INT DEFAULT NULL, ktokd INT DEFAULT NULL, vkorg VARCHAR(30) DEFAULT NULL, vtweg INT DEFAULT NULL, spart INT DEFAULT NULL, sort1 VARCHAR(40) DEFAULT NULL, name1 VARCHAR(80) DEFAULT NULL, name2 VARCHAR(80) DEFAULT NULL, name3 VARCHAR(80) DEFAULT NULL, street VARCHAR(100) DEFAULT NULL, house_num1 INT DEFAULT NULL, post_code1 INT DEFAULT NULL, city1 VARCHAR(100) DEFAULT NULL, region VARCHAR(100) DEFAULT NULL, country VARCHAR(100) DEFAULT NULL, konzs VARCHAR(40) DEFAULT NULL, kvgr1 VARCHAR(30) DEFAULT NULL, kvgr2 VARCHAR(30) DEFAULT NULL, vkbur VARCHAR(30) DEFAULT NULL, kdgrp INT DEFAULT NULL, bzirk VARCHAR(30) DEFAULT NULL, kdgrp_local VARCHAR(40) DEFAULT NULL, klabc VARCHAR(20) DEFAULT NULL, klabc_plan VARCHAR(10) DEFAULT NULL, pernr INT DEFAULT NULL, zterm INT DEFAULT NULL, hienr INT DEFAULT NULL, kunnr_rg INT DEFAULT NULL, konda INT DEFAULT NULL, waers VARCHAR(3) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE master_data_customer_0012 (id INT AUTO_INCREMENT NOT NULL, hienr INT DEFAULT NULL, ktokd INT DEFAULT NULL, vkorg VARCHAR(30) DEFAULT NULL, vtweg INT DEFAULT NULL, spart INT DEFAULT NULL, sort1 VARCHAR(40) DEFAULT NULL, name1 VARCHAR(80) DEFAULT NULL, name2 VARCHAR(80) DEFAULT NULL, name3 VARCHAR(80) DEFAULT NULL, street VARCHAR(100) DEFAULT NULL, house_num1 INT DEFAULT NULL, post_code1 INT DEFAULT NULL, city1 VARCHAR(100) DEFAULT NULL, region VARCHAR(100) DEFAULT NULL, country VARCHAR(100) DEFAULT NULL, kvgr1 VARCHAR(30) DEFAULT NULL, kvgr2 VARCHAR(30) DEFAULT NULL, vkbur VARCHAR(30) DEFAULT NULL, kdgrp INT DEFAULT NULL, bzirk VARCHAR(30) DEFAULT NULL, kdgrp_local VARCHAR(40) DEFAULT NULL, klabc VARCHAR(20) DEFAULT NULL, klabc_plan VARCHAR(10) DEFAULT NULL, pernr INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE master_data_local_product_hierarchy (id INT AUTO_INCREMENT NOT NULL, prodh VARCHAR(180) DEFAULT NULL, prodh_text VARCHAR(255) DEFAULT NULL, gbl_lead VARCHAR(180) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE master_data_material (id INT AUTO_INCREMENT NOT NULL, matnr INT DEFAULT NULL, maktx VARCHAR(255) DEFAULT NULL, vmsta VARCHAR(30) DEFAULT NULL, prat5 VARCHAR(30) DEFAULT NULL, prodh VARCHAR(180) DEFAULT NULL, gbl_lead VARCHAR(180) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sales_figures (id INT AUTO_INCREMENT NOT NULL, kunnr INT DEFAULT NULL, prodh_5 VARCHAR(80) DEFAULT NULL, prodh VARCHAR(180) DEFAULT NULL, matnr INT DEFAULT NULL, net_sales_cy NUMERIC(9, 2) DEFAULT NULL, net_sales_py NUMERIC(9, 2) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sla_discount_by_classification (id INT AUTO_INCREMENT NOT NULL, klabc_plan VARCHAR(20) DEFAULT NULL, base_discount VARCHAR(30) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE admin_data_condition_groups');
        $this->addSql('DROP TABLE admin_data_local_customer_group');
        $this->addSql('DROP TABLE condition_zprn_net_price');
        $this->addSql('DROP TABLE condition_zprp_pallet_price');
        $this->addSql('DROP TABLE master_data_customer_0001');
        $this->addSql('DROP TABLE master_data_customer_0012');
        $this->addSql('DROP TABLE master_data_local_product_hierarchy');
        $this->addSql('DROP TABLE master_data_material');
        $this->addSql('DROP TABLE sales_figures');
        $this->addSql('DROP TABLE sla_discount_by_classification');
    }
}
