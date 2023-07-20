<?php
include "repositorio.php";

$funcao = $_POST["funcao"];

if ($funcao == 'buscaUsuario') {
    call_user_func($funcao);
}

return;

function buscaUsuario()
{
    $email = $_POST["email"];

    $sql = "SELECT email FROM dbo.usuarios WHERE email = '$email'";
    $reposit = new reposit();
    $result = $reposit->RunQuery($sql);

    if ($result[0]) {
        $mensagem = "Email já registrado";
    } else {
        $mensagem = "";
    }

    $out = $mensagem;

    if ($mensagem != "") {
        echo "failed#" . $out;
    } else {
        echo "success#";
    }
    return;
}
