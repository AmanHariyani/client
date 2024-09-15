<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $catname = $_POST['c_name'];
       
         $insert = mysqli_query($conn,"INSERT INTO cars
         (carname) VALUES ('$catname')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: ../dashboard.php?cars=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../dashboard.php?cars=success");
         }
     
    }
        
?>