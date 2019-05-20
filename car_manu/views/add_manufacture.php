<?php

?>
<link href="https://getbootstrap.com/docs/4.3/examples/floating-labels/floating-labels.css" rel="stylesheet">

<form class="form-signin" onsubmit="return validate_manu()" method="post">
	<div class="row justify-content-between my-5">
		<div class="col-4">
			<a class="btn btn-danger" href="javascript:history.go(-1)"><i class="fa fa-chevron-left mr-1"></i> Go Back</a>
		</div>
		<div class="col-auto">
			<a class="btn btn-success form-control" href="add_car.php"><i class="fa fa-chevron-right mr-1"></i> Add Car Model</a>
		</div>
	</div>
	<div class="text-center mb-4">
	    <h1 class="h3 mb-3 font-weight-normal">Add Manufacturer name</h1>

  	</div>
  	<div class="form-label-group">
	  	<input type="text" id="manufa" class="form-control" placeholder="E.g.Maruti Suzuki" required autofocus autocomplete="off">
		<label for="manufa">Enter Manufacture name</label>
  	</div>
  	<div class="form-group">
  		<button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
  	</div>
  	<div class="form-group">
	  	<div class="alert d-none error"></div>
  	</div>
</form>
