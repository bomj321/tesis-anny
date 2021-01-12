<div class="row">
	<div class="col-12 text-center mt-5">
		<h1>Selecciona un método de producción</h1>
	</div>
</div>


	<div class="row">
		<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 offset-xl-4 offset-lg-4 offset-md-4">

			 <form method="POST" action="action-form.php">
			 	<input type="hidden" name="number-case" value="<?php echo $_GET['case'] ?>">
					 <div class="form-group">
					    <label for="select-method-production">Recopilar información de pozos con problemas de baja tasa de producción de petroleo</label>
					    <select class="form-control" id="select-method-production" name="select-method-production">
					    	  <option value="BM">BM</option>	
						      <option value="BES">BES</option>
						      <option value="BCP">BCP</option>
						      <option value="GAS-LIFT">Gas Lift</option>						      
					    </select>
		  	    	</div>

		  	    	  <button type="submit" class="btn btn-primary">Buscar</button>

		   </form>	
		</div>
	</div>