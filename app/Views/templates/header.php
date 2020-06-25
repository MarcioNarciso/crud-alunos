<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <?= link_tag('assets/css/geral.css'); ?>
    <?= link_tag('assets/css/footer.css'); ?>
    <?= link_tag('assets/css/formulario-aluno.css'); ?>
</head>
<body>
    <div class="pagina-container">

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container ">
                <a href="<?= base_url('alunos') ?>" class="navbar-brand">Alunos</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="<?= base_url('alunos/formulario') ?>" class="nav-link">Cadastrar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


    


