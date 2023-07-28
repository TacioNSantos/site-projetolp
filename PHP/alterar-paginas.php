<?php 
    include("conexao.php");

    session_start();

    $pag = "";

    if(isset($_SESSION["pgSelecionada"])){$pag = $_SESSION["pgSelecionada"];};


    $titulo_bloco_carrossel_01 = $_POST["titulo-carrossel-01"];
    $img_bloco_carrossel_01 = $_FILES["img-carrossel-01"];

    $titulo_bloco_carrossel_02 = $_POST["titulo-carrossel-02"];
    $img_bloco_carrossel_02 = $_FILES["img-carrossel-02"];

    $titulo_bloco_carrossel_03 = $_POST["titulo-carrossel-03"];
    $img_bloco_carrossel_03 = $_FILES["img-carrossel-03"];

    $titulo_fundo_roxo = $_POST["titulo-fundo-roxo"];
    $texto_fundo_roxo = $_POST["texto-fundo-roxo"];
    $img_fundo_roxo = $_FILES["img-fundo-roxo"];

    $titulo_servico_01 = $_POST["titulo-servico-01"];
    $texto_servico_01 = $_POST["texto-servico-01"];

    $titulo_servico_02 = $_POST["titulo-servico-02"];
    $texto_servico_02 = $_POST["texto-servico-02"];

    $titulo_servico_03 = $_POST["titulo-servico-03"];
    $texto_servico_03 = $_POST["texto-servico-03"];

    if($pag == "index"){
        echo"index";

        try{
            mysqli_query($con, "UPDATE `tbl_pgn-index` SET `titulo_carrossel-01`='$titulo_bloco_carrossel_01', `titulo_carrossel-02`='$titulo_bloco_carrossel_02',
                                `titulo_carrossel-03`='$titulo_bloco_carrossel_03', `titulo_fundo_roxo`='$titulo_fundo_roxo', 
                                `texto_fundo_roxo`='$texto_fundo_roxo', `titulo_servico-01`='$titulo_servico_01',  `titulo_servico-02`='$titulo_servico_02',
                                `titulo_servico-03`='$titulo_servico_03' 
                                WHERE id='1' ");
            mysqli_close($con); 
            echo"Alterado com sucesso!";

        }catch(Exception $e){
            die($e->getMessage());
        }

    }elseif($pag == "pagina-01"){
        echo"pagina-01";
        
    }elseif($pag == "pagina-02"){
        echo"pagina-02";

    }
?> 