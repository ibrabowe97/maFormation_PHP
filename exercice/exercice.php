<?php
	header("content-type: text/plain");
// Exo 1 -> affichage 


	$programming_language = 'PHP';
	$php_version = phpversion();
	$course_length = 32;


	// echo "Ceci est mon premier exercice en $programming_language\nLe cours de la chaine FormationVideo compte $course_length videos publiees.\nAu travers des videos suivies, j'ai pu installer $programming_language dans sa version $php_version";

	echo 'Ceci est mon premier exercice en ' .$programming_language ."\n";
	echo "Le cours de la chaine FormationVideo compte ".$course_length ." videos publiees\n";
	echo "Au travers des videos suivies, j'ai pu installer $programming_language dans sa version $php_version\n\n";

// Exo 2 -> affichage et operations : 
	$pokemone = "Pikachu";
	$level1 = 5;
	$level1 ++ ;
	echo "$pokemone vient de monter au niveau $level1 \n";
	echo "A few moments later... \n";
	$level1 ++;
	echo "Waoh dingue ! $pokemone passe au niveau $level1 !\n";
	echo "\n";
	$pokeballCapture = 50;
	$bonusRate = ($pokeballCapture * 6)/100;
	$totalCapture = $pokeballCapture + $bonusRate;
	echo "Le taux de capture est de $totalCapture%\n\n";

// Exo 3 -> les boucles :
	function calcul($min = 1, $max = 50)
	{
		if($min >= $max)
		{
			exit("parametre incorrect : le minimum doit etre inferieur au maximum\n");
		}
		else 
		{
			$A = 5;
			$a = 6;
			echo "$A et $a\n";
			while ($min <= $max)
			{
				if($min % 5 == 0)
				{
					IF ($WORD == 'TIC')
					{
						$WORD = 'TAC';
					}
					else
					{
						$WORD = 'TIC';
					}
					print "$WORD\n";
				}
				else 
				{
					print("$min\n");
				}
				$min++;
			}
		}
	}
	calcul();
?>