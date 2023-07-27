<?php
    header("Content-type: text/css");
    session_start();
    
    $pag = "";

    if(isset($_SESSION["pgSelecionada"])){$pag = $_SESSION["pgSelecionada"];};
?>

#form-index{visibility: <?php if($pag == "index"){echo "visible";}else{echo "hidden";} ?>;}
#form-pagina-01{visibility: <?php if($pag == "pagina-01"){echo "visible";}else{echo "hidden";} ?>;}
#form-pagina-02{visibility: <?php if($pag == "pagina-02"){echo "visible";}else{echo "hidden";} ?>;}

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
    border: solid 5px;
    position: absolute;
    top: 250px;
}