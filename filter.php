<!DOCTYPE html>
<html>
<head>
	<title>Get Turnt</title>
</head>

<body>
<?php
if($_GET){

    if(isset($_GET['Alcoholic'])){

        insert();

    }elseif(isset($_GET['Non-Alcoholic'])){

        nonAlcoholFunction();

    }

}
function nonAlcoholFunction() { 
	$response = file_get_contents('https://www.thecocktaildb.com/api/json/v1/1/filter.php?a=Non_Alcoholic');
	$arr_data = json_decode($response, true);
	$jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
	for($i = 0; $i < count($arr_data['drinks']); $i++)
	{
		echo $arr_data['drinks'][$i]['strDrink']; echo "<br>";
		echo '<img src ="'.$arr_data['drinks'][$i]['strDrinkThumb'].'" width = 200 height=200/><br>';echo " ";
		echo $arr_data['drinks'][$i]['idDrink']; echo "<br>";
		echo "<br>";
	} 
} 
function alcoholFunction() { 
	$response = file_get_contents('https://www.thecocktaildb.com/api/json/v1/1/filter.php?a=Alcoholic');
	$arr_data = json_decode($response, true);
	$jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
	for($i = 0; $i < count($arr_data['drinks']); $i++)
	{
		echo $arr_data['drinks'][$i]['strDrink']; echo "<br>";
		echo '<img src ="'.$arr_data['drinks'][$i]['strDrinkThumb'].'" width = 200 height=200/><br>';echo " ";
		echo $arr_data['drinks'][$i]['idDrink']; echo "<br>";
		echo "<br>";
	} 
}		

?>.
<input type="submit" class="button" name="Alcoholic" value="Alcoholic" />
<input type="submit" class="button" name="Non-Alcoholic" value="Non-Alcoholic" />
</body>
</html>