<?php
        // setcookie("")
/*
        -> la session permet en partie de creer un systeme d'authentification
        -> De maniere generale, une session permet d'enregistrer des informations durant une periode donnee en l'occurence une session de connexion

        -> PHPSESSID est le nom d'un cookie de session
        -> $_SESSION la variable globale d'une session
        ->  fonction : 
                session_start() -> commencer une session
                session_destroy() -> fin de session
        -> configuration php : 
                session.cookie_lifetime = 0 ou Off -> pour le garder permanement 
                session.use_cookies = 1 ou On -> pour le stocker dans un cookie 
                session.use_only_cookie -> utiliser seulement les cookies
                session.use_strict_mode -> empecher d'utiliser un identifiant non initialiser
                session.cookie_httponly -> seulement les cookies en http
                session.use_trans_sid = 0 -> 
*/
        // echo "session";
                session_start();
                $_SESSION['username'] = "ibrahima";

                unset($_SESSION['username']);

                session_destroy();
                echo session_status();


        
        
?>
<!DOCTYPE html>
<html lang="fr">
        <head>
                <meta charset="utf-8">
                <meta content="viewport" >
                <title>session </title>
        </head>

        <body>
              <h1>Les sessions en PHP</h1>
              <p>
                     Bonjour <?= htmlspecialchars($_SESSION['username']) ?> 
              </p>  
        </body>
</html>