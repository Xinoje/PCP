<?php
include('data.php');

$max = number_format(max($temperatures), 1);
$min = number_format(min($temperatures), 1);


include('vues/index.php');

