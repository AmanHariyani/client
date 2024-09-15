<?php
   include_once "../config/dbconnect.php";
if(isset($_POST['update'])){
 
$car_id = $_POST['id'];
$carname = $_POST['name'];
$carprice = $_POST['ge'];
$carmodel = $_POST['mo'];
$engine = $_POST['en'];
$bph = $_POST['bph'];
$fuletype = $_POST['fu'];
$speed = $_POST['sp'];
$mileage = $_POST['mi'];
$airbages = $_POST['ai'];
$color = $_POST['co'];
$highlights = $_POST['hi'];
$seating_capacity = $_POST['sc'];

$sql = mysqli_query($conn,"UPDATE car_details SET highlights='$highlights', carname='$carname',carprice='$carprice',
carmodel='$carmodel',engine='$engine',bhp='$bph',fuletype='$fuletype',speed='$speed',mileage='$mileage',
airbages='$airbages',color='$color',scating_capacity='$seating_capacity' WHERE car_id='$car_id'");
if(!$sql){
  echo"<script>alert('data updated successfully')</script>";

}else{
  echo"<script>alter('error')</script>";

}
}
?>

<div class="container p-5">

<h4>Edit Product Detail</h4>
<?php
    include_once "../config/dbconnect.php";
	$ID=$_POST['record'];
	$qry=mysqli_query($conn, "SELECT * FROM car_details WHERE car_id = $ID");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
      $catID=$row1["car_id"];
?>
<form id="update-Items" method="POST" action="#" enctype='multipart/form-data'>
	<div class="form-group">
  <label for="id">id:</label>
      <input type="text" name="id" class="form-control" id="car_id" value="<?=$row1['car_id']?>">
    </div>
    <div class="form-group">
      <label for="name">UserName:</label>
      <input type="text" name="name" class="form-control" id="carname" value="<?=$row1['carname']?>">
    </div>
    <div class="form-group">
      <label for="ge">Gender:</label>
      <input type="text" name="ge" class="form-control" id="carprice" value="<?=$row1['carprice']?>">
    </div>
    <div class="form-group">
      <label for="mo">CarModel:</label>
      <input type="text" name="mo" class="form-control" id="carmodel" value="<?=$row1['carmodel']?>">
    </div>
    <div class="form-group">
      <label for="en">Engine:</label>
      <input type="text" name="en" class="form-control" id="engine" value="<?=$row1['engine']?>">
    </div>
    <div class="form-group">
      <label for="bhp">bhp:</label>
      <input type="text" name="bhp" class="form-control" id="bhp" value="<?=$row1['bhp']?>">
    </div>
    <div class="form-group">
      <label for="fu">Fuletype:</label>
      <input type="text" name="fu" class="form-control" id="fuletype" value="<?=$row1['fuletype']?>">
    </div>
    <div class="form-group">
      <label for="sp">Speed:</label>
      <input type="text" name="sp" class="form-control" id="speed" value="<?=$row1['speed']?>">
    </div>
    <div class="form-group">
      <label for="mi">Mileage:</label>
      <input type="text" name="mi" class="form-control" id="mileage" value="<?=$row1['mileage']?>">
    </div>
    <div class="form-group">
      <label for="ai">Airbages:</label>
      <input type="text" name="ai" class="form-control" id="airbages" value="<?=$row1['airbages']?>">
    </div>
    <div class="form-group">
      <label for="co">Color:</label>
      <input type="text" name="co" class="form-control" id="color" value="<?=$row1['color']?>">
    </div>
    <div class="form-group">
      <label for="hi">Highlights:</label>
      <input type="text" name="hi" class="form-control" id="highlights" value="<?=$row1['highlights']?>">
    </div>
    <div class="form-group">
      <label for="sc">Seating_Capacity:</label>
      <input type="text" name="sc"class="form-control" id="seating_capacity" value="<?=$row1['seating_capacity']?>">
    </div>
 

    <div class="form-group">
      <button type="submit" style="height:40px" name="update" class="btn btn-primary">Update Item</button>
    </div>

    <?php
    		}
    	}
    ?>
  </form>

    </div>