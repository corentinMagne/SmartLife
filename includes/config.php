<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=smartlife;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
session_start();
?>