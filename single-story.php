<?php get_header(); ?>	

	<div id="single_cont">
	
		<div class="single_left">
		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
				</br>
				<br />
				<?php if ( get_post_type() == 'story') {
					printf( '<p>Thuộc truyện: <a href="%s">%s</a></p><br />', get_permalink($post->post_parent), get_the_title($post->post_parent));
					get_dropdown_part($post->post_parent);
				} ?>
				<?php get_dropdown_part(get_the_ID()); ?>
				<br />
				</br>
				<h1 class="single_title"><?php the_title(); ?></h1>
				<div class="single_inside_content">
				<?php get_template_part( the_content(), get_post_format() ); ?>
				</div><!--//single_inside_content-->
				<br /><br />
				<?php comments_template(); ?>
			<?php endwhile; else: ?>
				<h3>Sorry, no posts matched your criteria.</h3>
			<?php endif; ?>                    
	
		</div><!--//single_left-->
		
		<?php get_sidebar(); ?>
		
		<div class="clear"></div>
	
	</div><!--//single_cont-->
	
<?php get_footer(); ?>
