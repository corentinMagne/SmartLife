<?php require('../includes/config.php'); ?>
<?php require('../includes/check_is_noconnect.php'); ?>
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
                <?php echo $dataUser['id']; ?>
            </article>
        </section>       
        <footer>
        </footer>
    </body>
</html>
