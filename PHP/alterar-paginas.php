<?php 
    include("conexao.php");
    session_start();

    $pag = "index";

    if(isset($_SESSION["pgSelecionada"])){$pag = $_SESSION["pgSelecionada"];};

    // CASO SEJA A INDEX
    if($pag == "index"){
        echo"index";
        
        $result = mysqli_query($con, "SELECT * FROM `tbl_pgn-index` WHERE id='1' ");

        $dados_tbl = $result->fetch_array();

        $titulo_bloco_carrossel_01 = $_POST["titulo-carrossel-01"];
        if(!empty($_FILES["img-carrossel-01"]["name"])){$img_bloco_carrossel_01 = $_FILES["img-carrossel-01"];}else{ $img_bloco_carrossel_01 = array(); }
    
        $titulo_bloco_carrossel_02 = $_POST["titulo-carrossel-02"];
        if(!empty($_FILES["img-carrossel-02"]["name"])){$img_bloco_carrossel_02 = $_FILES["img-carrossel-02"];}else{ $img_bloco_carrossel_02 = array(); }
    
        $titulo_bloco_carrossel_03 = $_POST["titulo-carrossel-03"];
        if(!empty($_FILES["img-carrossel-03"]["name"])){$img_bloco_carrossel_03 = $_FILES["img-carrossel-03"];}else{ $img_bloco_carrossel_03 = array(); }
    
        $titulo_fundo_roxo = $_POST["titulo-fundo-roxo"];
        $texto_fundo_roxo = $_POST["texto-fundo-roxo"];
        if(!empty($_FILES["img-fundo-roxo"]["name"])){$img_fundo_roxo = $_FILES["img-fundo-roxo"];}else{$img_fundo_roxo = array();}
    
        $titulo_servico_01 = $_POST["titulo-servico-01"];
        $texto_servico_01 = $_POST["texto-servico-01"];
    
        $titulo_servico_02 = $_POST["titulo-servico-02"];
        $texto_servico_02 = $_POST["texto-servico-02"];
    
        $titulo_servico_03 = $_POST["titulo-servico-03"];
        $texto_servico_03 = $_POST["texto-servico-03"];


        if(key_exists("name", $img_bloco_carrossel_01)){
            if(move_uploaded_file($img_bloco_carrossel_01["tmp_name"], "../imagens/img-index/".$img_bloco_carrossel_01["name"])){
                if((!empty($dados_tbl["img_carrossel-01"]) or $dados_tbl["img_carrossel-01"] != null) and $img_bloco_carrossel_01["name"] != $dados_tbl["img_carrossel-01"] ){
                    $endereco_apagar = "../imagens/img-index/".$dados_tbl["img_carrossel-01"];
                    if(file_exists($endereco_apagar)){
                        unlink($endereco_apagar);
                    }
                    $nome_img_carrossel_01 = $img_bloco_carrossel_01["name"];
                }   
                $nome_img_carrossel_01 = $img_bloco_carrossel_01["name"];
            }
        }else{
                $nome_img_carrossel_01 = $dados_tbl["img_carrossel-01"];
            }

        if(key_exists("name", $img_bloco_carrossel_02)){
            if(move_uploaded_file($img_bloco_carrossel_02["tmp_name"], "../imagens/img-index/".$img_bloco_carrossel_02["name"])){
                if((!empty($dados_tbl["img_carrossel-02"]) or $dados_tbl["img_carrossel-02"] != null) and $img_bloco_carrossel_02["name"] != $dados_tbl["img_carrossel-02"] ){
                    $endereco_apagar = "../imagens/img-index/".$dados_tbl["img_carrossel-02"];
                    if(file_exists($endereco_apagar)){
                        unlink($endereco_apagar);
                    }
                    $nome_img_carrossel_02 = $img_bloco_carrossel_02["name"];
                }  
                $nome_img_carrossel_02 = $img_bloco_carrossel_02["name"]; 
            }
        }else{
            $nome_img_carrossel_02 = $dados_tbl["img_carrossel-02"];
        }
        
        if(key_exists("name", $img_bloco_carrossel_03)){
            if(move_uploaded_file($img_bloco_carrossel_03["tmp_name"], "../imagens/img-index/".$img_bloco_carrossel_03["name"])){
                if((!empty($dados_tbl["img_carrossel-03"]) or $dados_tbl["img_carrossel-03"] != null) and $img_bloco_carrossel_03["name"] != $dados_tbl["img_carrossel-03"] ){
                    $endereco_apagar = "../imagens/img-index/".$dados_tbl["img_carrossel-03"];
                    if(file_exists($endereco_apagar)){
                        unlink($endereco_apagar);
                    }
                    $nome_img_carrossel_03 = $img_bloco_carrossel_03["name"];
                } 
                $nome_img_carrossel_03 = $img_bloco_carrossel_03["name"];  
            }
        }else{
            $nome_img_carrossel_03 = $dados_tbl["img_carrossel-03"];
        }   
        
        if(key_exists("name", $img_fundo_roxo)){ 
            if(move_uploaded_file($img_fundo_roxo["tmp_name"], "../imagens/img-index/".$img_fundo_roxo["name"])){
                if((!empty($dados_tbl["img_fundo_roxo"]) or $dados_tbl["img_fundo_roxo"] != null) and $img_fundo_roxo["name"] != $dados_tbl["img_fundo_roxo"]){
                    $endereco_apagar = "../imagens/img-index/".$dados_tbl["img_fundo_roxo"];
                    if(file_exists($endereco_apagar)){
                        unlink($endereco_apagar);
                    }
                    $nome_img_fundo_roxo = $img_fundo_roxo["name"];
                }
                $nome_img_fundo_roxo = $img_fundo_roxo["name"];
            }
        }else{
                $nome_img_fundo_roxo = $dados_tbl["img_fundo_roxo"];
            }

        try{
            mysqli_query($con, "UPDATE `tbl_pgn-index` SET `titulo_carrossel-01`='$titulo_bloco_carrossel_01', `titulo_carrossel-02`='$titulo_bloco_carrossel_02',
                                `titulo_carrossel-03`='$titulo_bloco_carrossel_03', `img_carrossel-01`='$nome_img_carrossel_01',
                                `img_carrossel-02`='$nome_img_carrossel_02', `img_carrossel-03`='$nome_img_carrossel_03',
                                `titulo_fundo_roxo`='$titulo_fundo_roxo', `texto_fundo_roxo`='$texto_fundo_roxo',
                                `img_fundo_roxo`='$nome_img_fundo_roxo', `titulo_servico-01`='$titulo_servico_01',  
                                `titulo_servico-02`='$titulo_servico_02', `titulo_servico-03`='$titulo_servico_03' 
                                WHERE id='1' ");
                            
                                
            header("location: ../paginas/painel.php");

        }catch(Exception $e){
            die($e->getMessage());
        }

    // CASO SEJA A PAGINA-01
    }elseif($pag == "pagina-01"){
        echo"pagina-01";
    
    // CASO SEJA A PAGINA-02
    }elseif($pag == "pagina-02"){
        echo"pagina-02";

    }else{
        header("location: ../paginas/painel.php");
    }
    mysqli_close($con);
?> 