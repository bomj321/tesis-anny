<?php 


$urlToRedirect = 'index.php';

if ($_POST['select-method-production'] && $_POST['number-case']) 
{

	$typeMethod = $_POST['select-method-production'];	
    header('Location: '. $urlToRedirect . '?case='.$_POST['number-case']. '&production-method='. $typeMethod);


	
}




 ?>