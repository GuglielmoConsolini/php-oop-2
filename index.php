<?php

include __DIR__ . "/data.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>E-Commerce Animali</title>
</head>


<body>
  <div class="container">
    <?php
        foreach ($prodotti as $prodotto) {
            echo "<div class='card'>";
            echo "<h2>" . $prodotto->nome . "</h2>";
            echo "<p>Prezzo: €" . $prodotto->prezzo . "</p>";
            echo "<p>Categoria: " . $prodotto->categoria->nome . "</p>";
            if (isset($prodotto->immagine)) {
                echo "<img src='" . $prodotto->immagine . "' alt='" . $prodotto->nome . "'>";
            }
            if ($prodotto instanceof Cibo) {
                echo "<p>Peso: " . $prodotto->peso . " kg</p>";
            }
            if ($prodotto instanceof Cuccia) {
                echo "<p>Dimensioni: " . $prodotto->dimensioni . "</p>";
            }
            if ($prodotto instanceof Gioco) {
                echo "<p>Materiale: " . $prodotto->materiale . "</p>";
            }
            echo "<p>" . $prodotto->getDescrizione() . "</p>";
            echo "</div>";
        }
    ?>
  </div>
</body>
</html>