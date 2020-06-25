<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAlunoTable extends Migration
{
	public function up()
	{
		// Especifica os campos da tabela
		$camposTabela = [
			'id' => [
				'type' => 'INT',
				'unsigned' => true,
				'auto_increment' => true
			],
			'nome' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => false
			],
			'endereco' => [
				'type' => 'VARCHAR',
				'constraint' => '200',
				'null' => false
			],
			'foto' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => false
			]
		];

		// Adiciona os campos à tabela
		$this->forge->addField($camposTabela);
		// Adiciona a constraint de chave primária
		$this->forge->addKey('id', true);
		// Cria a tabela
		$this->forge->createTable('aluno', true);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		// Destroi a tabela
		$this->forge->dropTable('aluno', true);
	}
}
