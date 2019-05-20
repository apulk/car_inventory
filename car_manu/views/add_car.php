<?php
ini_set('display_errors',1);
	require_once('class/project.php');
?>
<link href="https://getbootstrap.com/docs/4.3/examples/floating-labels/floating-labels.css" rel="stylesheet">

<form class="form-signin" method="post" id="subCarForm" style="max-width: 500px" enctype="multipart/form-data">
	<div class="row justify-content-between my-5">
		<div class="col-4">
			<a class="btn btn-danger" href="index.php"><i class="fa fa-home mr-1"></i> Home</a>
		</div>
		<div class="col-auto">
			<a class="btn btn-success form-control" href="view_cars.php"><i class="fa fa-chevron-right mr-1"></i> View All Cars</a>
		</div>
	</div>
	<div class="text-center mb-4">
	    <h1 class="h3 mb-3 font-weight-normal">Add Car Model</h1>

  	</div>
  	<div class="row justify-content-between">
  		<div class="col-xs-12 col-md-auto">
		  	<div class="form-label-group">
			  	<input type="text" id="car" class="form-control" placeholder="E.g.WagonR" required autofocus autocomplete="off" name="car_name">
				<label for="car">Enter Car name</label>
		  	</div>
	  </div>
	  <div class="col-xs-12 col-md-auto">
	  	<select class="form-control" style="height: 3.125rem;" name="car_manufacture" id="car_select">
	  		<?php 
	  			$data = $obj->select_data("*","tbl_manufacture","1 order by manufacture asc");
	  			if(sizeof($data)>0) {
	  				echo "<option value=0>Select manufacturer</option>";
	  				foreach ($data as $value) {
	  					echo "<option value='".$value['id']."'>".$value['manufacture']."</option>";
	  				}
	  			}
	  		?>
	  	</select>
	  </div>
  	</div>
  	<div class="mt-3">
		<div class="form-label-group">
		  	<input type="text" id="color" class="form-control" placeholder="E.g.Yellow" name="color" required autocomplete="off">
			<label for="color">Enter color</label>
	  	</div>
	  	<div class="form-label-group">
		  	<input type="tel" id="reg_yr" class="form-control" placeholder="E.g.Registration" name="reg_yr" required autocomplete="off" onkeypress="return isNumber(event)">
			<label for="reg_yr">Enter Registration year</label>
	  	</div>
	  	<div class="form-label-group">
		  	<input type="text" id="reg_no" class="form-control" placeholder="E.g.Yellow" name="reg_no" required autocomplete="off">
			<label for="reg_no">Enter Registration number</label>
	  	</div>
	  	<div class="form-label-group">
		  	<input type="text" id="note" class="form-control" placeholder="Note" name="note" autocomplete="off">
			<label for="note">Enter Note</label>
	  	</div>
	  	 <div class="form-group">
		    <label for="exampleFormControlFile1">Add Car 2 Pictures </label>
		    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file_upload[]" multiple="multiple">
		  </div>
	</div>
  	<div class="form-group mt-4">
  		<button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
  	</div>
  	<div class="form-group">
	  	<div class="alert d-none error"></div>
  	</div>
</form>
