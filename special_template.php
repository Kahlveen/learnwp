<?php

/*
Template Name: Monkey Layout
Name and description above registers this template with wordpress, so you can choose the page template from wordpress admin page
*/


get_header();

//This is the body of the page, sandwiched between the header.php and footer.php
if (have_posts()) :
	while (have_posts()) : the_post(); ?>

	<article class="post page">
		<h2><?php the_title();?></h2>
	
		<div class="info-box">
			<h4>This is a cool sidebox</h4>
			<p>People completing such an event within the strict event time cutoffs are agreed to be recognized as "Ironmen"; the plural "Ironmans" refers to multiples of "Ironman" as a short form of "Ironman Triathlon." In the triathlon community an Ironman is someone who has completed a race of the appropriate distance, whether or not it falls under the aegis of WTC.</p>
		</div>
	
		<?php the_content();?>	
	
	</article>
	<?php endwhile;

else :
	echo '<p>No content found</p>';

endif;

get_footer();
?>