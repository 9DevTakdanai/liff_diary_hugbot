<?php
include "connectdb.php";

// รับค่า
$ID = $_POST['ID'];
$id_line = $_POST['id_line'];
$topic_today = $_POST['topic_today'];
$text_topic = $_POST['text_topic'];
$data_diary = $_POST['date_diary'];



// sql to delete a record
$sql = "UPDATE diary_show SET id_line='". $id_line ."',topic='". $topic_today ."',text_topic='". $text_topic ."',data_diary='". $data_diary ."'  WHERE ID='". $ID ."'";

if (mysqli_query($conn, $sql)) {
    echo "Updated Successfully";
} else {
    echo "Error Updating record: " . mysqli_error($conn);
}

header( "refresh:3;url=../s_dia.php" ); 

$conn->close();
?>