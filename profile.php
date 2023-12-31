<?php
    session_start();

    //coborrorar la sesion iniciada por el usuario
    if(!isset($_SESSION["usuario"])){
        header("Location: login.php");
        die();
    }
    extract($_SESSION["usuario"]);
    $name;
    $biography;
    $tel;
    $pic;

    if($nombre === null){
        $name= "Please, add your name";
    }else{
        $name = $nombre;
    }

    if($bio === null){
        $biography= "Please, add your bio";
    }else{
        $biography = $bio;
    }

    if($telefono===null){
        $tel= "Please, add your phone number";
    }else{
        $tel = $telefono;
    }

    $urlTotal;
    if($foto===null){
        $urlTotal = "./icons/profile-pic.png";
    }else{
        $url = base64_encode($_SESSION['usuario']['foto']);
        $urlTotal = "data:image/jpg;base64, $url";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <link rel="stylesheet" href="./styles/profile.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    <link rel="icon" type="image/png" href="./icons/devchallenges.ico">
    <script src="./javascript/menu.js" defer></script>
</head>
<body>
    <div class="contenedor1">
        
        <div class="contenedor2">
            <div class="icono-div">
                <img src="./icons/devchallenges.svg" alt="Page Logo"/>
                <div class="para-desplegable-div">
                    <div class="img-container">
                        <img src= '<?php echo $urlTotal ?>' alt="User Picture"/>
                    </div>
                    <div class="nombre-desplegable">
                        <p> <?php echo $nombre; ?> </p>
                        <div class="" id="flecha-div">
                            <span class="material-symbols-outlined">
                                arrow_drop_down
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="" id="menu-desplegable">
                <div class="centro-menu-desplegable">
                    <div class="opcion-menu">
                        <div>
                            <div class="icono-profile">
                                <span class="material-symbols-outlined">
                                    person
                                </span>
                            </div>
                            <a class="nombre-opcion" href="./profile.php">My Profile</a>
                        </div>
                    </div>
                    <div class="opcion-menu">
                        <div>
                            <div class="icono-grupo">
                                <span class="material-symbols-outlined">
                                    group
                                </span>
                            </div>
                            <a class="nombre-opcion" href="#">Gropu Chat</a>
                        </div>
                    </div>
                    <div class="divisor-menu"></div>
                    <div class="opcion-menu">
                        <div>
                            <div class="icono-grupo2">
                                <span class="material-symbols-outlined">
                                    logout
                                </span>
                            </div>
                            <a class="nombre-logout" href="./logout.php">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="titulo-div">
                <h2>Personal info</h2>
                <h3>Basic info, like your name and photo</h3>
            </div>
            <div class="contenedor3">
                
                
                <div class="titulo-boton-div">
                    <div class="titulo2-div">
                        <h2>Profile</h2>
                        <h5>Some info may be visible to other people</h5>
                    </div>
                    <div class="boton-div">
                        <button id="editBtn" onclick="redireccionarEditar()">Edit</button>
                    </div>
                </div>
                <div class="divisor"></div>
                <div class="info-div">
                    <div class="info-div2">
                        <p>PHOTO</p>
                        <div class="img-container2">
                            <img src= '<?php echo $urlTotal ?>' alt="User Picture"/>
                        </div>
                    </div>
                </div>
                <div class="info-div">
                    <div class="info-div2">
                        <p>NAME</p>
                        <b><?php  echo $name;  ?></b>
                    </div>
                </div>
                <div class="info-div">
                    <div class="info-div2">
                        <p>BIO</p>
                        <b><?php  echo $biography;  ?></b>
                    </div>
                </div>
                <div class="info-div" id="tel-div">
                    <div class="info-div2">
                        <p>Phone</p>
                        <b><?php  echo $tel;  ?></b>
                    </div>
                </div>
                <div class="info-div">
                    <div class="info-div2">
                        <p>EMAIL</p>
                        <b><?php  echo $correo;  ?></b>
                    </div>
                </div>
                <div class="info-div">
                    <div class="info-div2">
                        <p>PASSWORD</p>
                        <b>**********</b>
                    </div>
                </div>
            </div>
            <div class="creditos-div">
                <p>Created by Carlos de León</p>
                <p>devchallenges.io</p>
            </div>
        </div>
    </div>
</body>
</html>