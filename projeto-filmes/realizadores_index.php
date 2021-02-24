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
    <title>Realizadores</title>
    </head>
    <body style="background-color:grey;color:white">
    <h1>Realizadores</h1>
    <?php
        $stm = $con->prepare('select * from realizadores');
        $stm->execute();
        $res=$stm->get_result();
        while($resultado = $res->fetch_assoc()){
            echo '<a href="realizadores_show.php?realizador='.$resultado['id_realizador'].'">';
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
         <a href="index.php"style="color:white">Filmes</a>
         <a href="atores_index.php"style="color:white">Atores</a>
        <a href="realizadores_create.php"style="color:white">Adicionar Realizadores</a>
        <a href="login.php"style="color:white">Login</a>
        <a href="register.php"style="color:white">Register</a>
        <a href="listauser.php"style="color:white">Lista de utilizadores</a>
    
        <br>
    </body>
</html>

<?php
    }
?>