<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Paket extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_paket'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'tanggal_datang'       => [
				'type'       => 'DATETIME',
				'null' => TRUE,
			],
			'id_penghuni' => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'NIP' => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'isi_paket' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'tanggal_ambil'       => [
				'type'       => 'DATETIME',
				'null' => TRUE,
			]
		]);
		$this->forge->addKey('id_paket', true);
		$this->forge->createTable('paket');
	}

	public function down()
	{
		$this->forge->dropTable('paket');
	}
}
