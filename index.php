<h1>Formation Langage PHP</h1>
<h2>affichage</h2>
<?= "bonjour" ?><br> <!-- php et html melanger -->
<?php
error_reporting(-1);
// on ferme le php si on veut afficher du html dedans; sinon on garde la balise php ouverte;
/*
        affichage en php:
                echo : c'est pas une fonction mais une structure 
                echo ne peut pas etre utiliser dans une condition
                on utilise la structure "print"
*/

echo ("hello World<br>"); // premiere syntaxe
echo "merci a moi-meme <br>"; // 2e syntaxe mais plus frequente
echo "bon","jour<br>";

?>
<h2>les variables</h2>
<?php
/*
Declarations d'une variable en php: il faut savoir que le php est ecrit en langage C donc il respecte les memes regles
        les types:
            scalaires:
                    entier: int, long
                    reel: float, double, real
                    booleen: bool
                    chaine de caractere: string
            composes:
                    tableau: array
                    fonction de rappel: callable
                    objet: object
                    iterable: iterrable
            divers:
                    ressource: resource
                    NULL (ou null) -> pas sensible a la casse 

syntaxe: pour declarer une variable il faut :
        le symbole "$"
        un nom "nomVariable"
syntaxe de notation des nombres:
        binaire: 0b10101; des 1 et des 0
        octacle : 0640 -> le 0 au debut indique la base 8
        decimal: 640 sans le 0 au debut;
        exadecimal: 0xABF76
        float : 28e3 ou 28E2

*/


echo "bonjour Ibrahima!";
$nom = "ibrahima Diallo Guineen" ;
echo "<br>";
echo " aurevoir ".$nom ."<br>"; // le point est une concatenation entre la chaine et la variable "nom"
var_dump($nom); // la fonction "var_dump" nous donne toutes les infos sur une variable
echo "<br>";
echo gettype($nom); // gettype nous renvoie le type de la variable

/*
        notion de reference: c'est comme les pointeurs en Langage C;
        $nomVAriable2 = &$nomVariable1 : le "&" permet de faire une reference; 

*/
$prenom = &$nom;
echo "<br>$prenom";

/*
        transtypage: passer d'un type a un autre
        syntaxe: (type)$nomVar 
        exemple: $hello = 26 -> $hello = (string)$hello;


        unset(): permet d'enlever la definition et donc l'existance d'une variable [contrairement a set()];


*/

unset($nom);
echo "<br>";
var_dump($nom);

?>

<h2>les constantes</h2>
<?php 
/* 
        notion de constante: 
                definition d'une constant: c'est valeur qui ne change pas durant toute l'execution du programme
                declaration: 
                        1-) la fonction define : define("valeur1: NOM_DE_LA_CONSTANTE", "VALEUR2: VALEUR DE LA CONSTANTE ); 
                                        avec une variable:      $nomVar = valeur;
                                                                define ("nomConst", $nomVar);
                        2-) const NOM_CONSTANTE:
*/

define("UN_NOM_DE_PERSONNE", "ibrahima diallo<br>hello");

echo UN_NOM_DE_PERSONNE;
$PI = 3.14;
define("VALEUR_DE_PI", $PI);
echo VALEUR_DE_PI;
echo "<br>";
echo PHP_INT_MAX; // PHP_INT_MAX permet de voir la valeur maximale que peut contenir une variable de type "int"
echo "<br>";
echo PHP_INT_MIN;
echo "<br>";
echo PHP_INT_SIZE;
CONST E= 2.7;
echo "<br>";
echo "e = " .E;
?>

<h2>les operateurs</h2>
<?php
/*
        les differents operateurs:
                addition: +
                soustraction: -
                multiplication: *
                division: /
                division entiere: intdiv(nombre1, nombre2);
                modulo: %, fmod(nombre1, nombre2);
                puissance: **
                affectation: = 
                egalite: ==
                incrementation: valeur (+=, -=, *=, /=) valeurIncrementant;
                concatenation: . et .=
                logique: AND &&, OR ||, XOR (ou exclusif);

*/
$number1 = 3;
$number2 = 21;
$somme = $number1 + $number2;
echo "$number1 + $number2 = $somme";
echo "<br>";
echo intdiv($number2, $number1);
echo "<br>";
echo fmod($number2, $number1);
echo "<br>";
echo "$number2 / $number1 =" .($number2 / $number1);
$number3=2;
$booleen = ($number1 == $number2);
echo $booleen;
echo "<br>";
echo $number1 ** $number3;
echo "<br>";
$salut = "bonjour ";
$salut1 = "tout le monde";
echo $salut.$salut1;
$salut .= $salut1;
echo "<br>";
echo $salut;
?>

<h2>Les conditions</h2>
<?php
/*
        les principales conditions:
                if;
                else;
                elseif;
                switch - case - default et break;
                le ternaire: $nomVar = (condition) ? "valeur1 si c vrai" : " valeur2 si c faux"
        les operateurs de comparaison:
                egalite: ==
                meme valeur et meme type: ===
                difference: != , <>
                difference de valeur  ou de type : !==
                inferieur: <, <=
                superieur: >, >=
                superieur, ou egal, ou inferieur: <=> (resultat possible : -1, 0, 1)

*/
$uneVariable = 15;
if(isset($uneVariable))
        {
                echo " cette variable exite et elle vaut $uneVariable ";
        }
