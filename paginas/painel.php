<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle</title>
    <link rel="stylesheet" href="../CSS/geral.css">
    <link rel="stylesheet" href="../PHP/painel-css.php" type="text/css">

    <style>
        #geral{
            margin: auto;
            height: 66vh;
            display: flex;
            flex-direction: column;
            padding: 20px;
            align-items: center;
        }

        #form-escolher-pagina{
            display: flex;
            flex-direction: column;
        }

        input{
            margin: 10px;
        }

        .forms-pag{
            position: absolute;
            top: 250px;
        }

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
                    <option value="" disabled="disabled" selected>Selecione uma página</option>
                    <option value="index" <?php if(isset($_SESSION["pgSelecionada"]) and $_SESSION["pgSelecionada"] == "index"){echo"selected";}?> >Index</option>
                    <option value="pagina-01" <?php if(isset($_SESSION["pgSelecionada"]) and $_SESSION["pgSelecionada"] == "pagina-01"){echo"selected";}?>>Página 01</option>
                    <option value="pagina-02" <?php if(isset($_SESSION["pgSelecionada"]) and $_SESSION["pgSelecionada"] == "pagina-02"){echo"selected";}?>>Página 02</option>
                </select>
                <input type="submit" value="Editar">
            </form>

            <div id="form-index" class="forms-pag">
                <form action="" method="POST">
                    <input type="hidden" value="index" name="pagina">
                    pg-index
                    <input type="text">
                    <input type="text">
                    <input type="text" name="" id="">
                </form>
            </div>

            <div id="form-pagina-01" class="forms-pag">
                <form action="" method="POST">
                    <input type="hidden" value="pagina-01" name="pagina">

                    pg-01
                    <input type="text">
                    <input type="text">
                    <input type="text" name="" id="">
                </form>
            </div>

            <div id="form-pagina-02" class="forms-pag">
                <form action="" method="POST">
                    <input type="hidden" value="pagina-02" name="pagina">

                    pg-02
                    <input type="text">
                    <input type="text">
                    <input type="text" name="" id="">
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