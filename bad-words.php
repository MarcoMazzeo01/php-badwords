<?php
$query = $_POST['sentence'];
$filter = $_POST['filter'];

echo nl2br("{$query} | (Lunghezza: ". strlen($query) .")\n");

$filteredSentence = str_replace($filter,'***',$query);
echo "Frase filtrata: {$filteredSentence}";



