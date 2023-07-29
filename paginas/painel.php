<?php 
    include("../PHP/conexao.php");
    session_start(); 

    if(!isset($_SESSION["ValidaLogin"])){
        header("location: login.php");
        session_destroy();
    }

    $result_index = mysqli_query($con, "SELECT * FROM `tbl_pgn-index` WHERE id='1'");

    mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle</title>
    <link rel="stylesheet" href="../CSS/geral.css">
    <link rel="stylesheet" href="../PHP/painel-css.php" type="text/css">

    <style>  
    </style>

</head>
<body>
    <header>
            <div id="logo">
                <a href="../index.html">
                    <img src="../imagens/logo.png" alt="logo" width="100%">
                </a>
            </div>  
            <a href="../index.html"><h4 id="empresa">HOWSEC</h4></a>
            <nav>
                <a href="pagina01.html" class="">Serviços</a>
                <a href="https://raw.githubusercontent.com/TacioNSantos/site-projetolp/main/paginas/pagina01.html" class="">Quem somos</a>
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
                    <?php while($row = mysqli_fetch_array($result_index)){ ?>
                        <label for="titulo-carrossel-01">Titulo 1º bloco do Carrossel:</label><input type="text" id="titulo-carrossel-01" name="titulo-carrossel-01" size="70" maxlength="70" value="<?=$row['titulo_carrossel-01']?>"><br>
                        <div class="visualizar-imagem"><label for="img-carrossel-01">Imagem 1º bloco do Carrossel:</label><input type="file" accept="image/*" id="img-carrossel-01" name="img-carrossel-01"><div class="imagem"><p class="p-atual">ATUAL</p><img src="../imagens/img-index/<?=$row['img_carrossel-01']?>" alt="Imagem Atual" width="100%"></div></div><br>

                        <label for="titulo-carrossel-02">Titulo 2º bloco do Carrossel:</label><input type="text" id="titulo-carrossel-02" name="titulo-carrossel-02" size="70" maxlength="70" value="<?=$row['titulo_carrossel-02']?>"><br>
                        <div class="visualizar-imagem"><label for="img-carrossel-02">Imagem 2º bloco do Carrossel:</label><input type="file" accept="image/*" id="img-carrossel-02" name="img-carrossel-02"><div class="imagem"><p class="p-atual">ATUAL</p><img src="../imagens/img-index/<?=$row['img_carrossel-02']?>" alt="Imagem Atual" width="100%"></div></div><br>
                    
                        <label for="titulo-carrossel-03">Titulo 3º bloco do Carrossel:</label><input type="text" id="titulo-carrossel-03" name="titulo-carrossel-03" size="70" maxlength="70" value="<?=$row['titulo_carrossel-03']?>"><br>
                        <div class="visualizar-imagem"><label for="img-carrossel-03">Imagem 3º bloco do Carrossel:</label><input type="file" accept="image/*" id="img-carrossel-03" name="img-carrossel-03"><div class="imagem"><p class="p-atual">ATUAL</p><img src="../imagens/img-index/<?=$row['img_carrossel-03']?>" alt="Imagem Atual" width="100%"></div></div><br>
                    
                        <hr>

                        <label for="titulo-fundo-roxo">Titulo fundo Roxo:</label><input type="text" id="titulo-fundo-roxo" name="titulo-fundo-roxo" size="70" maxlength="30" value="<?=$row['titulo_fundo_roxo']?>"><br>
                        <label for="texto-fundo-roxo">Texto fundo Roxo:</label><br><textarea name="texto-fundo-roxo" id="texto-fundo-roxo" cols="65" rows="10" maxlength="650"><?=$row['texto_fundo_roxo']?></textarea><br>
                        <div class="visualizar-imagem"><label for="img-fundo-roxo">Imagem fundo Roxo:</label><input type="file" accept="image/*" id="img-fundo-roxo" name="img-fundo-roxo"><div class="imagem"><p class="p-atual">ATUAL</p><img src="../imagens/img-index/<?=$row['img_fundo_roxo']?>" alt="Imagem Atual" width="100%"></div></div><br>

                        <hr>

                        <div id="content-servicos">
                            <div id="servicos-01" class="servicos">
                                <label for="titulo-servico-01">Titulo Serviço 01:</label><br><input type="text" id="titulo-servico-01" name="titulo-servico-01" size="20" maxlength="20" value="<?=$row['titulo_servico-01']?>"><br>
                                <label for="texto-servico-01">Texto Serviço 01:</label><br><textarea name="texto-servico-01" id="texto-servico-01" cols="30" rows="10" maxlength="150"><?=$row['texto_servico-01']?></textarea>
                            </div>
                            <hr class="hr-servicos">
                            <div id="servicos-02" class="servicos">
                                <label for="titulo-servico-02">Titulo Serviço 02:</label><br><input type="text" id="titulo-servico-02" name="titulo-servico-02" size="20" maxlength="20" value="<?=$row['titulo_servico-02']?>"><br>
                                <label for="texto-servico-02">Texto Serviço 02:</label><br><textarea name="texto-servico-02" id="texto-servico-02" cols="30" rows="10" maxlength="150" ><?=$row['texto_servico-02']?></textarea>
                            </div>
                            <hr class="hr-servicos">
                            <div id="servicos-03" class="servicos">
                                <label for="titulo-servico-03">Titulo Serviço 03:</label><br><input type="text" id="titulo-servico-03" name="titulo-servico-03" size="20" maxlength="20" value="<?=$row['titulo_servico-03']?>"><br>
                                <label for="texto-servico-03">Texto Serviço 03:</label><br><textarea name="texto-servico-03" id="texto-servico-03" cols="30" rows="10" maxlength="150"><?=$row['texto_servico-03']?></textarea>
                            </div>
                        </div>
                <?php } ?>
                
                <hr>

                <input type="submit" value="ALTERAR CONTEÚDO" class="alterar-conteudo">
                </form>
            </div>

            <div id="form-pagina-01" class="forms-pag">
                <form name="form-pg-pagina-01" action="../PHP/alterar-paginas.php" method="POST">
                    <input type="hidden" value="pagina-01" name="pagina">

                    <center><h2>Página 01</h2></center>
                    <input type="text">
                    <input type="text">

                    <input type="submit" value="ALTERAR CONTEÚDO" class="alterar-conteudo">
                </form>
            </div>

            <div id="form-pagina-02" class="forms-pag">
                <form name="form-pagina-02" action="../PHP/alterar-paginas.php" method="POST">
                    <input type="hidden" value="pagina-02" name="pagina">

                    <center><h2>Página 02</h2></center>
                    <input type="text">
                    <input type="text">

                    <input type="submit" value="ALTERAR CONTEÚDO" class="alterar-conteudo">
                </form>
            </div>
        </div>

        <div id="footer">
            <div id="footer-container-01" class="container-footer">
                <img id="logo-footer" src="../imagens/logo.png" alt="logo"><p class="logo-footer-p">HOWSEC</p>
                <div id="redes-sociais">
                    <img class="footer-social" src="../imagens/instagram.png"><img class="footer-social" src="../imagens/linkedin.png"><img class="footer-social" src="../imagens/github.png">
                </div>
            </div>
            <div id="footer-container-02" class="container-footer">
                <h4 class="logo-footer-p">Contate-nos</h4>
                <p class="logo-footer-p">(71 9x585-5875)</p>
                <p class="logo-footer-p">Rua das Flores, 123<br>Bairro Jardim Encantado<br>Cidade Imaginária<br>Estado dos Sonhos</p>
            </div>
            <div id="footer-container-03" class="container-footer">
                <h4 class="logo-footer-p">Newsletter</h4>
                <p class="logo-footer-p">Fique sempre por dentro das novidades da HOWSEC.</p>
                <input type="email" placeholder="exemple@gmail.com">
                <input type="submit" value="Enviar">
            </div>
            <hr>
            <p id="Copyright" class="logo-footer-p">Copyright © 2023 HOWSEC. Todos os direitos reservados.</p>
        </div>
</body>
</html>