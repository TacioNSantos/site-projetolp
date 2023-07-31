<?php 
    include("conexao.php");

    $titulo = $_POST["inserir-titulo-servico"];
    $descricao = $_POST["inserir-descricao-servico"];

    try{
        mysqli_query($con, "INSERT INTO `tbl_pgn-pagina-01` (`titulo_servico`, `descricao_servico`) VALUES ('$titulo', '$descricao')");
        header("location: ../paginas/painel.php");
    }catch(Exception $er){
        die($er->getMessage());
    }
    
?>