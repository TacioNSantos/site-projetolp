<?php
    header("Content-type: text/css");
    session_start();

    $pag = "index";

    if(isset($_SESSION["pgSelecionada"])){$pag = $_SESSION["pgSelecionada"];};
?>

#form-index{visibility: <?php if($pag == "index"){echo "visible";}else{echo "hidden";} ?>;}
#form-pagina-01{visibility: <?php if($pag == "pagina-01"){echo "visible";}else{echo "hidden";} ?>;}
#form-pagina-02{visibility: <?php if($pag == "pagina-02"){echo "visible";}else{echo "hidden";} ?>;}

#geral{
    margin: auto;
    min-height: 1650px;
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
    margin: 15px;
}

.forms-pag{
    margin-bottom:20px;
    padding: 20px;
    border: solid 5px;
    position: absolute;
    top: 250px;
    text-align: center;
}

hr{
    border: solid 1px;
}

center{
    border-bottom: solid 2px;
}

#content-servicos{
    display: flex;
    flex-direction: row;
    margin-top: 20px;
}

.servicos{
    width: 33.3%;
}

.hr-servicos{   
    size: 150px;
    margin: 15px;
}

textarea{
    resize: none;
}

.alterar-conteudo{
    width: 300px;
    padding: 20px;
}

.visualizar-imagem{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}
.imagem{
    width: 150px; 
}

.p-atual{
    color: blue;
    font-weight: bold;
    margin-bottom: 5px;
}

label{
    font-weight: bold;
}