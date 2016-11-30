<ul>
			<li class="current_page_item"><a href="index.php">Home</a></li>
			<li class="last"><a href="contact.php">Contact</a></li>
			<li class="last"><a href="aboutus.php">About Us</a></li>
			<li><a href="viewcart.php">View Cart</a></li>

      <!-- add a Logout item if there is a user signed in. Otherwise it's Register. -->
			<?php
					if(isset($_SESSION['status']))
					{
						echo '<li><a href="logout.php">Logout</a></li>';
					}
					else
					{
						echo '<li><a href="register.php">Register</a></li>';
					}
			?>

</ul>
