<?php
/**
 * Migration: CreateUsersTable
 *
 * Created by: Cli for CodeIgniter <https://github.com/kenjis/codeigniter-cli>
 * Created on: 2017/02/10 08:11:54
 */
class Migration_CreateUsersTable extends CI_Migration {

	public function up()
	{
		// Creating a table
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 11,
				'auto_increment' => TRUE
			),
			'username' => array(
				'type' => 'VARCHAR',
				'constraint' => 20,
			),
			'email' => array(
				'type' => 'VARCHAR',
				'constraint' => 100,
			),
			'password' => array(
				'type' => 'VARCHAR',
				'constraint' => 20,
			),
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('users');

	}

	public function down()
	{
//		// Dropping a table
//		$this->dbforge->drop_table('blog');

//		// Dropping a Column From a Table
//		$this->dbforge->drop_column('table_name', 'column_to_drop');
	}

}
