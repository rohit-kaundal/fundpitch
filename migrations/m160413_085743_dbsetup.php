<?php

use yii\db\Migration;

class m160413_085743_dbsetup extends Migration
{
    public function up()
    {
        $tables = Yii::$app->db->schema->getTableNames();
        $dbType = $this->db->driverName;
        $tableOptions_mysql = "CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB";
        $tableOptions_mssql = "";
        $tableOptions_pgsql = "";
        $tableOptions_sqlite = "";
        /* MYSQL */
        if (!in_array('acquisitions', $tables))  { 
        if ($dbType == "mysql") {
        	$this->createTable('{{%acquisitions}}', [
        		'id' => 'INT(10) UNSIGNED NOT NULL AUTO_INCREMENT',
        		0 => 'PRIMARY KEY (`id`)',
        		'date' => 'DATETIME NOT NULL',
        		'acquisitiontitle' => 'VARCHAR(255) NOT NULL',
        		'amount' => 'DOUBLE NOT NULL',
        		'currencyid' => 'INT(11) NOT NULL',
        		'companyid' => 'INT(11) NOT NULL',
        	], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('company', $tables))  { 
        if ($dbType == "mysql") {
        	$this->createTable('{{%company}}', [
        		'id' => 'INT(10) UNSIGNED NOT NULL AUTO_INCREMENT',
        		0 => 'PRIMARY KEY (`id`)',
        		'name' => 'INT(11) NOT NULL',
        		'establishment' => 'DATETIME NOT NULL',
        		'secotrcount' => 'INT(11) NOT NULL',
        		'marketsize' => 'INT(11) NOT NULL',
        		'headquarters' => 'VARCHAR(100) NOT NULL',
        		'ipostock' => 'ENUM(\'Y\',\'N\') NOT NULL DEFAULT \'Y\'',
        		'companytypeid' => 'INT(11) NOT NULL',
        		'noofemployees' => 'INT(11) NOT NULL',
        		'targetedmarkets' => 'INT(11) NOT NULL',
        		'scopecapacity' => 'INT(11) NOT NULL',
        		'clientscount' => 'INT(11) NOT NULL',
        		'productservicecount' => 'INT(11) NOT NULL',
        		'companyvaluation' => 'DOUBLE NOT NULL',
        		'keyassociation' => 'TEXT NOT NULL',
        		'patentcount' => 'INT(11) NOT NULL',
        		'peers' => 'TEXT NOT NULL',
        		'companydetail' => 'TEXT NOT NULL',
        		'website' => 'TEXT NOT NULL',
        		'logo' => 'TEXT NOT NULL',
        		'presentcreditfacilities' => 'TEXT NOT NULL',
        		'taxabilityofproducts' => 'TEXT NOT NULL',
        		'fblink' => 'VARCHAR(255) NOT NULL',
        		'twitterlink' => 'VARCHAR(255) NOT NULL',
        		'googlepluslink' => 'VARCHAR(255) NOT NULL',
        		'linkedinlink' => 'VARCHAR(255) NOT NULL',
        		'requiremtnid' => 'INT(11) NOT NULL',
        		'requirement_meta' => 'TEXT NOT NULL',
        		'requirement_note' => 'TEXT NOT NULL',
        	], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('company_documents', $tables))  { 
        if ($dbType == "mysql") {
        	$this->createTable('{{%company_documents}}', [
        		'id' => 'INT(10) UNSIGNED NOT NULL AUTO_INCREMENT',
        		0 => 'PRIMARY KEY (`id`)',
        		'documenttypeid' => 'INT(11) NOT NULL',
        		'date' => 'DATETIME NOT NULL',
        		'file' => 'TEXT NOT NULL',
        	], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('company_location', $tables))  { 
        if ($dbType == "mysql") {
        	$this->createTable('{{%company_location}}', [
        		'id' => 'INT(10) UNSIGNED NOT NULL AUTO_INCREMENT',
        		0 => 'PRIMARY KEY (`id`)',
        		'location' => 'TEXT NOT NULL',
        		'companyid' => 'INT(10) UNSIGNED NOT NULL',
        	], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('company_types', $tables))  { 
        if ($dbType == "mysql") {
        	$this->createTable('{{%company_types}}', [
        		'id' => 'INT(10) UNSIGNED NOT NULL AUTO_INCREMENT',
        		0 => 'PRIMARY KEY (`id`)',
        		'title' => 'INT(11) NOT NULL',
        		'created_at' => 'DATETIME NOT NULL',
        		'created_by' => 'INT(10) UNSIGNED NOT NULL',
        	], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('currency', $tables))  { 
        if ($dbType == "mysql") {
        	$this->createTable('{{%currency}}', [
        		'id' => 'INT(10) UNSIGNED NOT NULL AUTO_INCREMENT',
        		0 => 'PRIMARY KEY (`id`)',
        		'currenytitle' => 'VARCHAR(100) NOT NULL',
        		'currencysymbol' => 'CHAR(10) NOT NULL',
        	], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('documents_type', $tables))  { 
        if ($dbType == "mysql") {
        	$this->createTable('{{%documents_type}}', [
        		'id' => 'INT(10) UNSIGNED NOT NULL AUTO_INCREMENT',
        		0 => 'PRIMARY KEY (`id`)',
        		'documenttype' => 'VARCHAR(255) NOT NULL',
        	], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('finance_detail', $tables))  { 
        if ($dbType == "mysql") {
        	$this->createTable('{{%finance_detail}}', [
        		'id' => 'INT(10) UNSIGNED NOT NULL AUTO_INCREMENT',
        		0 => 'PRIMARY KEY (`id`)',
        		'currentyearturnover' => 'INT(11) NOT NULL',
        		'currentyearcurrencyid' => 'INT(11) NOT NULL',
        		'estimatedturnover' => 'INT(11) NOT NULL',
        		'estimatedcurrencyid' => 'INT(11) NOT NULL',
        	], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('investments', $tables))  { 
        if ($dbType == "mysql") {
        	$this->createTable('{{%investments}}', [
        		'id' => 'INT(10) UNSIGNED NOT NULL AUTO_INCREMENT',
        		0 => 'PRIMARY KEY (`id`)',
        		'date' => 'DATETIME NOT NULL',
        		'investeetitle' => 'VARCHAR(255) NOT NULL',
        		'amount' => 'DOUBLE NOT NULL',
        		'currencyid' => 'INT(11) NOT NULL',
        		'companyid' => 'INT(11) NOT NULL',
        	], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('promoter_type', $tables))  { 
        if ($dbType == "mysql") {
        	$this->createTable('{{%promoter_type}}', [
        		'id' => 'INT(10) UNSIGNED NOT NULL AUTO_INCREMENT',
        		0 => 'PRIMARY KEY (`id`)',
        		'title' => 'INT(11) NOT NULL',
        	], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('promoters', $tables))  { 
        if ($dbType == "mysql") {
        	$this->createTable('{{%promoters}}', [
        		'id' => 'INT(10) UNSIGNED NOT NULL AUTO_INCREMENT',
        		0 => 'PRIMARY KEY (`id`)',
        		'name' => 'INT(11) NOT NULL',
        		'promotertypeid' => 'INT(11) NOT NULL',
        		'company_id' => 'INT(11) NOT NULL',
        		'pic' => 'TEXT NOT NULL',
        	], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('requirement_type', $tables))  { 
        if ($dbType == "mysql") {
        	$this->createTable('{{%requirement_type}}', [
        		'id' => 'INT(10) UNSIGNED NOT NULL AUTO_INCREMENT',
        		0 => 'PRIMARY KEY (`id`)',
        		'requirementname' => 'VARCHAR(100) NOT NULL',
        		'created_at' => 'DATETIME NOT NULL',
        		'created_by' => 'INT(10) UNSIGNED NOT NULL',
        	], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('sectors', $tables))  { 
        if ($dbType == "mysql") {
        	$this->createTable('{{%sectors}}', [
        		'id' => 'INT(10) UNSIGNED NOT NULL AUTO_INCREMENT',
        		0 => 'PRIMARY KEY (`id`)',
        		'sectorname' => 'VARCHAR(100) NOT NULL',
        		'created_at' => 'DATETIME NOT NULL',
        		'created_by' => 'INT(10) UNSIGNED NOT NULL',
        	], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('user_roles', $tables))  { 
        if ($dbType == "mysql") {
        	$this->createTable('{{%user_roles}}', [
        		'id' => 'INT(10) UNSIGNED NOT NULL AUTO_INCREMENT',
        		0 => 'PRIMARY KEY (`id`)',
        		'rolename' => 'VARCHAR(100) NOT NULL',
        		'created_at' => 'DATETIME NOT NULL',
        		'created_by' => 'INT(11) UNSIGNED NOT NULL',
        	], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('user_status', $tables))  { 
        if ($dbType == "mysql") {
        	$this->createTable('{{%user_status}}', [
        		'id' => 'INT(10) UNSIGNED NOT NULL AUTO_INCREMENT',
        		0 => 'PRIMARY KEY (`id`)',
        		'statusname' => 'VARCHAR(100) NOT NULL',
        		'created_at' => 'DATETIME NOT NULL',
        		'created_by' => 'INT(10) UNSIGNED NOT NULL',
        	], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('users', $tables))  { 
        if ($dbType == "mysql") {
        	$this->createTable('{{%users}}', [
        		'id' => 'INT(10) UNSIGNED NOT NULL AUTO_INCREMENT',
        		0 => 'PRIMARY KEY (`id`)',
        		'username' => 'VARCHAR(20) NOT NULL',
        		'email' => 'VARCHAR(100) NOT NULL',
        		'password' => 'VARCHAR(255) NOT NULL',
        		'firstname' => 'VARCHAR(30) NOT NULL',
        		'roleid' => 'INT(11) NOT NULL',
        		'statusid' => 'INT(11) NOT NULL',
        		'moblenumber' => 'VARCHAR(15) NOT NULL',
        		'activationcode' => 'VARCHAR(255) NOT NULL',
        		'creationdate' => 'DATETIME NOT NULL',
        		'logindate' => 'DATETIME NOT NULL',
        	], $tableOptions_mysql);
        }
        }
         
         
        $this->createIndex('idx_currencyid_3312_00','acquisitions','currencyid',0);
        $this->createIndex('idx_companyid_3312_01','acquisitions','companyid',0);
        $this->createIndex('idx_companytypeid_3384_02','company','companytypeid',0);
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `acquisitions`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `company`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `company_documents`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `company_location`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `company_types`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `currency`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `documents_type`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `finance_detail`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `investments`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `promoter_type`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `promoters`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `requirement_type`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `sectors`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `user_roles`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `user_status`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `users`');
        $this->execute('SET foreign_key_checks = 1;');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
