<?php
include "repositorio.php";

$funcao = $_POST["funcao"];

if ($funcao == 'buscaUsuario') {
    call_user_func($funcao);
}

return;

function buscaUsuario()
{

$sql = "SELECT * FROM dbo.usuarios";
 
$reposit = new reposit();
$result = $reposit->RunQuery($sql);

   foreach($result as $row){
       $email = $row['codigo'];
   }

   ;

   $out = $email;

   if ($out == "") {
       echo "failed#";
   } else {
       echo "sucess#" . $out;
   }
   return;

}




?>
