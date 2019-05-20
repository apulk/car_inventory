<?php

	require_once("../class/project.php");
	switch ($_POST['type']) {
	    case "add_manu":
	        $manu = addslashes($_POST['manu']);
			$data = $obj->select_data("manufacture","tbl_manufacture","manufacture='$manu'")[0]['manufacture'];
			if(sizeof($data)>0) {
				$msg = "Manufacturer Exist ";
			}
			else {
				$obj->insert("tbl_manufacture","manufacture","'$manu'");
				$msg = "1";
			}
	        break;
	   	case "get_cars":
	   		$car_id = $_POST['car_id'];
	   		$val = $obj->select_data("*","tbl_cars","car_id='$car_id'")[0];
	   		$imgs = $obj->select_data("*","tbl_cars_images","car_id='$car_id'");
	   		$msg = '<thead>
						    <tr>
						      <th scope="col">Color</th>
						      <th scope="col">Registration Year</th>
						      <th scope="col">Registration Number</th>
						      <th scope="col">Images</th>
						    </tr>
						  </thead>
						  <tbody>
						  <tr>
		   					<td class="">'.$val['car_clr'].'</td>
		   					<td class="">'.$val['car_reg_yr'].'</td>
		   					<td class="">'.$val['car_reg_no'].'</td><td class="">';
		   					
		   					foreach($imgs as $img) {
		   						$msg .=	   '<img width="100px" src="car_images/'.$img['car_img'].'" alt="'.$img['car_img'].'"/>';
		   					}	
		   	
		   	$msg .=				'</td></tr>
	   				</tbody>';
	   		break;
   		case "del_car":
	        $car_id = addslashes($_POST['car_id']);
			$obj->delete("tbl_cars","car_id='$car_id'");
			$msg = "1";
        break;

	    default:
	        $msg = "Something went wrong,Please try again";
	}
	

	echo $msg;