<?php

    include_once "../config/dbconnect.php";
    
    $cu_id=$_POST['record'];
    $query="DELETE FROM customer where id='$cu_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Category Item Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>