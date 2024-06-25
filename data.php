<?php

include __DIR__ . "/models/Categoria.php";
include __DIR__ . "/models/Prodotto.php";


$gatto = new Categoria("Per Gatti","Per felini,biologico e di qualità");
$cane = new Categoria("Per Cani","Per canidi,biologico e di qualità");