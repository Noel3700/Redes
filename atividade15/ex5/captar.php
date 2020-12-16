<?php
    $num1 = $_GET["nu1"];
    $num2= $_GET["nu2"];
    $total = $num1 + $num2;
    echo "A turma tem: ".$total. " alunos<br>";

    $percentagemRapazes = ($num1 * 100) / $total;
    echo "Percentagem de rapazes na turma: ".$percentagemRapazes."%<br>";

    $percentagemRaparigas = ($num2 * 100) / $total;
    echo "Percentagem de raparigas na turma: ".$percentagemRaparigas."%<br>";
?>