$res = $uneVariable ?? "elle n'existe pas"; // si "$uneVariable" exite alors "$res" prend sa valeur sinon elle prend la chaine de caractere suivant;
echo $res;

/*
        les fonctions qui verifient les types:
                is_int(): si c'est un entier;
                is_bool(): .... booleen;
                is_float(): .... reel;
                is_string(): ... chaine;
*/
?>

<h2><br>les boucles</h2>
<?php
/*
        while: tant qu'une condition est resplie, on execute l'instruction suivante;
        do -- while:
        for;
*/


$number1 = 20;
echo"la boucle \"While\" <br>";
while($number1 < 22)
{
        echo "$number1 ";
        $number1++;

}
echo"<br>la boucle \"do..While\" <br>";
do{
        echo "$number1 ";
        $number1++;

}while($number1 <25);

echo"<br>la boucle \"for\" <br>";
$i = 0;

for($i = 0; $i < 5; $i++)
{
        
        echo"vous utilisez la boucle for !!!<br>";
        break;
}

echo"<br>la boucle \"foreach\" <br>";


echo"foreach est bcp plus utiliser avec les tableau 
elle veut dire : pour chaque element";

echo"<br>la boucle \"switch\" <br>";

$choix = 15;
switch($choix)
{
        case 10:
                echo"MERCI";
                BREAK; // pour s'arreter
        case 15:
                echo"Bienvenue...";
                continue; // pour continuer
        case 16:
        ECHO "HOOOOOPPP";
                BREAK;
        default:
                echo"ohheee"; 
}

?>

<h2>les fonctions</h2>
<?php
/*
        les fontions : c'est comme une boite qui contient plusieurs lignes de code et votre fichier est un contexte donc elle contient plusieurs contexte;

        les fonctions:
                ont un nom;
                peuvent avoir des arguments ou parametres;
                peuvent retourner un resultat;

                les types pour les parametres: array, callable, int, float, string, bool; comme sa on definit la valeur qu'il doit prendre 


        syntaxe de creation:
                function nomFonction(arguments_si_necessaire)
                {
                        //instrucitons...
                }
*/
        $number=29;
        echo gettype($number);
        echo "<br>";
        echo var_dump($number);

        function hello($name = "Ibrahima") // une fonction avec un argument defini en defaut;
        {       
                echo "<br>";
                echo "Hello ".$name;
                echo "<br>";

        }
        hello("tidiane");
        function calcul($n, $m)
        {
                return $n * $m;
        }
        echo calcul(23,2);

        // passage par reference : &
        function pointeur(&$chiffre)
        {
                $chiffre =23;
        }
        echo "<br>";

        $nombre =10;
        pointeur($nombre);
        echo $nombre;
// pour les parametres, il faut toujours mettre ceux qui sont obligatoirs en premiers 
       function maFonction(int $var1, float $var2, float  $d = 2.4)
       {
        return ($var1 * $var2) / $d;
       }
       echo maFonction(12, 2.5, 12);
// envoyer un nombre infini de parametres:

       function fonctionInfini(...$bcpDeVariables) // parametres infinis;
       {
        foreach($bcpDeVariables as $data)
                echo " $data";
       }
       echo "<br>";
       fonctionInfini(1, 2);
// definir un type de retour pour la fonction :
       function nomFonction($parametre): int
       {
                

                return $parametre**2;
       }
       echo "<br>";
       //echo gettype(nomFonction(7));


// astuce : 
       $var = "nomFonction";
       echo $var(2); // ceci equivaut a nomFonction();

// fonction anonyme: une fonction sans nom. Elle sera donc envoyer a une variable avec une virgule a la fin;
       $coucou= function()
       {
        echo "bonjour";
       };
       $coucou(); // ceci ressemble aux macros en langage C.
?>

<h2>Les tableaux</h2>

<?php
/*
        declaration d'une variable de type "tableau (array)":
                syntaxe historique:
                        $nomTableau = array(); un tableau vide.

                syntaxe nouvelle: php 4 et plus recent.
                        $nomTableau = []; 
                remarque: quand on associe une valeur a une cle dans un tableau alors c un tableau associatif;
        fonction utile sur le tableau:
                array_push();
                array_pop();
                is_array();
                sizeof();


*/

$monTableau=
        [       date("d-m-y"),
                10, 
                "tableau" => ["bonjour", "mon tableau", "aurevoir"],
                20, 
                30, 
                50,
        ];
// echo gettype($monTableau);
        echo "<br>";
        //affichage des valeurs d'un tableau:
        echo "<pre>";
        echo print_r($monTableau);
        echo "<br>";
        //echo print_r($monTableau ["tableau"]);
        //echo sizeof($monTableau);
        echo array_key_first($monTableau);

        

// parcourir un tableau: il faut toujours utiliser la boucle "foreach"
        foreach ($monTableau as $key => $value) // pour chaque "cle" on affiche sa "valeur"
        {
                echo "<p>[$key] = $value</p>";
        }
// quelques fonctions utiles:

        echo "</pre>";





?>
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
ini_set("display_errors", 1);
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





