<p><a href="index.php"> &laquo; Retour au formulaire</a></p>


<pre>
<?php
        
/*
        variables superglobales : sont des varibles accessibles partout;

                        $_GET  : permet de transferer des donnees depuis l'URL

                                URL : URL en GET -> http://localhost:8080/projetPHP/result.php?var1=123&var2=bonjour&var3=hello 
                                Les variables seront visibles sur l'URL 
                                Avantage: les moteurs de recherche utilise GET pour chercher 

                        et $_POST : permet de transferer des donnees depuis l'URL

                        les Variables sont pas visibles dans l'URL, 

                        avantage: a utiliser dans le cadre d'un site qu'on ne veut pas qu'on trouve par recherche dans google facile sauf en etant precis.
                        
            NOTION DE SECURITE:
            	faille de vulnerabilite: 
            		les failles XSS : Une injection de donnes via la transmission de donnees notament par URL;

            	On securise au moment de l'affichage et non au moment du stockage car les injections par URL n'ont pas d'impacte sauf sur l'affichage.

            	fonction de sucrite: 
            		htmlspecialchars($str) -> < par &lt; & par &amp; ' par &quot
					htmlentities($str);

				fonction verification des infos saisis:

						isset() : verife si la variable existe et est non nulle;
						empty() : verifie si la var. est vide ;
						 is_null() : verifie si la variable existe ; et est nulle

*/

		if(isset($_POST['user']) && !empty($_POST['user']))
		{
			echo htmlspecialchars($_POST["user"]);
		}
		
		if(isset($_POST['choix']) && !empty($_POST['choix']))
		{
			echo htmlspecialchars($_POST["choix"]);
		}
		if(isset($_POST['metier']) && !empty($_POST['metier']))
		{
			echo htmlspecialchars($_POST['metier']);
		}
        // print_r($_POST);
        // echo $_POST['var3'];
        // print_r($_GET);

        // echo htmlspecialchars($_GET["prenom"]);





?>
</pre>




