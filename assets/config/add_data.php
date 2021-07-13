<?php
//print_r($_POST);
include "connectdb.php";


// รับค่า
$id_line = $_POST['id_line'];
$topic_today = $_POST['topic_today'];
$text_topic = $_POST['text_topic'];
$data_diary = $_POST['date_diary'];


// sql insert to database
$sql = "INSERT INTO diary_show (id_line, topic, text_topic,data_diary)
VALUES ('" . $id_line . "', '" . $topic_today . "', '" . $text_topic . "', '" . $data_diary . "')";

if ($conn->query($sql) === TRUE) {
?>
<link rel="stylesheet" href="../css/animated.css">
<link rel="stylesheet" href="../css/templatemo-onix-digital.css">
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>


<?php
} else {
    echo "Errorhhhhhhhh: " . $sql . "<br>" . $conn->error;
}

header("refresh:3;url=../../show_diary/show_diary.php");

$conn->close();

?>