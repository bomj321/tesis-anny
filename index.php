<?php include 'header.php'; ?>

<!----------------------------------------------NAVBAR----------------------------------------------->

<nav class="navbar navbar-dark bg-primary">
	   <a class="navbar-brand" href="./index.php">
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
			 include 'sections/defect-case.php';
		}

		if (isset($_GET['case'])) 
		{

			if($_GET['case'] == 1) 
			{ 
				 include 'sections/section-one/case-1.php';

			}else if($_GET['case'] == 2)
			{
				include 'sections/section-two/case-2.php';

			}else if($_GET['case'] == 3)
			{
				include 'sections/section-three/case-3.php';
			}else if($_GET['case'] == 4)
			{
				include 'sections/section-four/case-4.php';
			}else if($_GET['case'] == 5)
			{
				include 'sections/section-five/case-5.php';
			}else if($_GET['case'] == 6)
			{
				include 'sections/section-six/case-6.php';
			}else if($_GET['case'] == 7)
			{
				include 'sections/section-seven/case-7.php';
			}else if($_GET['case'] == 8)
			{
				include 'sections/section-eight/case-8.php';
			}else if($_GET['case'] == 9)
			{
				include 'sections/section-nine/case-9.php';
			}else if($_GET['case'] == 10)
			{
				include 'sections/section-ten/case-10.php';
			}

		}

			

		?>
</div>




<?php include 'footer.php'; ?>
