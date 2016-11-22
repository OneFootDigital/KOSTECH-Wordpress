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

			$('#menu-toggle').click(function (e) {
				$('#menu').toggleClass('open');
				e.preventDefault();
		    });

		    $('#menu > li').click(function () {
				$('#menu').toggleClass('open');
		    });

		    $('a[href^="#"]').on('click', function(event) {
				var target = $(this.getAttribute('href'));
				if( target.length ) {
				    event.preventDefault();
				    $('html, body').stop().animate({
				        scrollTop: target.offset().top
				    }, 1000);
				}
			});
    
		});
	}(jQuery));

</script>

</body>
</html>
