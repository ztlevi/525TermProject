<?php session_start();
require('includes/config.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>
</head>

<body>
			<!-- start header -->
					<div id="header">
						<div id="menu">
							<?php
								include("includes/menu.inc.php");
							?>
						</div>
					</div>

					<div id="logo-wrap">
						<div id="logo">
								<?php
									include("includes/logo.inc.php");
								?>
						</div>
					</div>
			<!-- end header -->

			<!-- start page -->

					<div id="page">
						<!-- start content -->
							<div id="content">
								<div class="post">
									<h1 class="title">Contact us</h1>

									<div class="entry" >
									<p>Feel free to contact us.</p>
									Ting Zhou:<br>
									Phone number: 3136863550<br>
									Email: ztlevi1993@gmail.com<br><br>
									Qianyi Wang:<br>
									Phone number: 3136380049<br>
									Email: qianyiw@umich.edu

									</div>

								</div>

							</div>
						<!-- end content -->

						<!-- start sidebar -->
						<div id="sidebar">
								<?php
									include("includes/sidebar.inc.php");
								?>
						</div>
						<!-- end sidebar -->

						<div style="clear: both;">&nbsp;</div>
					</div>
			<!-- end page -->

			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>
