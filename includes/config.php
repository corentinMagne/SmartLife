<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=smartlife;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

if (isset($_SESSION['id']))
{
	$user = $bdd->prepare('SELECT * FROM users where id = ?');
    $user->execute(array($_SESSION['id']));
    $dataUser = $user->fetch();
}
else
{
	session_start();
}
?>