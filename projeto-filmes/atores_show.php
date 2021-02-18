<?php 
session_start()
    if($_SERVER['REQUEST_METHOD']=="GET"){
        if(!isset($_GET['ator']) || !is_numeric($_GET['ator'])){

            echo '<script>alert("Erro ao abrir o Ator");</script>';
            echo 'Aguarde um momento.A reencaminhar pagina';
            header("refresh:5; url=atores_index.php");
            exit();
        }
        $idAtor=$_GET['ator'];
        $con=new mysqli("localhost","root","","filmes");

        if($con->connect_error!=0){

            echo 'Ocorreu um erro no acesso a base de dados <br>'.$con->connect_error;
            exit();
        }else{
         if(!isset($_SESSION['login'])){
            $_SESSION['login']="incorreto";
        }
        if($_SESSION['login']=="correto"){
        
        else{
            $sql='select * from atores where id_ator=?';
            $stm=$con->prepare($sql);
            if($stm!=false){
                $stm->bind_param('i',$idAtor);
                $stm->execute();
                $res=$stm->get_result();
                $ator=$res->fetch_assoc();
                $stm->close();
            }
            else{
                echo '<br>';
                echo ($con->error);
                echo'<br>';
                echo"Aguarde um momento.A reencaminhar pagina";
                echo'<br>';
                header("refresh:5; url=atores_index.php");
            }
        }
    }
?>
    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <title>Detalhes</title>
    <body>
    <h1>Detalhes do Ator</h1>

    <?php
        if(isset($ator)){
            echo '<br><br>';
            echo "Nome do Ator: ";
            echo $ator['nome'];
            echo '<br><br>';
            echo "Data Nascimento: ";
            echo $ator['data_nascimento'];
            echo '<br><br>';
            echo "Nacionalidade: ";
            echo $ator['nacionalidade'];
            echo '<br><br>';
           
            echo '<a href="atores_edit.php?ator='.$ator['id_ator']. '">Editar</a><br>';
            echo '<a href="atores_delete.php?ator='.$ator['id_ator']. '">Eliminar</a>';
        }
        else{
            echo '<h2>O Ator selecionado nao exite</h2>';
        }
       
    ?>
  
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