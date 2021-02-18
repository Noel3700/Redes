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
        <title>Atores</title>
        </head>
        <body>
        <h1> Lista de Atores</h1>
            <?php
                $stm=$con->prepare('select * from atores');
                $stm->execute();
                $res=$stm->get_result();
                while($resultado=$res->fetch_assoc()){
                    echo '<a href="atores_edit.php?ator='.$resultado['id_ator'].'">';
                    echo $resultado['nome'];
                    echo'</a>';
                    echo '<br>';
                }
                $stm->close(); 
            ?>
        <br>
        <a href="atores_create.php">Adicionar Atores</a><br>
        <a href="login.php">Login</a><br>
        <a href="register.php">Register</a><br>
        <a href="listauser.php">Lista de utilizadores</a><br>
        <a href="atores.php">Atores</a><br>

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