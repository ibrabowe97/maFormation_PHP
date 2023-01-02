<?php
/*
    notion de la Programmation Orientee Objet:
        objet: c'est une entite du monde reel ou imaginaire (une maison, une voiture, un chat)
        classe: c'est un ensemble de Objet de meme nature. c'est le modele d'un objet aussi;
        attribu: une variable d'un objet
        methode: une fonction que peut faire un objet
        visibilite:

    creation d'une classe :
        class NomClass {} (avec des majuscules a chaque debut de mot et au debut du nom de la classe);
    creation d'un objet:
        $nomObjet = new NomClass();
    
    fonction de construction et destruction : 
    public function _construct()
    {

    }
    public function __destruct()
    {

    }

    la variable "$this" elle correspond a l'instance en cours.
*/
    echo "bonjour<br>";
    class Vehicle 
    {
        public function __construct()
        {
            echo 'Je suis construit !<br>';
        }
        public function __destruct()
        {
            echo "tu m'as detruit <br>";
        }
    }
    $obj1 = new Vehicle();
    $obj2 = new Vehicle(); 
