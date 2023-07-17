function usuarioBusca(email) {
    $.ajax({
        url: 'js/sqlscope.php', //caminho do arquivo a ser executado
        dataType: 'html', //tipo do retorno
        type: 'post', //metodo de envio
        data: { funcao: 'buscaUsuario', email: email}, //valores enviados ao script     
        beforeSend: function () {
            //função chamada antes de realizar o ajax
        },
        complete: function () {
            //função executada depois de terminar o ajax
        },
        success: function (data) {
            if (data.indexOf('failed') > -1) {
                var piece = data.split("#");
                var mensagem = piece[1];

                if (mensagem !== "") {
                    alert("Atenção", mensagem, "error");
                } else {
                    alert("Atenção", "Operação não realizada - entre em contato com a GIR!", "error");
                }
                location.reload();
            } else {

                alert("Sucesso", "Operação realizada com sucesso!", "success");
                voltar()
                // location.reload();
            }
        },
        error: function (xhr, er) {
            //tratamento de erro
        }
    });

}