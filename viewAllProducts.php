
<div >
  <h2>Product Items</h2>
  <div class="table-responsive ptable">
    <table class="table ">
      <thead>
        <tr>
        <th class="text-center">car_id</th>
        <th class="text-center">car Image</th>
          <th class="text-center">carname</th>
          <th class="text-center">carprice</th>
          <th class="text-center">carmodel</th>
          <th class="text-center" colspan="3">Action</th>
        </tr>
      </thead>
      <?php
        include_once "../config/dbconnect.php";
        $sql="SELECT * from car_details";
        $result=$conn-> query($sql);
        $count=1;
        if ($result-> num_rows > 0){
          while ($row=$result-> fetch_assoc()) {
      ?>
      <tr>
  
        <td><?=$row["car_id"]?> </td>
        <td><img height='100px' src="../uploads/ <?=$row["car_image"]?>"></td>
        <td><?=$row["carname"]?> </td>
        <td><?=$row["carprice"]?></td>
        <td><?=$row["carmodel"]?></td>
        <td><button class="btn btn-primary" style="height:40px" onclick="itemEditForm('<?= $row['car_id'] ?>')">Edit</button></td>
        <td><button class="btn btn-danger" style="height:40px" onclick="itemDelete('<?=$row['car_id']?>')">Delete</button></td>
        </tr>
        <?php
              $count=$count+1;
            }
          }
        ?>
    </table>
  </div>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Product
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Product Item</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' onsubmit="addItems()" method="POST">
            <div class="form-group">
              <label for="name">Product Name:</label>
              <input type="text" class="form-control" name="p_name" required>
            </div>
            <div class="form-group">
              <label for="price">Price:</label>
              <input type="number" class="form-control" name="p_price" required>
            </div>
            <div class="form-group">
              <label for="qty">Description:</label>
              <input type="text" class="form-control" name="p_model" required>
            </div>
            
             <!-- <div class="form-group"> 
              <label>Category:</label>
              <select id="cars" >
                <option disabled selected>Select cars</option>
                <?php

                  $sql="SELECT * from car_details";
                  $result = $conn-> query($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['car_id']."'>".$row['carname'] ."</option>";
                    }
                  }
                ?>
              </select>
            </div> -->
            <div class="form-group">
                <label for="file">Choose Image:</label>
                <input type="file" class="form-control-file" name="file">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Add Item</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div>
   