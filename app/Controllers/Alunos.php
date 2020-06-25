<?php

namespace App\Controllers;

use App\Models\AlunosModel;
use App\Libraries\View;

class Alunos extends BaseController {

    public function index()
    {
        // Busca todos os alunos cadastrados
        $dados['alunos'] = (new AlunosModel())->getAlunos();
        $dados['titulo'] = 'Alunos cadastrados';
        $dados['isAlunoDeletadoComSucesso'] = null;

        View::render('alunos/lista', $dados);
    }

    public function formulario($id=null)
    {
        if (empty($id)) {
            $dados['titulo'] = 'Cadastrar Aluno';
            $dados['aluno'] = null;
        } else {
            $dados['titulo'] = 'Alterar Aluno';
            $dados['aluno'] = (new AlunosModel())->getAlunos($id);
        }

        $dados['erros'] = array();

        View::render('alunos/formulario', $dados);
    }

    public function salvar()
    {
        // Obtém os dados vindos na requisição
        $aluno = [
            'id' => $this->request->getVar('id'),
            'nome' => $this->request->getVar('nome'),
            'endereco' => $this->request->getVar('endereco'),
            'foto' => ''
        ];

        // Obtém o arquivo enviado na requisição
        $arquivoFoto = $this->request->getFile('foto');

        // Verifica se é o arquivo válido
        if ($arquivoFoto->isValid()) {
            $aluno['foto'] = $arquivoFoto->getRandomName();
        }

        $alunosModel = new AlunosModel();

        // Executa as regras de validação nos dados do aluno
        $isAlunoValido = $alunosModel->validate($aluno);
        if ($isAlunoValido) {
            $diretorioImagens = 'assets/images/';

            // Move a imagem para seu diretório definitivo
            $arquivoFoto->move($diretorioImagens, $aluno['foto']);
            $aluno['foto'] = $diretorioImagens . $aluno['foto'];
            
            $isAlunoSalvo = $alunosModel->save($aluno);
            //Se o aluno foi salvo corretamente, o usuário é redirecionado para a listagem dos alunos.
            if ($isAlunoSalvo) {
                return redirect()->to('/alunos');
            } 
        }
            
        // Houve erro na validação e o usuário é redirecionado para o formulário
        $dados['titulo'] = 'Cadastrar Aluno';
        $dados['aluno'] = $aluno;
        $dados['erros'] = $alunosModel->errors();
        
        // Renderiza a visão
        View::render('alunos/formulario', $dados);
    }

    public function deletar($id)
    {
        $alunosModel = new AlunosModel();
        // Busca as informações do aluno que será excluído para compor a mensagem
        // de resposta.
        $aluno = $alunosModel->getAlunos($id); 

        // Exclui o aluno
        $result = $alunosModel->delete($id);

        $dados['isAlunoDeletadoComSucesso'] = false;
        if ($result) {
            $dados['isAlunoDeletadoComSucesso'] = true;
        } 

        // Exclui o arquivo da foto do servidor
        if (!empty($aluno['foto']) && file_exists($aluno['foto'])) {
            unlink($aluno['foto']);
        }

        // Busca todos os alunos cadastrados para serem exibidos na listagem
        $dados['alunos'] = $alunosModel->getAlunos();
        $dados['titulo'] = 'Alunos cadastrados';

        View::render('alunos/lista', $dados);
    }
}