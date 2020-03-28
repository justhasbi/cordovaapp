<?php

include "db.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $qr = mysqli_query($con, "DELETE FROM 'course_details' where 'id' = '$id'");

    if($qr) 
        echo "Success";
    else 
        echo "Error";
    
}

?>