<?php include 'header.php'; ?>

<!----------------------------------------------NAVBAR----------------------------------------------->

<nav class="navbar navbar-dark bg-primary">
	   <a class="navbar-brand" href="#">
   			 <img class="img-logo-header" src="images/logo.ico" width="50" height="50" alt="Logo">
   			 Sistema Wennan
 	 </a>	
</nav>
<!----------------------------------------------NAVBAR----------------------------------------------->



<div class="container">
			<!-----------DEFECT CASE--------------------->


			


		<!-----------DEFECT CASE--------------------->


		<?php

		if (!isset($_GET['case'])) 
		{
			 include 'pages/defect-case.php';
		}

		if (isset($_GET['case'])) 
		{

			if($_GET['case'] == 1) 
			{ 
				 include 'pages/case-1.php';

			}else if($_GET['case'] == 2)
			{
				include 'pages/case-2.php';
			}

		}

			

		?>
</div>




<?php include 'footer.php'; ?>
