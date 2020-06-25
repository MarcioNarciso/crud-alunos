<?php

namespace App\Models;

use CodeIgniter\Model;

class AlunosModel extends Model
{
    protected $table = 'aluno';

    // Campos que podem ser alterados no banco de dados
    protected $allowedFields = ['nome', 'endereco', 'foto'];

    protected $primaryKey = 'id';

    // Regras utilizadas para validar as informações do aluno vindas do formulário
	protected $validationRules = [
		'nome' => 'required|min_length[3]|max_length[100]',
		'endereco' => 'required|min_length[3]|max_length[200]',
        'foto' => 'required|is_image[foto]'
	];

	protected $validationMessages = [
		'nome' => [
			'required' => 'O nome é obrigatório.',
			'min_length' => 'É obrigatório o mínimo de 3 letras',
			'max_length' => 'O nome é grade de mais. Máximo de 100 letras'
		],
		'endereco' => [
			'required' => 'O endereco é obrigatório.',
			'min_length' => 'É obrigatório o mínimo de 3 letras',
			'max_length' => 'O endereco é grade de mais. Máximo de 200 letras'
		],
        'foto' => [
            'required' => 'A foto é obrigatória.',
            'is_image' => 'O arquivo deve ser uma imagem.'
        ]
	];

    public function getAlunos($id = false)
    {
        if ($id) {
            return $this->find($id);
        } 
        
        return $this->findAll();
    }

}
