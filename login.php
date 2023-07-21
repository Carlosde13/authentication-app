<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    <link rel="icon" type="image/png" href="./icons/devchallenges.ico">
    <link rel="stylesheet" href="./styles/login.css">

</head>
<body>
    <div class="contenedor1">
        <div class="container">
            <div class="contenedor2">
                <div class="icono-div">
                    <img src="./icons/devchallenges.svg" alt="Page Logo"/>
                </div>
                <div class="titulo-div">
                    <h2>Login</h2>
                </div>
                <form action="login_db.php" method="POST">
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
                    <input type="submit" value="Login" id="loginBtn">
                </form>
                <p class="text">or continue with these social profile</p>
                <div class="social-media-div">
                    <img src="./icons/Google.svg" class="sm-icons"/>
                    <img src="./icons/Facebook.svg" class="sm-icons"/>
                    <img src="./icons/Twitter.svg" class="sm-icons"/>
                    <img src="./icons/Gihub.svg" class="sm-icons"/>
                </div>
                <div class="already-member-div">
                    <p class="text">Don't have an account yet?</p>
                    <a href="./index.php">Register</a>
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