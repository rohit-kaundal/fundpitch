<?php

use yii\db\Migration;

class m160418_100102_create_projectandrelated_tables extends Migration
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
        if (!in_array('project', $tables))  { 
        if ($dbType == "mysql") {
        	$this->createTable('{{%project}}', [
        		'id' => 'INT(10) UNSIGNED NOT NULL AUTO_INCREMENT',
        		0 => 'PRIMARY KEY (`id`)',
        		'title' => 'VARCHAR(100) NOT NULL',
        		'post-date' => 'DATETIME NOT NULL',
        		'abusecount' => 'INT(11) NOT NULL',
        		'deadline-date' => 'DATETIME NOT NULL',
        		'status-id' => 'INT(10) UNSIGNED NOT NULL',
        		'posted-by-id' => 'INT(10) UNSIGNED NOT NULL',
        		'visibility' => 'ENUM(\'pr\',\'pu\') NOT NULL DEFAULT \'pu\'',
        		'company-relation' => 'ENUM(\'ex\',\'new\') NOT NULL DEFAULT \'new\'',
        		'company-id' => 'INT(10) UNSIGNED NOT NULL',
        	], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('project_analytics', $tables))  { 
        if ($dbType == "mysql") {
        	$this->createTable('{{%project_analytics}}', [
        		'id' => 'INT(10) UNSIGNED NOT NULL AUTO_INCREMENT',
        		0 => 'PRIMARY KEY (`id`)',
        		'project_id' => 'INT(10) UNSIGNED NOT NULL',
        		'indvidiual-c' => 'INT(11) NOT NULL',
        		'vc-c' => 'INT(11) NOT NULL',
        		'firm-c' => 'INT(11) NOT NULL',
        		'total-c' => 'INT(11) NOT NULL',
        	], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('project_status', $tables))  { 
        if ($dbType == "mysql") {
        	$this->createTable('{{%project_status}}', [
        		'id' => 'INT(10) UNSIGNED NOT NULL AUTO_INCREMENT',
        		0 => 'PRIMARY KEY (`id`)',
        		'title' => 'VARCHAR(100) NOT NULL',
        	], $tableOptions_mysql);
        }
        }
         
         
        $this->createIndex('idx_status-id_0145_00','project','status-id',0);
        $this->createIndex('idx_posted-by-id_0145_01','project','posted-by-id',0);
        $this->createIndex('idx_company-id_0145_02','project','company-id',0);
        $this->createIndex('idx_UNIQUE_project_id_0176_03','project_analytics','project_id',1);
         
        $this->execute('SET foreign_key_checks = 0');
        $this->addForeignKey('fk_users_0138_00','{{%project}}', 'posted-by-id', '{{%users}}', 'id', 'CASCADE', 'NO ACTION' );
        $this->addForeignKey('fk_project_status_0138_01','{{%project}}', 'status-id', '{{%project_status}}', 'id', 'CASCADE', 'NO ACTION' );
        $this->addForeignKey('fk_project_0172_02','{{%project_analytics}}', 'project_id', '{{%project}}', 'id', 'CASCADE', 'NO ACTION' );
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `project`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `project_analytics`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `project_status`');
        $this->execute('SET foreign_key_checks = 1;');
    }
}
