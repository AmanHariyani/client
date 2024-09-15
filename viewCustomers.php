<div >
  <h2>All Customers</h2>
  <table class="table ">
    <thead>
      <tr>
      <th class="text-center">Id</th>
        <th class="text-center">UserName</th>
        <th class="text-center">Password</th>
        <th class="text-center">Gender</th>
        <th class="text-center" colspan="2">Action</th>
        
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from customer ";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
    <td><?=$row["id"]?></td>
    <td><?=$row["username"]?></td>
      <td><?=$row["password"]?></td>
      <td><?=$row["gender"]?> </td> 
      <td><button class="btn btn-danger" style="height:40px" onclick="itemDelete('<?=$row['id']?>')">Delete</button></td>
      
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>