<?php

if ($_POST) {
    $n1 = $_POST["nota1"];
    $n2 = $_POST["nota2"];
    $n3 = $_POST["nota3"];
    $n4 = $_POST["nota4"];

    $soma = $n1 + $n2 + $n3 + $n4;
    $media = $soma / 4;

}

$mediaAluno = 9;

    if($mediaAluno == 10){
        echo "Aprovado com distinção";

    }else if ($mediaAluno >= 7){
        echo "Aprovad0";
            
    }else if ($mediaAluno < 7){
        echo "Reprovado";
        
    } else{
        echo "Média Inválida";
        }

?>