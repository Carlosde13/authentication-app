<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        extract($_POST);
        
        require ("conexion_db.php");

        $contrasenaEncriptada = password_hash($pw, PASSWORD_DEFAULT);

        $query = "INSERT INTO usuarios(correo, contrasena) VALUES ('$email', '$contrasenaEncriptada')";

        $resultado = $mysqli -> query($query);


        session_start();

        if($resultado){
            $queryUsuario = "SELECT * FROM usuarios WHERE correo = '$email' AND  contrasena = '$contrasenaEncriptada'";


            $usuarioBD = $mysqli->query($queryUsuario);

            $_SESSION["usuario"] = $usuarioBD->fetch_assoc();

            header("Location: profile.php");
        }
    }
?>