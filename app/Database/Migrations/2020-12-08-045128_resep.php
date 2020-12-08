<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Resep extends Migration
{
	private $table = 'resep';
	public function up()
	{
		//menambahkan tabel pada databese yg sudah dibuat
		$this->forge->addField([
			'kode_resep'          => [
					'type'           => 'VARCHAR',
					'constraint'     => 1,
			],
			'kode_admin'          => [
				'type'           => 'VARCHAR',
				'constraint'     => 1,
			],
			'kode_member'          => [
				'type'           => 'VARCHAR',
				'constraint'     => 1,
			],
			'judul'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '100',
			],
			'author' => [
					'type'           => 'VARCHAR',
					'constraint'     => '30',
			],
			'deskripsi' => [
				'type'           => 'TEXT',				
			],
			'foto' => [
				'type'           => 'TEXT',
			],
			'video' => [
				'type'           => 'TEXT',
			],
		]);
		$this->forge->addKey('kode_resep', true);
		$this->forge->addForeignKey('kode_admin','admin','kode_admin','CASCADE','CASCADE');
		$this->forge->addForeignKey('kode_member','member','kode_member','CASCADE','CASCADE');
		$this->forge->createTable($this->table);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable($this->table);
	}
}
