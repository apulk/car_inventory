// $(document).ready(function(){
	function validate_manu(){
		var manu = $("#manufa").val();
		$.ajax({
			type:"post",
			data:{"manu":manu,"type":"add_manu"},
			url:"api/main.php",
			success:function(res) {
				// alert(1)
				console.log(res)
				if(res==1) {
					$(".error").removeClass("d-none alert-danger alert-success").addClass("d-block alert-success").text("Manufacturer added Successfully")
				}
				else {
					$(".error").removeClass("d-none alert-danger alert-success").addClass("d-block alert-danger").text("Manufacturer Exist")
				}
				return false
			}
		})
		// alert(manu)
		return false
	}
	$("#subCarForm").submit(function(){
		// var car = $("#car").val();
		// var color = $("#color").val();
		// var reg_yr = $("#reg_yr").val();
		// var reg_no = $("#reg_no").val();
		// var note = $("#note").val();
		if($("#car_select").val()!='0') {
			var car = new FormData(this)
			$.ajax({
				type:"post",
				data:car,
				url:"api/add_car.php",
				mimeType: "multipart/form-data",
	            contentType: false,
	            cache: false,
	            processData: false,
				success:function(res) {
					// alert(1)
					console.log(res)
					if(res==1) {
						$(".error").removeClass("d-none alert-danger alert-success").addClass("d-block alert-success").text("Car added Successfully")
					}
					else {
						$(".error").removeClass("d-none alert-danger alert-success").addClass("d-block alert-danger").text("Car name Exist")
					}
					return false
				}
			})
			// alert(manu)
		}
		else {
			$(".error").removeClass("d-none alert-danger alert-success").addClass("d-block alert-danger").text("Please Select Manufacturer")
		}
		return false
	})
	function isNumber(evt) {
	    evt = (evt) ? evt : window.event;
	    var charCode = (evt.which) ? evt.which : evt.keyCode;
	    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
	        return false;
	    }
	    return true;
	}
// })

	$('#car_modal').on('shown.bs.modal', function (event) {
	  var button = $(event.relatedTarget) // Button that triggered the modal
	  var carName = button.data('name') // Extract info from data-* attributes
	  // console.log(button)
	  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	  var modal = $(this)
	  modal.find('.modal-title').text('Car Detail of ' + carName)
	  
	  var id = button.data('id')
	  modal.find('.modal-footer button').val(id)
	  console.log(id)
	  $.ajax({
	  	type:"post",
	  	data:{"car_id":id,"type":"get_cars"},
	  	url:"api/main.php",
	  	success:function(res){
	  		// alert(1);
	  		console.log(res);
	  		modal.find('.modal-body table').html(res)

	  	}
	  })
	});


	function carDelete(val) {
		// alert(val)
		if(confirm('are you sure ?')) {
			$.ajax({
				type:"post",
				data:{"car_id":val,"type":"del_car"},
				url:"api/main.php",
				success:function(res){
					if(res==1) {
						alert("Car record deleted ")
						window.location.href = '';
					}
				}
			})
		}
		else {
			alert(1)
		}
		
	}
