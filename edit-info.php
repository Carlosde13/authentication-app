<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Info</title>
    <link rel="stylesheet" href="./styles/edit-info.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    <script src="./javascript/menu.js" defer></script>
</head>
<body>
    <div class="contenedor1">
        <div class="contenedor2">
        <div class="icono-div">
                <img src="./icons/devchallenges.svg" alt="Page Logo"/>
                <div class="para-desplegable-div">
                    <div class="img-container">
                        <img src="./icons/profile-pic.png" alt="User Picture"/>
                    </div>
                    <div class="nombre-desplegable">
                        <p>Xanthe Neal</p>
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
                            <a class="nombre-opcion" href="#">My Profile</a>
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
                            <a class="nombre-logout" href="#">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="back">
                <span class="material-symbols-outlined">
                    navigate_before
                </span>
                <a id="returnLink" href="#">Back</a>
            </div>
            <div class="contenedor3">
                <div class="titulo-div">
                    <h2>Change Info</h2>
                    <h3>Changes will be reflected to every services</h3>
                </div>
                <form>
                    <div class="update-picture">
                        <div class="img-container">
                            <span class="material-symbols-outlined">
                                photo_camera
                            </span>
                        </div>  
                        <label for="file-input" class="custom-file-button">CHANGE PHOTO</label>
                        <input type="file" id="file-input" accept="image/*">
                    </div>
                    <div class="datos-actualizar">
                        <label for="nombre">Name</label>
                        <input placeholder="Enter your name..." id="nombre" type="text">
                    </div>
                    <div class="datos-actualizar">
                        <label for="bio">Bio</label>
                        <textarea placeholder="Enter your bio..." id="bio" type="text" rows="4" ></textarea>
                    </div>
                    <div class="datos-actualizar">
                        <label for="tel">Phone</label>
                        <input placeholder="Enter your phone..." id="tel" type="number">
                    </div>
                    <div class="datos-actualizar">
                        <label for="correo">Email</label>
                        <input placeholder="Enter your email..." id="correo" type="email">
                    </div>
                    <div class="datos-actualizar">
                        <label for="contrasena">Password</label>
                        <input placeholder="Enter your password..." id="contrasena" type="password">
                    </div>
                    <input type="submit" value="Save"/>
                </form>
            </div>
            <div class="creditos-div">
                <p>Created by Carlos de León</p>
                <p>devchallenges.io</p>
            </div>
        </div>
    </div>
</body>
</html>