  
<?php 
    $con=new mysqli("localhost","root","","filmes");
    if($con->connect_error!=0){
        echo"Ocorreu um erro ".$con->connect_error;
        exit;
    }else{
        ?>
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="ISO-8859-1">
        <title>filmes</title>
        </head>
        <body>
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
            ?>
        <br>
        <button> <a href="filmes_create.php">Adicionar</a></button><br><br>
        <button> <a href="login.php">Login</a></button>
        <button> <a href="register.php">Registar</a></button>
        <button> <a href="listauser.php">Lista dos Utilizadores</a></button>


        </body>
        </html>
        <?php 
        }
        ?>