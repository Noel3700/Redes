<?php
    session_start();
    $con = new mysqli("localhost","root","","filmes");
    if($con->connect_errno!=0){
        echo "Ocorreu um erro no acesso à base de dados ".$con->connect_error;
        exit;
    }
    else{
?>
    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="ISO-8859-1">
    <title>Atores</title>
    </head>
    <body style="background-color:grey;color:white">
    <h1>Atores</h1>
    <?php
        $stm = $con->prepare('select * from atores');
        $stm->execute();
        $res=$stm->get_result();
        while($resultado = $res->fetch_assoc()){
            echo '<a href="atores_show.php?ator='.$resultado['id_ator'].'">';
            echo $resultado['nome'];
            echo '</a>';
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
         <br> <br>
        <a href="index.php">Filmes</a>
         
        <a href="atores_create.php"style="color:white">Adicionar Atores</a>
        <a href="login.php"style="color:white">Login</a>
        <a href="register.php"style="color:white">Register</a>
        <a href="listauser.php"style="color:white">Lista de utilizadores</a>
    
        <br>
    </body>
</html>

<?php
    }
?>