<?php
    require '../config/dbconnect.php';

    
    if(isset($_POST['upload']))
    {
       
        $ci = $_POST['file'];
        $cn= $_POST['p_name'];
        $cp = $_POST['p_price'];
        $cm = $_POST['p_model'];
       
            
        $name = $_FILES['file']['name'];
        $temp = $_FILES['file']['tmp_name'];
    
        $location="./uploads/";
        $image=$location.$name;

        $target_dir="../uploads/";
        $finalImage=$target_dir.$name;

        move_uploaded_file($temp,$finalImage);

         $insert = mysqli_query($conn,"INSERT INTO car_details( `car_image`, `carname`, `carprice`, `carmodel`) VALUES ('$ci','$cn','$cp','$cm')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: ../dashboard.php?cars=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../dashboard.php?cars=error");
         }
     
    }
        
?>