<!DOCTYPE html>
<html lang="en">

<head>

    <?php include '../manage/head/back_head.php'; ?>
</head>

<body>

    <?php include '../manage/header_bar/back_header_bar.php'; ?>


    <div id="contact" class="contact-us section">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading text-center pt-3">
                        <h2>เขียนไดอารี่ประจำวันที่ <em><?php echo date("d/m/Y"); ?></em>
                            <p><span class="text-center">Write Diary Now</span>
                        </h2>
                    </div>
                </div>
            </div>


            <div class="row justify-content-center">
                <div class="col-lg-7 align-self-center">
                    <form id="contact" action="../assets/config/add_data.php" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                            <input type="hidden" id="date_diary" name="date_diary" value="<?php echo date("Y-m-d"); ?>">
                                <fieldset>
                                    <input type="name" id="topic_today" name="topic_today" placeholder="หัวข้อเรื่องไดอารี่" autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea class="form-control" id="text_topic" name="text_topic" placeholder="เนื้อเรื่องไดอารี่ในวันนี้" id="floatingTextarea2" style="height: 100px" autocomplete="on"></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12 pt-4">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button">บันทึกไดอารี่</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="contact-dec">
            <img src="../assets/images/contact-dec.png" alt="">
        </div>
        <div class="contact-left-dec">
            <img src="../assets/images/contact-left-dec.png" alt="">
        </div>
    </div>

    <?php include '../manage/lower/back_lower.php'; ?>
</body>

</html>