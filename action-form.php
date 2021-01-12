<?php 


$urlToRedirect = 'index.php';

if ($_POST['select-case-study']) 
{

	$typeCase = $_POST['select-case-study'];


	if($typeCase == 1)
	{	

		$urlToRedirectOne = $urlToRedirect.'?case=1';
		
		echo '<script type="text/javascript">
		window.location="'.$urlToRedirectOne.'"</script>';

	}
}




 ?>