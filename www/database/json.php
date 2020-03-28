<?php

include "db.php";

$data = array();
$qr = mysqli_query($con, "SELECT * FROM 'course_details' ");

while ($row = mysqli_fetch_object($qr)) {
    $data[] = $row;
}

echo json_encode($data);
?>