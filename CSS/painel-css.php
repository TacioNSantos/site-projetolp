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

center h2{
    border-bottom: solid 2px;
}

#content-servicos{
    display: flex;
    flex-direction: row;
    margin-top: 20px;
}

.servicos{
    width: 33.3%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.hr-servicos{   
    height: 50px;
    margin: 15px;
}

textarea{
    resize: none;
}

#form-pagina-01-inserir input[type=submit], .alterar-conteudo{
    width: 200px;
    padding: 10px;
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

#tabela-alteração{
  width: 80%;
  margin: auto;
}

/* POPUP */

#popup{
    width: 350px;
    height: 10px;
    position: fixed;
    display: flex;
    left: 50%;
    transform: translate(-50%);
    justify-content: center;
    align-items: center;
    z-index: 1;
    margin-top:5px;
    background-color: white;
    text-align:center;
    padding: 40px 150px;
    border-radius: 10px;
    border: solid green 3px;
    background-color: #47fc00;
    font-family: 'Inter', sans-serif;
    font-weight: bold;
    animation-name: popup;
    animation-iteration-count: 1;
    animation-duration: 0.6s;
}

@keyframes popup {
    from{ top: -100px;}
    to{top: 0px;}
}

#popup input{
    display: inline-block;
    padding: 5px;
    width: 80px;
    border-radius: 5px;
    position: relative;
    left: 100px;
    top: 25px;
}

#popup a{
    width: 0px;
}

#popup:target{
    visibility: hidden;
}

.td-img-servico{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.td-texto-servico{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

#tabela-form-pagina-02{
    border-spacing: 20px;
    
}

.td-id-servico{
    display:none;
}

#tabela-form-pagina-02 td{
    border-top: 5px solid;
    padding: 10px;
}
