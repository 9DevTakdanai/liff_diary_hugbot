<!DOCTYPE html>
<html lang="en">

<head>

  <?php include '../manage/head/back_head.php'; ?>
</head>

<body>
  <?php include '../assets/config/connectdb.php'; ?>
  <?php include '../manage/header_bar/back_header_bar.php'; ?>

  <div id="portfolio" class="our-portfolio section">
    <div class="portfolio-left-dec">
      <img src="../assets/images/portfolio-left-dec.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h2>เราได้รวบรวม <em>Diary</em> คุณไว้ทั้งหมดแล้ว</h2>
            <span>Read Diary Now</span>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <?php
        ini_set('display_errors', 1);
        error_reporting(~0);
        $strKeyword = null;
        if (isset($_POST["txtKeyword"])) {
          $strKeyword = $_POST["txtKeyword"];
        }
        ?>
        <!-- check database is not NULL -->
        <?php
        //$sql = "SELECT * FROM product WHERE name  LIKE '%".$strKeyword."%' ";
        $sql = "SELECT * FROM `diary_show` WHERE topic LIKE '%" . $strKeyword . "%'";
        $result = mysqli_query($conn, $sql);
        $count = 1;

        if (mysqli_num_rows($result) > 0) {
          // output data of each row
        ?>
          <div class="col-lg-12">
            <div class="owl-carousel owl-portfolio">

              <?php
              while ($row = mysqli_fetch_assoc($result)) {

                // change data new
                $orgDate = $row['data_diary'];
                $newDate = date("d/m/Y", strtotime($orgDate));
              ?>
                <div class="item">
                <div class="section-heading text-center pt-3">
                <h2>ไดอารี่ประจำวันที่ <em><?php echo $newDate; ?></em></h2>
              </div>
                  <div class="thumb">
                    <img src="https://picsum.photos/200/300?random=<?php echo $count; ?>" alt="<?php echo $count; ?>">
                    <div class="hover-effect">
                      <div class="inner-content">
                        <a rel="sponsored" href="https://templatemo.com/tm-564-plot-listing" target="_parent">
                          <h4><?php echo $row['topic']; ?></h4>
                        </a>
                        <span><?php echo $newDate; ?></span>
                      </div>
                    </div>
                  </div>
                </div>
              <?php
                $count++;
              } // end while

              ?>

            </div>
          </div>
        <?php
        } else {
        ?>

          <div class="text-center">ยังไม่มีข้อมูล</div>

        <?php
        }
        mysqli_close($conn);
        ?>
      </div>
    </div>
  </div>

  <?php include '../manage/lower/back_lower.php'; ?>
</body>

</html>