<?php

include "connectdb.php";

// รับค่า
$ID = $_GET['ID'];


// sql to delete a record
$sql = "DELETE FROM diary_show WHERE ID='".$ID."' ";

if (mysqli_query($conn, $sql)) {
    echo "Deleted Successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

header( "refresh:3;url=../s_dia.php" ); 

mysqli_close($conn);
?>