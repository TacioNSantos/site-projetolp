<?php 
    include("../PHP/conexao.php");
    session_start(); 

    if(!isset($_SESSION["ValidaLogin"])){
        header("location: login.php");
        session_destroy();
    }

    $query_pagina_index =  mysqli_query($con, "SELECT * FROM `tbl_pgn-index` WHERE id='1'");
    
    $query_pagina_01 = mysqli_query($con, "SELECT * FROM `tbl_pgn-pagina-01`");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle</title>
    <link rel="stylesheet" href="../CSS/geral.css">
    <link rel="stylesheet" href="../CSS/painel-css.php" type="text/css">

    <style>
       
    </style>
</head>

</head>
<body>

<?php 
    if(isset($_SESSION["msg"])){
        echo
        "<div id='popup'>".
            $_SESSION['msg']. "<a href='#popup'><input type='button' value='OK'></a>       
        </div>
        ";
        unset($_SESSION["msg"]);
    }
?>  
    <header>
            <div id="logo">
                <a href="../index.php">
                    <img src="../imagens/logo.png" alt="logo" width="100%">
                </a>
            </div>  
            <a href="../index.php"><h4 id="empresa">HOWSEC</h4></a>
            <nav>
                <a href="pagina01.php" class="">Serviços</a>
                <a href="https://raw.githubusercontent.com/TacioNSantos/site-projetolp/main/paginas/pagina01.php" class="">Quem somos</a>
                <a href="#" class="">Contato</a>
                <a href="#" class="">Perceiros</a>
            </nav>
            
            <div id="usuario">
                <a href="login.php"><img src="../imagens/icone_usuario.png" alt="icone do usuário"></a>
            </div>
    </header>
        
    <div id="geral">
        <form action="../PHP/controlador-painel.php" method="POST" name="form-escolher-pagina" id="form-escolher-pagina">
            <label for="pagina-escolhida">Página para Editar: </label> <select name="pagina-escolhida" id="pagina-escolhida">
                <option value="index" <?php if(isset($_SESSION["pgSelecionada"]) and $_SESSION["pgSelecionada"] == "index"){echo"selected";}?> >Index</option>
                <option value="pagina-01" <?php if(isset($_SESSION["pgSelecionada"]) and $_SESSION["pgSelecionada"] == "pagina-01"){echo"selected";}?>>Página 01</option>
                <option value="pagina-02" <?php if(isset($_SESSION["pgSelecionada"]) and $_SESSION["pgSelecionada"] == "pagina-02"){echo"selected";}?>>Página 02</option>
            </select>
            <input type="submit" value="Editar">
        </form>

        <div id="form-index" class="forms-pag">
            <form name="form-pg-index" action="../PHP/alterar-paginas.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" value="index" name="pagina">

                <center><h2>Página Index</h2></center>
                <?php mysqli_data_seek($query_pagina_index, 0); while($row = mysqli_fetch_array($query_pagina_index)){ ?>
                    <label for="titulo-carrossel-01">Titulo 1º bloco do Carrossel:</label><input required type="text" id="titulo-carrossel-01" name="titulo-carrossel-01" size="70" maxlength="70" value="<?=$row['titulo_carrossel-01']?>"><br>
                    <div class="visualizar-imagem"><label for="img-carrossel-01">Imagem 1º bloco do Carrossel:</label><input type="file" accept="image/*" id="img-carrossel-01" name="img-carrossel-01"><div class="imagem"><p class="p-atual">ATUAL</p><img src="../imagens/img-index/<?=$row['img_carrossel-01']?>" alt="Imagem Atual" width="100%"></div></div><br>

                    <label for="titulo-carrossel-02">Titulo 2º bloco do Carrossel:</label><input required type="text" id="titulo-carrossel-02" name="titulo-carrossel-02" size="70" maxlength="70" value="<?=$row['titulo_carrossel-02']?>"><br>
                    <div class="visualizar-imagem"><label for="img-carrossel-02">Imagem 2º bloco do Carrossel:</label><input type="file" accept="image/*" id="img-carrossel-02" name="img-carrossel-02"><div class="imagem"><p class="p-atual">ATUAL</p><img src="../imagens/img-index/<?=$row['img_carrossel-02']?>" alt="Imagem Atual" width="100%"></div></div><br>
                
                    <label for="titulo-carrossel-03">Titulo 3º bloco do Carrossel:</label><input required type="text" id="titulo-carrossel-03" name="titulo-carrossel-03" size="70" maxlength="70" value="<?=$row['titulo_carrossel-03']?>"><br>
                    <div class="visualizar-imagem"><label for="img-carrossel-03">Imagem 3º bloco do Carrossel:</label><input type="file" accept="image/*" id="img-carrossel-03" name="img-carrossel-03"><div class="imagem"><p class="p-atual">ATUAL</p><img src="../imagens/img-index/<?=$row['img_carrossel-03']?>" alt="Imagem Atual" width="100%"></div></div><br>
                
                    <hr>

                    <label for="titulo-fundo-roxo">Titulo fundo Roxo:</label><input required type="text" id="titulo-fundo-roxo" name="titulo-fundo-roxo" size="70" maxlength="30" value="<?=$row['titulo_fundo_roxo']?>"><br>
                    <label for="texto-fundo-roxo">Texto fundo Roxo:</label><br><textarea required name="texto-fundo-roxo" id="texto-fundo-roxo" cols="65" rows="10" maxlength="650"><?=$row['texto_fundo_roxo']?></textarea><br>
                    <div class="visualizar-imagem"><label for="img-fundo-roxo">Imagem fundo Roxo:</label><input type="file" accept="image/*" id="img-fundo-roxo" name="img-fundo-roxo"><div class="imagem"><p class="p-atual">ATUAL</p><img src="../imagens/img-index/<?=$row['img_fundo_roxo']?>" alt="Imagem Atual" width="100%"></div></div><br>

                    <hr>

                    <div id="content-servicos">
                        <div id="servicos-01" class="servicos">
                            <label for="servico-destaque-01">Escolha um Serviço de Destaque:</label>
                            <select name="servico-destaque-01" id="servico-destaque-01" required>
                                <?php mysqli_data_seek($query_pagina_01, 0); while($row2 = mysqli_fetch_array($query_pagina_01)) {?>
                                    <option value="<?php echo($row['id_servico']);?>" <?php if($row2["titulo_servico"]==$row["titulo_servico-01"] and $row2["texto_servico"]==$row["texto_servico-01"]){echo"selected";}?>><?php echo($row2['titulo_servico']);?></option>
                                <?php }?>
                            </select>
                        </div>
                        <hr class="hr-servicos">
                        <div id="servicos-02" class="servicos">
                        <label for="servico-destaque-02">Escolha um Serviço de Destaque:</label>
                            <select name="servico-destaque-02" id="servico-destaque-02" required>
                                <?php mysqli_data_seek($query_pagina_01, 0); while($row2 = mysqli_fetch_array($query_pagina_01)) {?>
                                    <option value="<?php echo($row2['id_servico']);?>" <?php if($row2["titulo_servico"]==$row["titulo_servico-02"] and $row2["texto_servico"]==$row["texto_servico-02"]){echo"selected";}?>><?php echo($row2['titulo_servico']);?>><?php echo($row2['titulo_servico']);?></option>
                                <?php }?>
                            </select>
                        </div>
                        <hr class="hr-servicos">
                        <div id="servicos-03" class="servicos">
                        <label for="servico-destaque-03">Escolha um Serviço de Destaque:</label>
                            <select name="servico-destaque-03" id="servico-destaque-03" required>
                                <?php mysqli_data_seek($query_pagina_01, 0); while($row2 = mysqli_fetch_array($query_pagina_01)) {?>
                                    <option value="<?php echo($row2['id_servico']);?>" <?php echo($row['id_servico']);?>" <?php if($row2["titulo_servico"]==$row["titulo_servico-03"] and $row2["texto_servico"]==$row["texto_servico-03"]){echo"selected";}?>><?php echo($row2['titulo_servico']);?>><?php echo($row2['titulo_servico']);?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
            <?php } ?>
            
            <hr>

            <input type="submit" value="ALTERAR CONTEÚDO" class="alterar-conteudo">
            </form>
        </div>

        <div id="form-pagina-01" class="forms-pag">
            <center><h2>Página 01</h2></center>

            <center><h3>INSERIR</h4></center>
            <form id="form-pagina-01-inserir" name="form-pagina-01-inserir" action="../PHP/inserir-servico.php" method="POST">
                <input type="hidden" value="pagina-01" name="pagina">
                <label for="inserir-titulo-servico">Titulo do Serviço:</label><input required type="text" name="inserir-titulo-servico" maxlength="25" size="30">
                <label for="inserir-descricao-servico">Descrição do Serviço:</label><input required type="text" name="inserir-descricao-servico" id="" maxlength="75" size="80"> <br>
                <input type="submit" value="INSERIR">
            </form>

            <hr>

            <center><h3>ALTERAR/APAGAR</h3></center>
            <input form="form-pg-pagina-01" type="hidden" value="pagina-01" name="pagina">
            <table id="tabela-form-pagina-01" class="tabela-alteração">
                <?php mysqli_data_seek($query_pagina_01, 0); while($row = mysqli_fetch_array($query_pagina_01)){ ?>
                    <form class="form-pagina-02" name="form-pg-pagina-01" action="../PHP/alterar-paginas.php" method="POST">
                        <tr>
                            <td class="td-id-servico"><input type="hidden" name="id-servico" value="<?php echo($row['id_servico']); ?>" readonly></td>
                            <td class="td-titulo-servico"><label for="titulo-servico">Titulo do Serviço:</label><input required type="text" name="titulo-servico" id="titulo-servico-<?php echo($row["id_servico"]);?>" value="<?php echo($row["titulo_servico"]);?>" maxlength="25" size="30"><td>
                            <td class="td-descricao-servico"><label for="descricao-servico">Descrição do Serviço:</label><input required type="text" name="descricao-servico" id="descricao-servico-<?php echo($row["id_servico"]);?>" value="<?php echo($row["descricao_servico"]);?>" maxlength="75" size="80"></td>
                            <td class="td-alterar-servico"><input class="btnAlterar" type="submit" value="ALTERAR"></td>
                    </form> 
                            <td class="td-apagar-servico">
                                <form name="form-pagina-01-apagar" id="form-pagina-01-apagar" action="../PHP/apagar-servico.php" method="POST">
                                    <input form="form-pagina-01-apagar" type="hidden" name="id-servico-apagar" id="id-servico-apagar" value="<?php echo($row["id_servico"]); ?>" readonly>
                                    <input form="form-pagina-01-apagar" class="btnApagar" type="submit" value="APAGAR">
                                </form>
                            </td>
                        </tr>                
                <?php } ?>
            </table>
        </div>

        <div id="form-pagina-02" class="forms-pag">
            <center><h2>Página 02</h2></center>
                
            <center><h3>ALTERAR/APAGAR</h3></center>
            <input form="form-pagina-02" type="hidden" value="pagina-02" name="pagina">
            <table id="tabela-form-pagina-02" class="tabela-alteração">
                <?php mysqli_data_seek($query_pagina_01, 0); while($row = mysqli_fetch_array($query_pagina_01)){ ?>
                    <form class="form-pagina-02" name="form-pagina-02" action="../PHP/alterar-paginas.php" method="POST" enctype="multipart/form-data">
                        <tr>
                            <td class="td-id-servico"><input type="hidden" name="id-servico" value="<?php echo($row['id_servico']); ?>" readonly></td>
                            <td class="td-titulo-servico"><h3 class="h3-titulo-servico"><?php echo($row["titulo_servico"]);?></h3><td>
                            <td class="td-texto-servico"><label for="texto-servico">Texto do Serviço:</label><textarea required name="texto-servico" id="texto-servico-<?php echo($row['id_servico']); ?>" cols="45" rows="10" maxlength="400"><?php echo($row['texto_servico']); ?></textarea></td>
                            <td class="td-preco-servico"><label for="preco-servico">Preço do Serviço:</label><br><input required type="number" name="preco-servico" id="preco-servico-<?php echo($row['id_servico']); ?>" value="<?php echo($row['preco_servico']); ?>"></td>
                            <td class="td-img-servico"><label for="img-servico">Imagem do Serviço:</label><input type="file" accept="image/*" id="img-servico-<?php echo($row['id_servico']); ?>" name="img-servico"><div class="imagem"><p class="p-atual">ATUAL</p><img src="../imagens/img-pagina-02/<?=$row['img_servico']?>" alt="Imagem Atual" width="100%"></div></td>
                            <td class="td-alterar-servico"><input class="btnAlterar" type="submit" value="ALTERAR"></td>
                    </form> 
                            <td class="td-apagar-servico">
                                <form name="form-pagina-02-apagar" id="form-pagina-02-apagar" action="../PHP/apagar-servico.php" method="POST">
                                    <input form="form-pagina-02-apagar" type="hidden" name="id-servico-apagar" id="id-servico-apagar" value="<?php echo($row["id_servico"]); ?>" readonly>
                                    <input form="form-pagina-02-apagar" class="btnApagar" type="submit" value="APAGAR">
                                </form>
                            </td>
                        </tr>  
                <?php } ?>
            </table>
        </div>
    </div>

</body>
</html>