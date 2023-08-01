<?php 
    include("conexao.php");

    $id_servico = $_POST["id-servico-apagar"];

    try{
        mysqli_query($con, "DELETE FROM `tbl_pgn-pagina-01` WHERE `id_servico`='$id_servico'");
        header("location: ../paginas/painel.php");
        mysqli_close($con);
    }catch(Exception $e){
        die($e->getMessage());
    }
    
?>