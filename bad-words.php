<?php
$query = $_POST['sentence'];
$filter = $_POST['filter'];

echo "{$query} | (Lunghezza: ". strlen($query) .")";

