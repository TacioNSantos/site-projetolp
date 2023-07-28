<?php
    
    $host = "localhost";
    $username = "root";
    $password = "";
    $dataBase = "projeto-lp";

    try{
        $con = mysqli_connect($host, $username, $password, $dataBase);
        $con->set_charset('utf8');
    }catch(Exception $e){

        die($e->getMessage());
    }
?>