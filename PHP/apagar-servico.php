<?php 
    include("conexao.php");
    session_start();


    $id_servico = $_POST["id-servico-apagar"];

    try{
        mysqli_query($con, "DELETE FROM `tbl_pgn-pagina-01` WHERE `id_servico`='$id_servico'");
        $_SESSION["msg"] = "Serviço Deletado com Sucesso!";
        header("location: ../paginas/painel.php");
        mysqli_close($con);
    }catch(Exception $e){
        $_SESSION["msg"] = "O Serviço não foi Deletado";
        die($e->getMessage());
    }
    
?>