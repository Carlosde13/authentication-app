<?php
    /*session_start();

    if(isset($_FILES['img']) && ($_SERVER["REQUEST_METHOD"] === "POST")){
        extract($_POST);

        $datos = addslashes(file_get_contents($_FILES["img"]["tmp_name"]));
        
        print_r($bio);
        
        //print_r($datos);
        
    }*/
    
?>

<?php
    session_start();
    require ("conexion_db.php");
    $idDB = $_SESSION['usuario']['id'];

    $updated = false;

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        extract($_POST);

        if (isset($_FILES['img']) && is_uploaded_file($_FILES["img"]["tmp_name"])) {
            $tipo = $_FILES["img"]["type"];

            if(substr($tipo, 0,5)!="image"){
                $_SESSION["size_error"] = "Please, select an image file.";
                header("Location: edit-info.php");
                $mysqli -> close();
                die();
            }
            
            if($_FILES["img"]["size"] <= 79000){
                $datos = addslashes(file_get_contents($_FILES["img"]["tmp_name"]));
                $query = "UPDATE usuarios SET foto = '$datos' WHERE id = $idDB ";
                $mysqli -> query($query);

                echo "foto actualizado ";
            }else{
                $_SESSION["size_error"] = "Don't select a picutre higher than 64KB";
                header("Location: edit-info.php");
                $mysqli -> close();
                die();
            }
        }
        if($name != null){
            $query = "UPDATE usuarios SET nombre = '$name' WHERE id = $idDB ";
            $resultado = $mysqli -> query($query);
            echo "nombre actualizado ";
        }
        if($bio != null){
            $query = "UPDATE usuarios SET bio = '$bio' WHERE id = $idDB ";
            $resultado = $mysqli -> query($query);
            echo "bio actualizado ";
        }
        if($tel != null){
            $query = "UPDATE usuarios SET telefono = '$tel' WHERE id = $idDB ";
            $resultado = $mysqli -> query($query);
            echo "tel actualizado ";
        }
        if($email != null){

            $consulta = "SELECT * FROM usuarios WHERE correo = '$email' ";

            $consultaEjecutada = $mysqli -> query($consulta);

            $numCoincidencias = $consultaEjecutada -> num_rows;

            if($numCoincidencias > 0){
                $_SESSION["duplicate_error"] = "Email already associated with another account.";
                $mysqli -> close();
                header("Location: edit-info.php");
                die();
            }else{
                $query = "UPDATE usuarios SET correo = '$email' WHERE id = $idDB ";
                $resultado = $mysqli -> query($query);
                echo "email actualizado";
            }
            
            
        }
        if($pw != null){
            $contrasenaEncriptada = password_hash($pw, PASSWORD_DEFAULT);

            $query = "UPDATE usuarios SET contrasena = '$contrasenaEncriptada' WHERE id = $idDB ";
            $resultado = $mysqli -> query($query);
            echo "contra actualizado";
        }

        $queryUsuario = "SELECT * FROM usuarios WHERE id = '$idDB'";


        $usuarioBD = $mysqli->query($queryUsuario);

        $_SESSION["usuario"] = $usuarioBD->fetch_assoc();
        $mysqli -> close();
        header("Location: profile.php");      
    }
?>
