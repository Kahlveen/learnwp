<?php

get_header();

//This is the body of the page, sandwiched between the header.php and footer.php
if (have_posts()) :
	while (have_posts()) : the_post(); ?>

	<article class="post">
		<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
		<?php the_content();?>
	</article>
	<?php endwhile;

else :
	echo '<p>No content found</p>';

endif;

get_footer();
?>