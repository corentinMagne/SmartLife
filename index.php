<?php require('includes/config.php'); ?>

<?php
$req = $bdd->prepare('SELECT * FROM users');
$req->execute();
while ($donnees = $req->fetch())
{
?>
    <p>
    	<?php echo $donnees['phone']; ?>
   </p>
<?php
}

$req->closeCursor();

?>