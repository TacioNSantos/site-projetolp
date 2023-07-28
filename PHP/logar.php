<?php
    session_start();
    include("conexao.php");

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $result = mysqli_query($con, "SELECT * FROM tbl_login WHERE usuario='$usuario' AND senha='$senha' ");

    $qntdRow = mysqli_num_rows($result);

    if($qntdRow > 0){
        while($row = mysqli_fetch_array($result)){
            $_SESSION["ValidaLogin"] = true;
            $_SESSION["usuario"] = $row["usuario"];
            $_SESSION["senha"] = $row["senha"];
        }  
         header('location: ../paginas/painel.php');   
        die();

    }else{
        unset($_SESSION["ValidaLogin"]);
        unset($_SESSION["usuario"]);
        unset($_SESSION["senha"]);

        $_SESSION["msgErro"] = "Usuário ou senha incorreto!!";
        header('location: ../paginas/login.php');    
    }
    mysqli_close($con);
?>