<?php 
    include("conexao.php");
    session_start();

    $titulo = $_POST["inserir-titulo-servico"];
    $descricao = $_POST["inserir-descricao-servico"];

    try{
        mysqli_query($con, "INSERT INTO `tbl_pgn-pagina-01` (`titulo_servico`, `descricao_servico`) VALUES ('$titulo', '$descricao')");
        $_SESSION["msg"] = "Serviço Inserido com Sucesso!";
        header("location: ../paginas/painel.php");
    }catch(Exception $er){
        die($er->getMessage());
    }
    
?>