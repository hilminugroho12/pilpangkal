<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Manfaat extends Migration
{
	private $table = 'manfaat';
	public function up()
	{
		//menambahkan tabel pada databese yg sudah dibuat
		$this->forge->addField([
			'kode_manfaat'          => [
					'type'           => 'VARCHAR',
					'constraint'     => 1,
			],
			'kode_admin'          => [
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
		]);
		$this->forge->addKey('kode_manfaat', true);
		$this->forge->addForeignKey('kode_admin','admin','kode_admin','CASCADE','CASCADE');
		$this->forge->createTable($this->table);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable($this->table);
	}
}