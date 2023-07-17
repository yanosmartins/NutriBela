<?php
include "js/repositorio.php";
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style/stylecadastro.css" />
    <title>Cadastro</title>
</head>

<body>
    <div class="main">
        <div class="left">
            <h1>Cadastre-se!<br>E venha fazer parte da nossa família..</h1>
            <img src="insumos/animacaologin.svg" class="left-image" alt="Login">
        </div>

        <div class="right">
            <div class="card">
                <h1>CADASTRO</h1>
                <div class="textfield">
                    <label for="usuario">Usuário</label>
                    <input id= "nome" type="text" name="usuario" placeholder="Seu nome" required>
                </div>
                <div class="textfield">
                    <label for="usuario">Email</label>
                    <input id= "email" type="text" name="email" placeholder="Seu email pessoal" required>
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input id= "senha" type="password" id="senha1" placeholder="Senha" required>
                </div>
                <div class="textfield">
                    <label for="senha">Confirme sua senha</label>
                    <input id= "senhaConfirma" type="password" name="senha" id="senha2" placeholder="Repita a senha" required>
                </div>
                <div class="showsenha">
                    <input id="btnshow" type="checkbox" onclick="mostraSenha()">
                    <label id= "btnMostraSenha" for="senha">Mostrar senhas</label>
                </div>

                <button id="btGrava" class="btn">Cadastrar</button>
                <div class="card-links">
                    <a href="login.html">Já possui Cadastro?</a>
                    <a href="index.html">Início</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script src="js/business.js" type="text/javascript"></script>
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

        $("#email").on("change", function() {
            var email = $("#email").val();
            buscaUsuario(email);
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


    });

    function buscaUsuario(email) {
        usuarioBusca(email);
    }

    
</script>
