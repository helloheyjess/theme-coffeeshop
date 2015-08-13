<footer class="main-footer">
	<div class="container">
		<div class="footer-top-container">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) ?>
		</div>
	</div>
	<!-- <div class="container">
		<div class="footer-top-container">
			<div class="social-box footer-triplet">
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-instagram"></i></a>
				<a href="#"><i class="fa fa-foursquare"></i></a>
			</div>
			<div class="footer-nav footer-triplet">
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">About</a></li>
					<li><a href="">Blog</a></li>
					<li><a href="">Contact</a></li>
				</ul>
			</div>
			<div class="signup-box footer-triplet">
				<a href="#">
					<p class="signup">Sign up to mailing list</p>
				</a>
			</div>
		</div> --> <!-- /.footer-top-container -->
		<!-- <div class="footer-bottom-container">
			<p>Free shipping on orders over $50 within Canada</p>
		</div>  --><!-- /.footer-bottom-container -->
	<!-- </div> --> <!-- /.container -->
</footer>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>