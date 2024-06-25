<?php

include __DIR__ . "/models/Categoria.php";
include __DIR__ . "/models/Prodotto.php";
include __DIR__ . "/models/Cibo.php";
include __DIR__ . "/models/Cuccia.php";
include __DIR__ . "/models/Gioco.php";
include __DIR__ . "/models/Vestiario.php";


$gatto = new Categoria("Per Gatti","Per felini,biologico e di qualità");
$cane = new Categoria("Per Cani","Per canidi,biologico e di qualità");


$prodotti = [
      
    new Gioco("Tira graffi", 30, $gatto, "paglia"),
    new Prodotto("Museruola", 45, $cane),
    new Gioco("Boomerang","8",$cane,"legno"),
    new Cuccia("Cuccia Gialla", 10, $cane,"12x50x115 cm"),
    new Cibo("Integratore B12", 15,  $cane,"20"),
    new Vestiario("Pettorina",17,$cane, "Sintetico"),

];