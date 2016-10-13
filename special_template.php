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
	<!-- div container -->
		<div class="column-container clearfix">
		
			<div class="title-column">
				<h2><?php the_title();?></h2>
				<h3>The monkey!</h3>		
			</div>

			<div class="text-column">
				<?php the_content();?>
			</div>
		
		</div> <!-- column-container -->
	</article>
	<?php endwhile;

else :
	echo '<p>No content found</p>';

endif;

get_footer();
?>