<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choix Aléatoire</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 20px;
            background-color: #4c51f7;
            color: #fff;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background: rgba(0, 0, 0, 0.8);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        #result {
            margin-top: 20px;
            font-size: 20px;
        }
        .credits {
            margin-top: 30px;
            font-size: 14px;
            color: #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Choisissez un élément aléatoire</h1>
        <form method="post">
            <button type="submit" name="generate">Choisir Aléatoirement</button>
        </form>
        <div id="result">
            <?php
                // Liste prédéfinie
                $items = ["Pomme", "Banane", "Orange", "Mangue", "Fraise", "Raisin", "Ananas"];

                // Si le bouton est cliqué, choisir un élément aléatoire
                if (isset($_POST['generate'])) {
                    $randomItem = $items[array_rand($items)];
                    echo "<p>Élément choisi : <strong>" . htmlspecialchars($randomItem) . "</strong></p>";
                }
            ?>
        </div>
        <div class="credits">
            <p>Crédits : Conçu par [Votre Nom]</p>
        </div>
    </div>
</body>
</html>
