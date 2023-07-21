<?php 
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        extract($_POST);

        require ("conexion_db.php");

        $query = "SELECT * FROM usuarios WHERE correo = '$email' ";

        $resultado = $mysqli -> query($query);

        $numFilas = $resultado -> num_rows;

        session_start();

        if($numFilas === 1){
            $datos = $resultado -> fetch_assoc();

            
            $comparacionPass = password_verify($pw, $datos["contrasena"]);
            
            if($comparacionPass===true){
            
                $_SESSION["usuario"]= $datos;

                header("Location: profile.php");
            }else{
                $_SESSION["error_login"] = "Credenciales Invalidas";
                header("Location: login.php");
            }

            
        }else{
            $_SESSION["error_login"] = "Credenciales Invalidas";
            header("Location: login.php");
        }
        
    }
?>