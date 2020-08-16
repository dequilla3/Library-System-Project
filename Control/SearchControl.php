<?php


if (isset($_POST['search-input']) || $_POST['submit']) {
	$searchtext = $_POST['search-input'];
	header("Location: ../libraries.php?searchtext=".$searchtext."");
	exit();	
}
else
{

} 	