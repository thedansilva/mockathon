<!DOCTYPE html>
<html>
<head>
	<title>Some nice photos :)</title>
	<link href="photos.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dmproj";
$page = rand(1, 20);
//input = $_GET["name"];
//$input = "Margarita";
$conn = new mysqli($servername, $username, $password, $dbname) or die ("NOEP");
$response = file_get_contents('https://www.thecocktaildb.com/api/json/v1/1/random.php');
$jsondata = json_decode($response, true);
//$jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
//echo $jsondata;
//var_dump($jsondata);
for ($i = 0; $i < count($jsondata['drinks']); $i++) {
	//echo '<img src="'.$jsondata["drinks"][$i]['strDrinkThumb'].'"'>;
	echo '<img src="'.$jsondata["drinks"][$i]['strDrinkThumb'].'" width=310 height=175 alt="icon"" /><br>';
	echo $jsondata["drinks"][$i]['strDrink'].'<br>';
	echo $jsondata["drinks"][$i]['idDrink'].'<br>';
	echo $jsondata["drinks"][$i]['strTags'].'<br>';
} ?>
<?php
;
/*
if($result-> num_rows > 0)
{
	while($row = $result-> fetch_assoc())
	{
		echo '<tr><th>';
		echo '<img src="'.$row['download_url'].'" width=310 height=175 alt="icon"" /><br>';
		echo 'Author: '.$row['author'].'';
		echo '</tr></th>';
		}
}
*/
	$conn-> close();
?>
</table>
</div>
<div id="links">
	<div id="bgc">
		<p id="pg2"><a href="main.php">Return to Main Page</a></p>
	</div>
</div>
</body>