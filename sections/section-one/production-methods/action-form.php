<?php 


if ($_POST['select-method-production'] && $_POST['number-case']) 
{
    $typeMethod = $_POST['select-method-production'];	
    $urlToRedirect = 'index.php?case='.$_POST['number-case'].'&production-method='.$typeMethod;

    echo '<script type="text/javascript"> window.location="'.$urlToRedirect.'"</script>';
	
}

 ?>