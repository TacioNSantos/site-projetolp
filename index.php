<?php 
    include("PHP/conexao.php");
    $result = mysqli_query($con, "SELECT * FROM `tbl_pgn-index` WHERE id='1' ");

    $dados_tbl = $result->fetch_array();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/geral.css">
    <link rel="stylesheet" href="CSS/index.css">
    <title>HOWSEC - HOME</title>
</head>

<body id="index">

    <header>
        <div id="logo">
            <a href="index.php">
                <img src="imagens/logo.png" alt="logo" width="100%">
            </a>
        </div>  
        <a href="index.php"><h4 id="empresa">HOWSEC</h4></a>
        <nav>
            <a href="paginas/pagina01.php" class="">Serviços</a>
            <a href="https://raw.githubusercontent.com/TacioNSantos/site-projetolp/main/paginas/pagina01.php" class="">Quem somos</a>
            <a href="#" class="">Contato</a>
            <a href="#" class="">Perceiros</a>
        </nav>
        
        <div id="usuario">
            <a href="paginas/login.php"><img src="imagens/icone_usuario.png" alt="icone do usuário" width="100%"></a>
        </div>
    </header>

        <div id="carrossel-imagens">
            <div id="imagens-carrossel">
                
                <div id="carrossel-01" class="carrossel-conteudo">
                    <div class="carro-imagem"><img src="imagens/img-index/<?= $dados_tbl['img_carrossel-01']; ?>" alt="imagem01" width="100%"></div>
                    <h1 id="titulo-carrossel-01" class="titulo-carrossel"><?= $dados_tbl['titulo_carrossel-01']; ?></h1>
                    <a href="paginas/pagina01.php"><div id="botao-carrossel-01" class="botao-carrossel">SAIBA MAIS ➔</div></a>
                </div>

                <div id="carrossel-02" class="carrossel-conteudo">
                    <div class="carro-imagem"><img src="imagens/img-index/<?= $dados_tbl['img_carrossel-02']; ?>" alt="imagem02" width="100%"></div>
                    <h1 id="titulo-carrossel-02" class="titulo-carrossel"><?= $dados_tbl['titulo_carrossel-02']; ?></h1>
                    <a href="www.google.com"><div id="botao-carrossel-02" class="botao-carrossel">SAIBA MAIS ➔</div></a>
                </div>

                <div id="carrossel-03" class="carrossel-conteudo">
                    <div class="carro-imagem"><img src="imagens/img-index/<?= $dados_tbl['img_carrossel-03']; ?>" alt="imagem03" width="100%"></div>
                    <h1 id="titulo-carrossel-03" class="titulo-carrossel"><?= $dados_tbl['titulo_carrossel-03']; ?></h1>
                    <a href="www.google.com"><div id="botao-carrossel-03" class="botao-carrossel">SAIBA MAIS ➔</div></a>
                </div>

            </div>
            
           
        </div>
        <div id="numero-carrossel" class="num-carrossel"> 
            <div id="carrossel-01" class="num-carrossel"></div>
            <div id="carrossel-02" class="num-carrossel"></div>
            <div id="carrossel-03" class="num-carrossel"></div>
        </div>

        <div id="fundo-azul">
            <div id="sec-azul">
                <h2 id="titulo-azul"><?= $dados_tbl['titulo_fundo_roxo']; ?></h2>
                <p id="texto-azul"><?= $dados_tbl['texto_fundo_roxo']; ?></p> 
            </div>
            <div id="img-fundo-azul"><img src="imagens/img-index/<?= $dados_tbl['img_fundo_roxo']; ?>"></div>
        </div>
        
        <center class="titulo"><b>Veja quem já inovou com nossos softwares</b></center>
        <div id="parceiros">
            <img src="imagens/img-index/assai.png">
            <img src="imagens/img-index/ford.png">
            <img src="imagens/img-index/natura.png">
            <img src="imagens/img-index/cielo.png">
            <img src="imagens/img-index/camacari.png">
            <img src="imagens/img-index/amazon.png">
        </div>

        <div id="servicos-div">
            <div id="conteiner-servico-01" class="conteiner-servicos">
                <h5><?= $dados_tbl['titulo_servico-01']; ?></h5>
                <hr>
                <p><?= $dados_tbl['texto_servico-01']; ?><br><br><a href="#"> SAIBA MAIS ➔</a></p>
            </div>
            <div id="conteiner-servico-02" class="conteiner-servicos">
                <h5><?= $dados_tbl['titulo_servico-02']; ?></h5>
                <hr>
                <p><?=$dados_tbl['texto_servico-02']; ?><br><br><a href="#"> SAIBA MAIS ➔</a></p>
            </div>
            <div id="conteiner-servico-03" class="conteiner-servicos">
                <h5><?= $dados_tbl['titulo_servico-03']; ?></h5>
                <hr>
                <p><?=$dados_tbl['texto_servico-03']; ?><br><br><a href="#"> SAIBA MAIS ➔</a></p>
            </div>
        </div>
        
        <div id="footer">
            <div id="footer-container-01" class="container-footer">
                <img id="logo-footer" src="imagens/logo.png" alt="logo"><p class="logo-footer-p">HOWSEC</p>
                <div id="redes-sociais">
                    <img class="footer-social" src="imagens/instagram.png"><img class="footer-social" src="imagens/linkedin.png"><a href="https://github.com/TacioNSantos/site-projetolp"><img class="footer-social" src="imagens/github.png"></a>
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
