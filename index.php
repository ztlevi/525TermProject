<?php session_start(); ?>

<!DOCTYPE html>
<html>
  <head>
    <?php include 'includes/head.inc.php'; ?>
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
							<div class="entry">

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
