<?php
$query = $_POST['sentence'];
$bad_words = ['composto', 'questo', 'giogo', 'problematica', 'completo'];

echo "{$query} | (Lunghezza: ". strlen($query) .")";

