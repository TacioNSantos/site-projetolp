<?php 
    include("../PHP/conexao.php");

    $id_servico = $_GET["pg"];
    $result = mysqli_query($con, "SELECT * FROM `tbl_pgn-pagina-01` WHERE `id_servico`='$id_servico'");
    $dados_tbl = $result->fetch_array();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/geral.css">
    <link rel="stylesheet" href="../CSS/pagina-02.css">
    <title> HOWSEC - Serviços </title>
</head>
<body id="pagina01">

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

    <div id="main">
        <div id="titulo-servico"><h1><?php echo($dados_tbl["titulo_servico"]);?></h1></div>

        <div id="descricao-servico"><h3><?php echo($dados_tbl["descricao_servico"]);?></h3></div>
        
        <div>
            <div id="texto-servico"><p><?php echo($dados_tbl["texto_servico"]);?></p></div>
            <div id="img-servico"><img src="../imagens/img-pagina-02/<?php echo($dados_tbl["img_servico"]);?>" alt="Imagem do serviço"></div>
        </div>

        <div id="preco">
            <p><?php echo($dados_tbl["preco_servico"]);?></p>
        </div>
        
    </div>

    <div id="footer">
            <div id="footer-container-01" class="container-footer">
                <img id="logo-footer" src="../imagens/logo.png" alt="logo"><p class="logo-footer-p">HOWSEC</p>
                <div id="redes-sociais">
                    <img class="footer-social" src="../imagens/instagram.png"><img class="footer-social" src="../imagens/linkedin.png"><a href="https://github.com/TacioNSantos/site-projetolp"><img class="footer-social" src="../imagens/github.png"></a>
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