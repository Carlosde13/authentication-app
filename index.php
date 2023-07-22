<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    <link rel="icon" type="image/png" href="./icons/devchallenges.ico">
    <link rel="stylesheet" href="./styles/index.css">

</head>
<body>
    <div class="contenedor1">
        <div class="container">
            <div class="contenedor2">
                <div class="icono-div">
                    <img src="./icons/devchallenges.svg" alt="Page Logo"/>
                </div>
                <div class="titulo-div">
                    <h2>Join thousands of learners from around the world</h2>
                    <h3>Master web development by making real-life projects. There are multiple paths for you to choose</h3>
                </div>
                <form action="registro_db.php" method="POST">
                    <div class="input-div">
                        <div class="contenedor-icono">
                            <span class="material-symbols-outlined">
                                mail
                            </span>
                        </div>
                        <input placeholder="Email" id="email" name="email" type="email"/>
                    </div>
                    <div class="input-div">
                    <div class="contenedor-icono">
                            <span class="material-symbols-outlined">
                                lock
                            </span>
                        </div>
                        <input placeholder="Password" id="pw" name="pw" type="password"/>
                    </div>
                    <small class="alerta"> 
                            <?php  
                                session_start();
                                if(isset($_SESSION["duplicate_error"])){
                                    echo "". $_SESSION['duplicate_error']."";
                                }
                                unset($_SESSION['duplicate_error']);
                            ?>
                    </small>
                    <input type="submit" value="Start Coding Now" id="startCodingBtn">
                </form>
                <p class="text">or continue with these social profile</p>
                <div class="social-media-div">
                    <img src="./icons/Google.svg" class="sm-icons"/>
                    <img src="./icons/Facebook.svg" class="sm-icons"/>
                    <img src="./icons/Twitter.svg" class="sm-icons"/>
                    <img src="./icons/Gihub.svg" class="sm-icons"/>
                </div>
                <div class="already-member-div">
                    <p class="text">Already a member?</p>
                    <a href="./login.php">Login</a>
                </div>
            </div>
        </div>
        <div class="creditos-div">
            <p>Created by Carlos de León</p>
            <p>devchallenges.io</p>
        </div>
    </div>
</body>
</html>