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

	}else if($typeCase == 3)
	{
		$urlToRedirectThree = $urlToRedirect.'?case=3';
		
		echo '<script type="text/javascript">
		window.location="'.$urlToRedirectThree.'"</script>';
	}else if($typeCase == 4)
	{
		$urlToRedirectFour = $urlToRedirect.'?case=4';
		
		echo '<script type="text/javascript">
		window.location="'.$urlToRedirectFour.'"</script>';
	}else if($typeCase == 5)
	{
		$urlToRedirectFive = $urlToRedirect.'?case=5';
		
		echo '<script type="text/javascript">
		window.location="'.$urlToRedirectFive.'"</script>';
	}else if($typeCase == 6)
	{
		$urlToRedirectSix = $urlToRedirect.'?case=6';
		
		echo '<script type="text/javascript">
		window.location="'.$urlToRedirectSix.'"</script>';
	}else if($typeCase == 7)
	{
		$urlToRedirectSeven = $urlToRedirect.'?case=7';
		
		echo '<script type="text/javascript">
		window.location="'.$urlToRedirectSeven.'"</script>';
	}else if($typeCase == 8)
	{
		$urlToRedirectEight = $urlToRedirect.'?case=8';
		
		echo '<script type="text/javascript">
		window.location="'.$urlToRedirectEight.'"</script>';
	}
}




 ?>