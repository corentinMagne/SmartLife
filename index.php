<?php require('includes/config.php'); ?>
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
                    <li><a href="index.php">Accueil</a></li>
                </ul>
            </nav>
        </header>
        <section>
            <article>
            	<?php
				if (isset($_POST['email']) AND isset($_POST['pass'])) {
                    $email = $_POST['email'];
                    $pass = $_POST['pass'];
                    $req = $bdd->prepare('SELECT id, mail, pass FROM users where mail = ? AND pass = ?');
                    $req->execute(array($email, $pass));
                    $donnees = $req->fetch();
                    if ($donnees)
                    {
                        $_SESSION['id'] = $donnees['id'];
                ?>
                <SCRIPT LANGUAGE="JavaScript"> 
                    document.location.href="membres/index.php"
                </SCRIPT>
                <?php
                    } else {
                ?>
                <p>
                    Mot de passe / Email invalide
                </p>
                <?php
                    }
                    $req->closeCursor();
            	?>
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
