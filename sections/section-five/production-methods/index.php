<?php include 'header.php'; ?>

<!----------------------------------------------NAVBAR----------------------------------------------->

<nav class="navbar navbar-dark bg-primary">
	   <a class="navbar-brand" href="#">
   			 <img class="img-logo-header" src="../../../images/logo.ico" width="50" height="50" alt="Logo">
   			 Sistema Wennan
 	 </a>	
</nav>
<!----------------------------------------------NAVBAR----------------------------------------------->



<div class="container">


		<?php

		if (!isset($_GET['production-method'])) 
		{
			 include 'defect-case.php';
		}

		if (isset($_GET['production-method'])) 
		{

			if($_GET['production-method'] == 'BM') 
			{ 
				 include 'BM.php';

			}else if($_GET['production-method'] == 'BES')
			{
				include 'BES.php';

			}else if($_GET['production-method'] == 'BCP')
			{
				include 'BCP.php';
				
			}else if($_GET['production-method'] == 'GAS-LIFT')
			{
				include 'GAS-LIFT.php';
			}

		}			

		?>
</div>

<?php include 'footer.php'; ?>	