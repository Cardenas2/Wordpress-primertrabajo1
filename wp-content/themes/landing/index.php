<?php get_header(); ?>

<!--icio The loop de miedo-->
<div class="container">
<?php  if(have_posts()):?>
	<?php while(have_posts()): ?>
		<?php the_post(); ?>
		<div class="post">
			<h1 class="post__title"><?php the_title(); ?></h1>
			<p class="post__content"><?php the_content(); ?></p>
			
		</div>
	<?php endwhile; ?>
<?php endif; ?>
<!--fin the loop de miedo -->

</div><!--fin container-->

	
	<?php get_footer(); ?>