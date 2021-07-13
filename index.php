<!DOCTYPE html>
<html lang="en">

<head>

  <?php include 'manage/head/front_head.php'; ?>

</head>

<body>

<?php include 'manage/header_bar/front_header_bar.php'; ?>


  <div id="pricing" class="pricing-tables">
    <div class="tables-left-dec">
      <img src="assets/images/tables-left-dec.png" alt="">
    </div>
    <div class="tables-right-dec">
      <img src="assets/images/tables-right-dec.png" alt="">
    </div>
    <div class="container">
      <div class="row pt-4">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading text-center">
            <h2>มาเริ่มทำ<em> Diary</em> กันเถอะ</h2>
          </div>
        </div>
      </div>

      <div class="row justify-content-center">

        <div class="col-lg-4">
          <a href="from_diary/from_diary.php">
            <div class="item first-item">
              <div class="text-center text-warning"><i class="fas fa-marker fa-7x"></i></div>
              <h1 class="display-3 text-center text-warning pt-4"><strong>เขียนไดอารี่</strong></h1>
            </div>
          </a>
        </div>

        <div class="col-lg-4">
          <a href="show_diary/show_diary.php">
            <div class="item second-item">
              <div class="text-center text-primary"><i class="fas fa-book-open fa-7x"></i></div>
              <h1 class="display-3 text-center text-primary pt-4"><strong>อ่านไดอารี่</strong></h1>
            </div>
          </a>
        </div>

      </div>
    </div>
  </div>

<?php include 'manage/lower/front_lower.php'; ?>
</body>

</html>