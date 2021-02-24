<?php 
session_start();
    $con=new mysqli("localhost","root","","filmes");
    if($con->connect_error!=0){
        echo"Ocorreu um erro ".$con->connect_error;
        exit;
    }else{
        if(!isset($_SESSION['login'])){
            $_SESSION['login']="incorreto";
        }
        if($_SESSION['login']=="correto"){

        ?>
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="ISO-8859-1">
        <title>filmes</title>
        </head>
        <body style="background-color:grey;color:white">
        <h1> Lista de filmes</h1>
            <?php
                $stm=$con->prepare('select * from filmes');
                $stm->execute();
                $res=$stm->get_result();
                while($resultado=$res->fetch_assoc()){
                    echo '<a href="filmes_show.php?filme='.$resultado['id_filme'].'">';
                    echo $resultado['titulo'];
                    echo'</a>';
                    echo '<br>';
                }
                $stm->close();
                echo "<br>";
        $stm = $con->prepare('select * from utilizadores');
        $stm->execute();
        $res=$stm->get_result();
        while($resultado = $res->fetch_assoc()){
            if($resultado['id'] == $_SESSION['id_user']){
                echo '<a href="utilizador_edit.php?user='.$resultado['id'].'">Utilizador</a><br>';
            }
        }
        $stm->close();
            ?>
        <br>
        <a href="filmes_create.php" style="color:white">Adicionar livros</a><br>
        <a href="login.php"style="color:white">Login</a><br>
        <a href="register.php"style="color:white">Register</a><br>
        <a href="listauser.php"style="color:white">Lista de utilizadores</a><br>
        <a href="atores.php"style="color:white">Atores</a><br>
        <a href="realizadores_index.php"style="color:white">Realizadores</a><br>

        </body>
        </html>
        <?php 
        }
        else{
            echo 'Para entrar nesta página necessita de efetuar <a href="login.php">login</a> ';
            header('refresh: 2; url= login.php');
        }

    }
        ?>