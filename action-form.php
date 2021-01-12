<?php 


$urlToRedirect = 'index.php';

if ($_POST['select-case-study']) 
{

	$typeCase = $_POST['select-case-study'];


	if($typeCase == 1)
	{	
		header('Location: '. $urlToRedirect . '?case=1');

	}
}




 ?>