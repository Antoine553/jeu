<?php
require_once("chat_modele.php");
$bdd = bdd();

if(isset($_GET['name']) AND isset($_GET['message']))
{
	
	ajout_message($bdd,$_GET['name'],$_GET['message']);
	
}
else
{
	$message = message($bdd);
	require_once("chat_vue.php");
}

?>