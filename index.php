<?php session_start(); ?>

<!DOCTYPE html>
<html>
  <head>
    <?php include 'includes/head.inc.php'; ?>
    <script src="jquery-3.1.1.min.js"></script>
    <script src="js/animation.js"></script>
  </head>
  <body>
    <!-- header start -->
		<div id="header">
			<div id="menu">
				<?php
          include 'includes/menu.inc.php';
        ?>
			</div>
		</div>
		<div id="logo-wrap">
			<div id="logo">
				<?php
          include 'includes/logo.inc.php';
        ?>
			</div>
		</div>
    <!-- header end -->


		<!-- start page -->
		<div id="page">
			<!-- start content -->
		   <div id="content">
					<div class="post">
							<h1 class="title">Welcome
							<?php
                if (isset($_SESSION['status'])) {
                    echo $_SESSION['unm'].'!';
                } else {
                    echo 'to Book Store!';
                }
              ?>
							</h1>
              <!-- add bookls animation -->
							<div class="entry">
                <table>
                <th>
                  <td style="padding:0 200px 0 100px;"><img id="start_book1" src="upload_image/1445.jpg" alt="book_image" style="width:150px;height:200px;position: relative;"></td>
                  <td><img id="start_book2" alt="book_image" src="upload_image/yoga1.jpg" style="width:150px;height:200px;position: relative;"></td>
                </th>
              </table>
							</div>
              <div class="entry">
                <table>
                <th>
                  <td style="padding:0 200px 0 100px;"><img id="end_book1" alt="book_image" src="upload_image/9062999.jpg" style="width:150px;height:200px;position: relative;margin-top: 150px"></td>
                  <td><img id="end_book2" alt="book_image" src="upload_image/terr2.jpg" style="width:150px;height:200px;position: relative;margin-top: 150px"></td>
                </th>
              </table>
							</div>
						</div>

					</div>
					<!-- end content -->

					<!-- start sidebar -->
					<div id="sidebar">
							<?php
                include 'includes/sidebar.inc.php';
              ?>
					</div>
					<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->

			<!-- start footer -->
				<div id="footer">
							<?php
                include 'includes/footer.inc.php';
              ?>

				</div>
			<!-- end footer -->
</body>
</html>
