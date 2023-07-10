<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.7.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style/styleTabela.css" />
    <title>Tabela</title>
</head>

<body>
    <header class="">
        <button>Início</button>

    </header>
    <div>
        <label for="">Busca: </label><input id="busca" type="text">
        <button>Buscar</button>
    </div>

    <div class="main">

        <div class="item">
        </div>
        <div class="item">
        </div>
    </div>

</body>

</html>



<!-- 

<script>
                for (var i = 0; i < 9; i++) {
                    // <div class = "item" >
                    // </div>
                    // i = i + 1;
                }
            </script>




<script>
    $('#dlgQuadroValores').dialog({
        autoOpen: false,
        width: 400,
        resizable: false,
        modal: true,
        title: "<div class='widget-header'><h4><i class='fa fa-warning'></i>Valores</h4></div>",
        buttons: [{
            html: "Valores do alimento",
            "class": "btn btn-success",
            click: function() {
                $(this).dialog("close");

            }
        }, {
            html: "<i class='fa fa-times'></i>&nbsp; Cancelar",
            "class": "quadroProduto",
            click: function() {
                $(this).dialog("close");
            }
        }]
    });
</script> -->













<!-- 
<script language="JavaScript" type="text/javascript">
    $(document).ready(function() {
        //EVENTO CONSTANTE
        $("#nome").on("change", function() {
            let campo = '';
            let campoId = '';
            if (/[0-9\!\#\$\&\*\'\§\|\\_\/\"\<\>\=\^\~\+\?\.\{\}\`\´\\;\@\,\:\]\[\(\)]/g.test(this.value)) {

                smartAlert("Atenção", `Nome inválido! Use apenas Letras`, "error");
                // document.getElementById( `${campoId}`).value = '';
                $("#nome").val("");
                $("#nome").focus();

            };
        })



    });

    $('#dlgSimpleExcluir').dialog({
            autoOpen: false,
            width: 400,
            resizable: false,
            modal: true,
            title: "<div class='widget-header'><h4><i class='fa fa-warning'></i> Atenção</h4></div>",
            buttons: [{
                html: "Excluir registro",
                "class": "btn btn-success",
                click: function() {
                    $(this).dialog("close");
                    excluir();
                }
            }, {
                html: "<i class='fa fa-times'></i>&nbsp; Cancelar",
                "class": "btn btn-default",
                click: function() {
                    $(this).dialog("close");
                }
            }]
        });


    function mostraSenha() {
        var senha = document.getElementById("senha1", "senha2");
        if (senha.type == "password") {
            senha1.type = "text";
            senha2.type = "text";
        } else {
            senha1.type = "password";
            senha2.type = "password";
        }
    }
</script> -->