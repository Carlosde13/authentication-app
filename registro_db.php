<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        session_start();
        extract($_POST);
        
        require ("conexion_db.php");

        $consulta = "SELECT * FROM usuarios WHERE correo = '$email' ";

        $consultaEjecutada = $mysqli -> query($consulta);

        $numCoincidencias = $consultaEjecutada -> num_rows;

        if($numCoincidencias > 0){
            $_SESSION["duplicate_error"] = "Email already associated with another account.";
            $mysqli -> close();
            header("Location: index.php");
            die();
        }else{
            $contrasenaEncriptada = password_hash($pw, PASSWORD_DEFAULT);

            $query = "INSERT INTO usuarios(correo, contrasena) VALUES ('$email', '$contrasenaEncriptada')";

            $resultado = $mysqli -> query($query);


            if($resultado){
                $queryUsuario = "SELECT * FROM usuarios WHERE correo = '$email' AND  contrasena = '$contrasenaEncriptada'";


                $usuarioBD = $mysqli->query($queryUsuario);

                $_SESSION["usuario"] = $usuarioBD->fetch_assoc();
                $mysqli -> close();
                header("Location: profile.php");
            }

        }




        
    }
?>