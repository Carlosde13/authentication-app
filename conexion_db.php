<?php
    try{
        $mysqli = new mysqli("localhost", "root", "", "dev_challenge");
        //echo "conectado";
    }catch (mysqli_sql_exception $e){
        echo "Error ". $e->getMessage(); 
    }
?>