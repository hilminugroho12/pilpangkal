<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin extends Migration
{
	private $table = 'admin';
	public function up()
	{
		//menambahkan tabel pada databese yg sudah dibuat
		$this->forge->addField([
			'kode_admin'          => [
					'type'           => 'VARCHAR',
					'constraint'     => 1,
			],
			'username'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '100',
			],
			'password' => [
					'type'           => 'VARCHAR',
					'constraint'     => '100',
			],
			'nama' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'email' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
		]);
		$this->forge->addKey('kode_admin', true);
		$this->forge->createTable($this->table);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable($this->table);
	}
}
