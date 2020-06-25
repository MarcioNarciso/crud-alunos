<div class="container">
    <h3><?= esc($titulo) ?></h3>

    <?php if (!is_null($isAlunoDeletadoComSucesso) && !$isAlunoDeletadoComSucesso): ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Erro:</strong> Não foi possível excluir o aluno.
        </div>
    <?php endif; ?>

    <?php if (!empty($isAlunoDeletadoComSucesso) && $isAlunoDeletadoComSucesso): ?>
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            O aluno foi excluído com sucesso.
        </div>
    <?php endif; ?>

    <?php if(empty($alunos)): ?>
        <div class="alert alert-warning">Nunhum aluno cadastrado.</div>
    <?php else: ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Endereco</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($alunos as $aluno): ?>
                    <tr>
                        <td><?= $aluno['nome'] ?></td>
                        <td><?= $aluno['endereco'] ?></td>
                        <td>
                            <a href="<?= base_url('/alunos/formulario/' . $aluno['id']) ?>" title='Editar'>
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="<?= base_url('/alunos/deletar/' . $aluno['id']) ?>" style='color: red' title='Excluir'>
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

</div>