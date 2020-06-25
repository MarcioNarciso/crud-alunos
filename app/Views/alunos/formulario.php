<div class="container">
    <h3><?= esc($titulo) ?></h3>

    <div class="row">

        <div class="col-lg-6">
            <form action="/alunos/salvar" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="id"
                    value='<?= empty($aluno['id']) ? '' : $aluno['id'] ?>'>
            
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <?php if (!empty($erros['nome'])): ?>
                        <span class='mensagem-erro'>
                            <?= $erros['nome'] ?>
                        </span>
                    <?php endif; ?>
                    <input type="text" id="nome" name="nome" class="form-control"
                        value='<?= empty($aluno['nome']) ? '' : $aluno['nome'] ?>'>
        
                </div>
                <div class="form-group">
                    <label for="endereco">Endereço:</label>
                    <?php if (!empty($erros['endereco'])): ?>
                        <span class='mensagem-erro'>
                            <?= $erros['endereco'] ?>
                        </span>
                    <?php endif; ?>
                    <input type="text" id="endereco" name="endereco" class="form-control"
                        value='<?= empty($aluno['endereco']) ? '' : $aluno['endereco'] ?>'>
                </div>
                <div class="form-group">
                    <label for="foto">Foto:</label>
                    <?php if (!empty($erros['foto'])): ?>
                        <span class='mensagem-erro'>
                            <?= $erros['foto'] ?>
                        </span>
                    <?php endif; ?>
                    <button type="button" id="btnFoto" class="btn btn-success">Escolher foto</button>
                    <input type="file" id="foto" name="foto" class="form-control" accept="image/*">
                </div>
        
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="<?= base_url('alunos') ?>" class="btn btn-default">Cancelar</a>
            </form>
        </div>
        <div class="col-lg-6">
            <div class="container">
                <img id="exibeFotoAluno" src="<?= base_url($aluno['foto']) ?>"  alt="Foto do Aluno"
                    class='<?= empty($aluno['foto']) ? 'ocultar' : '' ?>'>
            </div>
        </div>
    </div>
</div>