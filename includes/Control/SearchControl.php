<?php

if (isset($_POST['search-input'])) {
	$searchtext = $_POST['search-input'];
	$filtertext = $_POST['search-filter'];
	echo $searchtext;
	echo $filtertext;
}
else
{
	header("Location: ../Library%20System%20Project/libraries.php");
}