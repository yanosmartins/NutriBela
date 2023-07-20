function usuarioBusca(email) {
    $.ajax({
        url: 'js/sqlscopeCadastro.php', //caminho do arquivo a ser executado
        dataType: 'html', //tipo do retorno
        type: 'post', //metodo de envio
        data: { funcao: 'buscaUsuario', email: email }, //valores enviados ao script     
        success: function (data) {
            if (data.indexOf('failed') > -1) {
                var piece = data.split("#");
                var mensagem = piece[1];
                if (mensagem !== "") {
                    Swal.fire(
                        'Oops!',
                        mensagem,
                        'error'
                    )
                    return;
                    // alert("Atenção", mensagem, "error");
                } else {
                    Swal.fire(
                        'Good job!',
                        'You clicked the button!',
                        'success'
                    )
                    return;
                }
                location.reload();
            } else {
                alert("Atenção", "aaaa");
            }
        },
        error: function (xhr, er) {
            //tratamento de erro
        }
    });

}