<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kostech
 */

?>

	</div><!-- #content -->

	<footer>
		<div class="wrapper">
			<ul class="clearfix">
				<li id="left-foot">Copyright @ 2016 <strong>KOSTECH</strong> All rights reserved</li>
				<li id="right-foot">Terms & Conditions  Privacy Policy</li>
			</ul>
		</div><!-- .wrapper -->
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript">
	(function($) {
		$(document).ready(function() {

			// Open mobile menu on button click
			$('#menu-toggle').click(function (e) {
				$('#menu').toggleClass('open');
				e.preventDefault();
		    });

			// Close mobile menu on item click
		    $('#menu > li').click(function () {
				$('#menu').toggleClass('open');
		    });

		    // Smooth scroll on menu item click
		    $('a[href^="#"]').on('click', function(event) {
				var target = $(this.getAttribute('href'));
				if( target.length ) {
				    event.preventDefault();
				    $('html, body').stop().animate({
				        scrollTop: target.offset().top
				    }, 1000);
				}
			});

		    // Tidy up mobile menu when resizing
			$(window).resize(function() {
			    if($( window ).width() >= "767") {
			        if($("#menu").hasClass("open")) {
			            $("#menu").toggleClass("open");
			        }
			    }
			});
    
		});
	}(jQuery));

</script>

</body>
</html>
