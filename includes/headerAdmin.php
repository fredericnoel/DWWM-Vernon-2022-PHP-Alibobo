<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alibobo - Administration</title>
    <link href="./assets/css/style.css" rel="stylesheet" />
</head>
<body>
    <header>
        <?php
        if (isset($_SESSION['nom']) && isset($_SESSION['prenom'])) {
            echo "<p>Bonjour " . $_SESSION['prenom'] . " " . $_SESSION['nom'] . "</p>";
        }
        ?>
        <nav>
            <ul>
                <li><a href="index.php?page=accueil">Accueil</a></li>
                <li><a href="index.php?page=categoriesAdmin">Catégories</a></li>
                <li><a href="index.php?page=articlesAdmin">Articles</a></li>
                <li><a href="index.php?page=commandesAdmin">Commandes</a></li>
                <li><a href="index.php?page=clientsAdmin">Clients</a></li>
<<<<<<< HEAD
                <?php
                if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
                    echo '<li><a href="index.php?page=logout">Logout</a></li>';
                } else {
                    echo '<li><a href="index.php?page=login">Login</a></li>';
                }
                ?>
=======
>>>>>>> 06c41c50bc0f18afbf452100737d28c52a6c3b3f
            </ul>
        </nav>
    </header>