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
    <body>
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
                echo '<a href="utilizadores_edit.php?user='.$resultado['id'].'">User</a><br>';
            }
        }
        $stm->close();
        ?>
         <br> <br>
        <a href="index.php">Filmes</a>
         
        <a href="atores_create.php">Adicionar Atores</a>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
        <a href="listauser.php">Lista de utilizadores</a>
    
        <br>
    </body>
</html>

<?php
    }
?>