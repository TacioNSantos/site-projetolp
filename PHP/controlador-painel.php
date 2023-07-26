<?php
    session_start();
    $_SESSION["pgSelecionada"] = $_POST["pagina-escolhida"];

    header("location: ../paginas/painel.php");
?>