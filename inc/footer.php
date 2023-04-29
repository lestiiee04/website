</div>
<div class="footer">
	<div class="wrapper">
		<div class="section group">
			<div class="col_1_of_4 span_1_of_4">
				<h4>Navigation Bar</h4>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					<li><a href="about.php"><span>About Us</span></a></li>
				</ul>
			</div>
			<div class="col_1_of_4 span_1_of_4">
				<h4>My Account</h4>
				<ul>
					<li><a href="profile.php">Sign in</a></li>
					<li><a href="cart.php">View Cart</a></li>
				</ul>
			</div>
			<div class="col_1_of_4 span_1_of_4">
				<h4>Email Us</h4>
				<ul>
					<li><a href="#">John.lunzaga@urios.edu.ph</a></li>
					<li><a href="#">ronieric.borres@urios.edu.ph</a></li>
					<li><a href="#">rhey.jamili@urios.edu.ph</a></li>
				</ul>
				<div class="social-icons">
					<ul>
						<li class="contact"><a href="#" target="_blank"> </a></li>
						<div class="clear"></div>
					</ul>
				</div>
			</div>
			<div class="col_1_of_4 span_1_of_4">
				<div class="social-icons">
					<h4>Follow Us</h4>
					<ul>
						<li class="facebook"><a href="#" target="_blank"> </a></li>
						<li class="twitter"><a href="#" target="_blank"> </a></li>
						<li class="googleplus"><a href="#" target="_blank"> </a></li>
						<li class="contact"><a href="#" target="_blank"> </a></li>
						<div class="clear"></div>
					</ul>
				</div>
			</div>
		</div>


	</div>
</div>
<script type="text/javascript">
	$(document).ready(function () {
		/*
		var defaults = {
				containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/

		$().UItoTop({ easingType: 'easeOutQuart' });

	});
</script>
<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
<link href="css/flexslider.css" rel='stylesheet' type='text/css' />
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
	$(function () {
		SyntaxHighlighter.all();
	});
	$(window).load(function () {
		$('.flexslider').flexslider({
			animation: "slide",
			start: function (slider) {
				$('body').removeClass('loading');
			}
		});
	});
</script>

</body>

</html>