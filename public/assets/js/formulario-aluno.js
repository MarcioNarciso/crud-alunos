$(function () {
    $("#btnFoto").on('click', escolherFoto);
    $("#foto").on('change', carregarFoto);

    ocultarMolduraFoto();
})

function escolherFoto() {
    $("#foto").click();
}

function carregarFoto() {
    var imagem = $("#exibeFotoAluno");
    var arquivoFoto = $("#foto").prop("files")[0];

    imagem.prop('src', URL.createObjectURL(arquivoFoto));
    $("#exibeFotoAluno").show();
}

function ocultarMolduraFoto() {
    if ($("#exibeFotoAluno").prop('src') === '') {
        $("#exibeFotoAluno").hide();
    }
}