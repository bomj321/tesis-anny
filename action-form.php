<?php 


$urlToRedirect = 'index.php';

if (isset($_POST['select-case-study'])) 
{

	$typeCase = $_POST['select-case-study'];

	if($typeCase == 1)
	{	

		$urlToRedirectOne = $urlToRedirect.'?case=1';
		
		echo '<script type="text/javascript">
		window.location="'.$urlToRedirectOne.'"</script>';

	}else if($typeCase == 2)
	{
		$urlToRedirectTwo = $urlToRedirect.'?case=2';
		
		echo '<script type="text/javascript">
		window.location="'.$urlToRedirectTwo.'"</script>';
	}
}




 ?>