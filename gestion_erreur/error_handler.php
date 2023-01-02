<h2>La gestion d'erreur</h2>
<p>on gere les erreurs avec les fonctions suivantes: 
<pre>error_reporting(-1): pour signaler toutes les erreurs;
<strong>ini_set("display_errors", 1)</strong>: pour afficher l'erreur en question;
on cree une fonction the nomee <strong>my_error_handler</strong> qui prend certains parametre bien defini;
on utilise la fonction qu'on a cree dans une autre fonction <strong>error_set("my_error_handler")</strong>;

et on peut provoquer une erreur avec la fonction <strong>error_trigger("le messages a afficer", typeD'erreur)</strong>

on peut restorer le gestionnaire d'erreur par defaut de php avec la fonction <strong>restore_error_handler();</strong></pre></p>
<?php
error_reporting(-1);
echo "hello";
ini_set("display_errors", 1);
/*
        en php il ya un gestionnaire d'erreur qui affiche trois alerte principales:
        les types d'erreurs: 
                notice: une petite erreur sans trop d'importance
                alert: un peu plus important que notice
                error / error_fatal: 
           error_reporting(): une fonction qui permet de gerer les type d'erreurs a reporter;
           avec comme valeur/argument :
                0:      qui desactive toutes les erreurs.
                -1: gere tout les cas d'erreur. elle est la valeur a utiliser pour avoir toutes les erreurs.
                1: on peut utiliser cette valeur pour des cas bien precis.

        on peut aussi gerer le fichier "displayError" avc la fonction "ini_set("display_errors")";
*/
       // echo "$variable";
       //echo "ini_set("display_errors", 1)"; // display_errors est un nom de fichier
/*
syntaxe de creation d'une fonction d'error_handler:
        function error_handler(int $errno, string $errmsg, string $errfile, int $errLine, array $errData)
        {
        
        }
        type d'erreur: E_USER_ERROR | E_USER_WARNING | E_USER_NOTICE

*/
       function my_error_handler(int $errno, string $errmsg, string $errfile, int $errline, array $errdata)
       {
                switch($errno)
                {
                        case E_USER_ERROR:
                                echo $errmsg;
                                break;

                        case E_USER_WARNING:
                                echo $errmsg. ' sur le fichier '.$errfile;
                                break;

                        case E_USER_NOTICE:
                                echo $errmsg;
                                break;
                        default:
                                echo "erreur non reconnue...".$errmsg;
                                 break;
                }

       }

       set_error_handler("my_error_handler");

       // $agePersonne = 16;
       // if ( $agePersonne < 18)
       // {
       //  trigger_error("Tu n'es pas majeur", E_USER_WARNING);
       // }
       // $my_error_handler = function(int $errno, string $errmsg, string $errfile, int $errLine, array $errData)
       // {

       // };
       // set_error_handler("error_handler"); // error handler est une fonction de rappelle;
?>

<h2>les systemes de Log</h2>
<?php
error_reporting(-1);
ini_set("display_errors", 0);
restore_error_handler();
//set_error_handler();

        echo"les systemes de log permettent d'enregistrer tout ce qui se passe dans mon application dans un ficher<br> Elle permet donc de surveiller les erreurs potentielles";
        
        error_log("erreur 606", 3, "error.log");
        /*
                Les valeurs de error_log(): 
                                0 -> enregistre dans l'historique de php;
                                1 -> ENVOI un email et il faudra le preciser en 3e parametre et on peut envoyer une en-tete en 4e parametre;
                                3 -> envoi vers un fichier qu'on met en 3e parametre;
        */

?>