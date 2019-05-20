<?php

	require_once("../class/project.php");
			// var_dump($_FILES);
	        $car_name = addslashes($_POST['car_name']);
	        $manu_id = $_POST['car_manufacture'];
	        $car_reg_no = addslashes($_POST['reg_no']);
	        $car_est_yr = $_POST['reg_yr'];
	        $car_clr = addslashes($_POST['color']);
	        $note = addslashes($_POST['note']);
			// $data = $obj->select_data("car_name","tbl_cars","car_name='$car_name'")[0]['car_name'];
			// if(sizeof($data)>0) {
			// 	$msg = "Car Exist ";
			// }
			// else {
				$obj->insert("tbl_cars","car_name,manu_id,car_reg_no,car_clr,car_reg_yr,car_note","'$car_name','$manu_id','$car_reg_no','$car_clr','$car_est_yr','$note'");
				$id = $obj->select_data("car_id","tbl_cars","1 order by car_id desc limit 1")[0]['car_id'];
				if(sizeof($id)>0) {
					$total = count($_FILES['file_upload']['name']);

					// Loop through each file
					for( $i=0 ; $i < $total ; $i++ ) {

					  //Get the temp file path
					  $tmpFilePath = $_FILES['file_upload']['tmp_name'][$i];

					  //Make sure we have a file path
					  if ($tmpFilePath != ""){
					    //Setup our new file path

					    $newFilePath = "../car_images/" . $_FILES['file_upload']['name'][$i];

				     	$fileName = $_FILES['file_upload']['name'][$i];
						if(move_uploaded_file($tmpFilePath, $newFilePath)) {

					      //Handle other code here
							$obj->insert("tbl_cars_images","car_img,car_id","'$fileName','$id'");
					    }
				    
					  }
					}
					
		                    // $main_image_ext = basename($_FILES["main_img". $i]["name"]);
		                    // $main_image_ext = end(explode(".",$main_image_ext));


		                    // $mainfile = $_FILES["main_img" . $i]["tmp_name"];
		                    // $mainImg_other = $sellerid . $obj->Genrate_string(9) . "-Beldara-".$name."-".$i.".".$main_image_ext;
		                    // $folder = "../../product_images_thumb/" . $mainImg_other;
		                    // move_uploaded_file($_FILES["main_img" . $i]["tmp_name"], $folder);

		                    // $cnt1 = $obj->insert("tbl_seller_products_images", "productid,sellerid,img,ip,sysdate,scrape_id",
		                    //     "'$productid','$sellerid','$mainImg_other','$ip',NOW(),$i");
		        
				}
				
				$msg = "1";
			// }
	        
	

	echo $msg;