<div id="ordersBtn" >
  <h2>Order Details</h2>
  <table class="table table-striped">
    <thead>
      <tr>
      <th class="text-center">CarId</th>
        <th class="text-center">Name</th>
        <th class="text-center">MobileNo.</th>
        <th class="text-center">State</th>
        <th class="text-center">Pincode</th>
        <th class="text-center">City</th>
        <th class="text-center">Email</th>
        <th class="text-center">Address</th>
        <th class="text-center">Color</th>
        <th class="text-center">CarName</th>
        <th class="text-center">CarPrice</th>
        <th class="text-center">BookingDate</th>
        <th class="text-center" colspan="3">Action</th>
     </tr>
    </thead>
     <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from booking";
      $result=$conn-> query($sql);
      
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
       <tr>
       <td><?=$row["carid"]?> </td>
       <td><?=$row["name"]?> </td>
      <td><?=$row["mobileno"]?></td>
      <td><?=$row["state"]?></td>
      <td><?=$row["pincode"]?> </td>
      <td><?=$row["city"]?></td>
      <td><?=$row["email"]?></td>
      <td><?=$row["address"]?> </td>
      <td><?=$row["color"]?></td>
      <td><?=$row["carname"]?></td>
      <td><?=$row["carprice"]?></td>
      <td><?=$row["bookingdate"]?></td>
           <?php 
                if($row["carid"]==0){
                            
            ?>
                <td><button class="btn btn-danger" onclick="ChangeOrderStatus('<?=$row['carid']?>')">Pending </button></td>
            <?php
                        
                }else{
            ?>
                <td><button class="btn btn-success" onclick="ChangeOrderStatus('<?=$row['carid']?>')">Delivered</button></td>
        
            <?php
            }
                if($row["carid"]==0){
            ?>
                <td><button class="btn btn-danger"  onclick="ChangePay('<?=$row['carid']?>')">Unpaid</button></td>
            <?php
                        
            }else if($row["carname"]==1){
            ?>
                <td><button class="btn btn-success" onclick="ChangePay('<?=$row['carid']?>')">Paid </button></td>
            <?php
                }
            ?>
              
        <td><a class="btn btn-primary openPopup" data-href="./adminView/viewEachOrder.php?orderID=<?=$row['carid']?>" href="javascript:void(0);">View</a></td>
        </tr>
    <?php
            
        }
      }
    ?>
     
  </table>
   
</div>
<!-- Modal -->
<div class="modal fade" id="viewModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Order Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="order-view-modal modal-body">
        
        </div>
      </div><!--/ Modal content-->
    </div><!-- /Modal dialog-->
  </div>
<script>
     //for view order modal  
    $(document).ready(function(){
      $('.openPopup').on('click',function(){
        var dataURL = $(this).attr('data-href');
    
        $('.order-view-modal').load(dataURL,function(){
          $('#viewModal').modal({show:true});
        });
      });
    });
 </script>