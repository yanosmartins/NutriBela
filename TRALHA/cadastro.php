<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<script src="<?php echo ASSETS_URL; ?>/js/plugin/flot/jquery.flot.cust.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/flot/jquery.flot.resize.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/flot/jquery.flot.time.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/flot/jquery.flot.tooltip.min.js"></script>

<!-- Vector Maps Plugin: Vectormap engine, Vectormap language -->
<script src="<?php echo ASSETS_URL; ?>/js/plugin/vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/vectormap/jquery-jvectormap-world-mill-en.js"></script>

<!-- Full Calendar -->
<script src="<?php echo ASSETS_URL; ?>/js/plugin/moment/moment.min.js"></script>
<!--<script src="/js/plugin/fullcalendar/jquery.fullcalendar.min.js"></script>-->
<script src="<?php echo ASSETS_URL; ?>/js/plugin/fullcalendar/fullcalendar.js"></script>
<!--<script src="<?php echo ASSETS_URL; ?>/js/plugin/fullcalendar/locale-all.js"></script>-->


<!-- Form to json -->
<script src="<?php echo ASSETS_URL; ?>/js/plugin/form-to-json/form2js.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/form-to-json/jquery.toObject.js"></script>



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
</script>

// $("#cpf").mask('999.999.999-99', {
// reverse: true
// });
// $("#cpf").mask('999.999.999-99');
// $("#rg").mask('99.999.999-9');
// $("#dataNascimento").mask('99/99/9999');
// $("#dataNascimento").on("change", function() {
// let data = $("#dataNascimento").val()
// if (validaData(data) == false) {
// smartAlert("Atenção", "Data inválida ", "error");
// $("#idade").val("");
// document.getElementById('dataNascimento').value = '';
// $("#dataNascimento").focus();
// // disableButton();
// }
// });




// $("#cpf").on("change", function() {
// let data = $("#cpf").val()
// VerificaCPF()
// ValidaCPF()

// });

// $("#rg").on("change", function() {
// VerificaRG()
// });