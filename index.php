<h1>Formation Langage PHP</h1>
<h2>affichage</h2>
<?= "bonjour" ?><br> <!-- php et html melanger -->
<?php
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