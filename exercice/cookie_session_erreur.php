<?php
	setcookie("connexion", "connected", time()+3600, null, null, false, true);
	echo $_COOKIE['connexion'];
	error_reporting(-1);
	ini_set("display_errors", 1);

	session_start();
	$_SESSION['nomSession']="ibrahima Diallo";
	echo "<br>";
	// echo $_SESSION['nomSession'];
	// echo session_status();
	echo session_id();
	session_destroy();
	echo session_status();

	function my_error_handler(int $errno, string $errmsg, string $errfile, int $errline, array $errdata)
	{
		switch($errno)
		{
			case E_USER_ERROR:
				echo $errmsg;
				break;

			case E_USER_WARNING:
				echo "$errmsg sur le ficher $errfile";
				break;
			case E_USER_NOTICE:
				echo $errmsg;
				break;

			default :
				echo "erreur inconnue";
				break;
		}
	}
	set_error_handler("my_error_handler");

	 // echo $bonjour;
	 restore_error_handler();
	 echo $bonjour;
