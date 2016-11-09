<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kostech
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!-- Start Homepage Content -->
			<section class="main-banner">
				<div class="motto">
					<img src="<?php echo(get_template_directory_uri()); ?>//images/top-block.png">
					<h1>MELBOURNE'S BEST<br>
					<span class="blue-text">PLASTERING</span> CONTRACTORS</h1>
					<img src="<?php echo(get_template_directory_uri()); ?>/images/bottom-block.png">		
				</div>
				<div class="find-out">
					<p>Donec imperdiet suscipit purus, sed</p>
					<p>semper orci viverra sit amet.</p>
					<button>FIND OUT HOW</button>
				</div>
			</section>

			<section id="about-us">
				<div class="wrapper clearfix">
					<div class="about-header">
						<h2>ABOUT US</h2>
					</div>
					<div class="about-col1">
						<p><strong> KOSTECH is a leading provider of commercial plastering services. We’ve delivered domestic and commercial fitouts for over 17 years across the whole of Melbourne.</strong></p>
						<p>As sub-contractors, we’ve been involved in projects of all sizes and budgets. We’ve worked with prominent industry developers on some of Melbourne’s biggest commercial projects.</p>
						<p>KOSTECH offers a complete range of commercial plastering services including:</p>			
						<ul>
							<li>Suspended ceilings</li>
							<li>Metal stud and track systems</li>
							<li>Insulation</li>
							<li>Fire rated systems</li>
							<li>Plasterboard linings</li>
							<li>Walls and partitioning</li>
						</ul>
					</div>
					<div class="about-col2">
						<h3 class="blue-text">OUR STORY</h3>
						<p>KOSTECH was founded in 1999 when Kosie Touretsoglou decided to follow in his father’s footsteps as a domestic plasterer. He’s an active part of every project and ensures your project is finished to a high standard.</p>
						<p>KOSTECH has been grown through hard work, determination and devotion. From domestic plastering to commercial, we have has a consistent track record of planning and executing projects for private and public organisations. We pride ourselves on delivering quality workmanship that lasts.</p>
						<hr>
						<h2>Developers can <span class="blue-text">submit a tender package</span> directly to KOSTECH.<br>
						We’d be pleased to provide a quote for your next project.</h2>
						<hr>
					</div>
				</div>
			</section>

			<section id="culture">
				<div class="wrapper">
					<div class="culture-header">
					<h3>BUILT ON A CULTURE OF<br><span class="blue-text">COLLABORATION</span> AND <span class="blue-text">KNOW HOW</span></h3>
					</div>
						<table>
							<tr>
								<th>DIVERSE INDUSTRY EXPERIENCE</th>
								<td>We’ve been involved in a diverse range of new, repair and renovation projects. We’ve provided professional plastering services for office spaces, retail ventures, restaurants, childcare centres and apartment facilities.</td>
							</tr>
							<tr>
								<th>QUALITY YOU CAN TRUST</th>
								<td>At KOSTECH, we go above and beyond to deliver a superior result on your project.</td>
							</tr>
							<tr>
								<th>OUR COMMITMENT</th>
								<td>We’re committed to ensuring your project is on schedule and on budget, without compromising on quality.</td>
							</tr>
						</table>
				</div>	
			</section>

			<section class="latest-news">
				<div class="gallery clearfix">
					<h2>LATEST NEWS</h2>
					<div>
						<table>
							<tr>
								<th>Nullam vulputate consequat</th>
								<th>Fusce at magna neque</th>
								<th>Curabitur sollicitudin estum molestie neque</th>
							</tr>
							<tr>
								<td><img class="news-image" src="<?php echo(get_template_directory_uri()); ?>/images/bg-news1.png"></td>
								<td><img class="news-image" src="<?php echo(get_template_directory_uri()); ?>/images/bg-news2.png"></td>
								<td><img class="news-image" src="<?php echo(get_template_directory_uri()); ?>/images/bg-news3.png"></td>
							</tr>
							<tr>
								<td>Vivamus placerat purus libero, et cursus mi egestas nec. Nullam vulputate consequat ligula nec iaculis. Nulla facilisi. Curabitur sollicitudin molestie neque, in tristique justo fringilla sit amet.</td>
								<td>Cras a accumsan mi. Donec imperdiet suscipit purus, sed semper orci viverra sit amet. Vivamus placerat purus libero, et cursus mi egestas nec. Nullam vulputate consequat ligula nec iaculis.</td>
								<td>Mauris dui ante, suscipit vel sem nec, congue finibus nisi. Phasellus ac nulla risus. Pellentesque in felis in tortor varius blandit eu quis orci.</td>
							</tr>
							<tr>
								<td><p class="read">Read More <img src="<?php echo(get_template_directory_uri()); ?>/images/arrow-read-more.png"></p></td>
								<td><p class="read">Read More <img src="<?php echo(get_template_directory_uri()); ?>/images/arrow-read-more.png"></p></td>
								<td><p class="read">Read More <img src="<?php echo(get_template_directory_uri()); ?>/images/arrow-read-more.png"></p></td>
							</tr>
						</table>
					</div>
				</div>		
			</section>

			<section id="contact">
				<div class="wrapper">
					<h2>CONTACT US</h2>
					<div class="contact-info">
						<p><img class="icon" src="<?php echo(get_template_directory_uri()); ?>/images/phone-contact.png">123-456-7890</p>
						<p><img class="icon" src="<?php echo(get_template_directory_uri()); ?>/images/pin.png">412 Stone Way<br>
						Melbourne</p>
						<a href=""><img class="social" src="<?php echo(get_template_directory_uri()); ?>/images/linkedin.png"></a>
					</div>
					<h3 class="blue-text">LEAVE US A MESSAGE</h3>

					<?php echo do_shortcode( '[contact-form-7 id="15" title="Contact Us"]' ); ?>

				</div>
			</section>

			<section class="map">
				<div>
					<a href="" class="blue-text">View larger map</a>
				</div>
			</section>
			<!-- End Homepage Content -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
