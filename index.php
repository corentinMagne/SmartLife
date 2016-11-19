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



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>SmartLife</title>
    </head>
    
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="#">Accueil</a></li>
                </ul>
            </nav>
        </header>
        <section>
            <article>
            	<?php
				if (isset($_POST['email']) AND isset($_POST['pass'])) {
            	?>
            	yes<br>
            	<?php
            	} else {
            	?>
            	yes1<br>
            	<?php
            	}
            	?>
            	<p>
					<form action="#" method="post">
						<p>
    						<input type="text" id="email" name="email" />
    						<input type="password" id="pass" name="pass" />
    						<input type="submit" value="Connexion" />
						</p>
					</form>
            	</p>
            </article>
        </section>       
        <footer>
        </footer>
    </body>
</html>
