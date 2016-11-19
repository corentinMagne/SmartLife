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
                    $email = $_POST['email'];
                    $pass = $_POST['pass'];
                    $req = $bdd->prepare('SELECT email, pass FROM users where mail = ? AND pass = ?');
                    $req->execute(array($email, $pass));
                    $donnees = $req->fetchAll();
                    if ($donnees)
                    {
                        echo "YES";
                    }
                    $req->closeCursor();
            	?>
            	
                <p>
                    Je suis co
                </p>

            	<?php
            	} else {
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
            	<?php
            	}
            	?>
            </article>
        </section>       
        <footer>
        </footer>
    </body>
</html>
