<?php

if (isset($_POST['search-input'])) {
	if (strlen($_POST['search-input']) === 0)
	{

	}
	else
	{
		$searchtext = $_POST['search-input'];
		$filtertext = $_POST['search-filter'];
		echo $searchtext;
		echo $filtertext;
	}

}
else
{
	header("Location: ../Library%20System%20Project/libraries.php");
} 	