<?php
$equipas = array(
        'SLB'=>array(
            'Nome'=>'Sport Lisboa e Benfica',
            'Nome do Estádio'=>'Estádio da Luz',
            'Localidade'=>'Lisboa',
            'País'=>'Portugal'
        ),
        'LFC'=>array(
            'Nome'=>'Liverpool Football Club',
            'Nome do Estádio'=>'Anfield',
            'Localidade'=>'Liverpool',
            'País'=>'Inglaterra'
        ),
        'Flamengo'=>array(
            'Nome'=>'Clube de Regatas do Flamengo',
            'Nome do Estádio'=>'Estádio José Bastos Padilha',
            'Localidade'=>'Rio de Janeiro',
            'País'=>'Brasil'
        ),
        'Vilarinho'=>array(
            'Nome'=>'Futebol Clube de Vilarinho',
            'Nome do Estádio'=>'Estádio Municipal das Agras',
            'Localidade'=>'Vilarinho',
            'País'=>'Portugal'
        	)
         );
        foreach ($equipas as $equipa => $equipas) {
        echo '<h1>'. $equipa . '</h1>';
        foreach ($equipas as $chave => $detalhe) {
            echo '<b>'.$chave . '</b>=' . $detalhe . '<br>';
        }
    }


?>