<!DOCTYPE html>
<html>
<head>
	<title>Get Turnt</title>
</head>

<body>
<?php

$response = file_get_contents('https://www.thecocktaildb.com/api/json/v1/1/filter.php?a=Non_Alcoholic');
$arr_data = json_decode($response, true);
$jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
header('Content-Type: application/json');
echo $jsondata;
?>