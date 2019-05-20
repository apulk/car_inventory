<div class="container">
<div class="row justify-content-between my-5">
    <div class="col-4">
      <a class="btn btn-danger" href="index.php"><i class="fa fa-home mr-1"></i> Home</a>
    </div>
    <div class="col-auto">
      <a class="btn btn-success form-control" href="add_car.php"><i class="fa fa-chevron-right mr-1"></i> Add new Car</a>
    </div>
  </div>
  <div class="text-center mb-4">
      <h1 class="h3 mb-3 font-weight-normal">Add Cars</h1>

    </div>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Manufacturer</th>
      <th scope="col">Car name</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $data = $obj->select_data("*","tbl_cars car left join tbl_manufacture man on(man.id=car.manu_id)","1");
      // var_dump($data);
      $k=0;
      foreach ($data as $row) {
        # code...
        $k++;
        echo '<tr>';

        echo '<th scope="row" data-toggle="modal" data-target="#car_modal" data-id="'.$row['car_id'].'" id="'.$k.'" data-name="'.$row['car_name'].'"><a href="#">'.$k.'</a></th>';
        echo '<td>'.$row['manufacture'].'</td>';
        echo '<td>'.$row['car_name'].'</td>';
        
        echo '</tr>';
      }
    ?>
   
 </tbody>
</table>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="car_modal" tabindex="-1" role="dialog" aria-labelledby="car_modal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Car Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-striped"></table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" onclick="return carDelete(this.value)">Delete Car</button>
      </div>
    </div>
  </div>
</div>
</div>