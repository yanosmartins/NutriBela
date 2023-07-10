<?php

include "js/repositorio.php";



 $sql = "SELECT * FROM dbo.usuarios";
 
 $reposit = new reposit();
 $result = $reposit->RunQuery($sql);

    foreach($result as $row){
        $codigo = $row['codigo'];
        echo $codigo. " "; 
    }
    echo (".");
    //só pra testar, criei um banco chamado TESTE
?>
