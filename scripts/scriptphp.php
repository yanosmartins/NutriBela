
    <?php

    $idade = 0;

    $altura = 0;
    $peso = 0;
    $resultado = '0';

    if(isset($_GET['Calcular'])){

        $idade = $_GET['idade'];
        $altura = $_GET['altura'];
        $peso = $_GET['peso'];
        $resultado = 1,5*(66,47+(13,75*$peso))+(5*$altura)-(6,8*$idade);

    }

