<?php
include "db.php";
    if(isset($_POST['insert'])) {
        $title=$_POST['title'];
        $duration=$_POST['duration'];
        $price=$_POST['price'];
    
        $qr=mysqli_query($con,"INSERT INTO `course_details` ( `title` , `duration` , `price` ) VALUES ('$title','$duration','$price')");
        if($qr)
            echo "success";
        else
            echo "error";
    }
?>