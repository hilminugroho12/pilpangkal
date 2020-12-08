<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Member extends Migration
{
	private $table = 'member';
	public function up()
	{
		//menambahkan tabel pada databese yg sudah dibuat
		$this->forge->addField([
			'kode_member'          => [
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
		$this->forge->addKey('kode_member', true);
		$this->forge->createTable($this->table);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable($this->table);
	}
}
