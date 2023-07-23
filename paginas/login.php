<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/geral.css">
    <link rel="stylesheet" href="../CSS/login.css">
    <title> Login </title>
</head>
<body id="login">

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
            <a href="login.html"><img src="../imagens/icone_usuario.png" alt="icone do usuário"></a>
        </div>
    </header>

    <div id="content-geral">
        <div id="form-login">
            <p id="messagemErro">
                <?php 
                    session_start();
                    
                    $mensagem = isset($_SESSION["msgErro"]) ? $_SESSION["msgErro"] : "";

                    if($mensagem != "")
                    {
                        echo $mensagem;
                    
                    }
                    session_destroy();
                ?>
            </p>
            <form action="../PHP/logar.php" method="POST">
                <input type="text" size="20px" placeholder="Login" name="usuario"> 
                <br>
                <input type="password" size="20px" placeholder="Senha" name="senha">
                <br>
                <input type="submit" value="Fazer Login" name="btnFazerLogin" id="btnFazerLogin">
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