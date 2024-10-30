<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commentaires</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Laissez un commentaire</h1>
        <form action="" method="post">
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" required>
            
            <label for="comment">Commentaire :</label>
            <textarea id="comment" name="comment" required></textarea>
            
            <button type="submit" name="submit">Ok !</button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $name = htmlspecialchars($_POST['name']);
            $comment = htmlspecialchars($_POST['comment']);
            $entry = "$name: $comment\n";

            file_put_contents("comments.txt", $entry, FILE_APPEND);

            echo "<p>Merci pour votre commentaire !</p>";
        }

        echo "<h2>Commentaires</h2>";
        if (file_exists("comments.txt")) {
            $comments = file("comments.txt");
            echo "<ul>";
            foreach ($comments as $c) {
                echo "<li>" . htmlspecialchars($c) . "</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Aucun commentaire pour l'instant... 😶</p>";
        }
        ?>
    </div>
</body>

</html>
