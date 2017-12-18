<?php
/**
 * 
 * Template Name: Archives
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
			<?php while (have_posts()) : the_post(); ?>

	<section class="archives-container">
		<h2>Quote Authors</h2>

		<ul class="archives-ul"> <?php $posts = get_posts('posts_per_page=200');
		foreach($posts as $post) : setup_postdata($post); ?>

			<li class="archives-li"> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></li>

			<?php endforeach; ?>	
		</ul>
	</section>

	<section class="archives-container">
		<ul class="categories-ul">
				<?php wp_list_categories(); ?>
		
		</ul>
	</section>

	<section class="archives-container">
		<h2>Tags</h2>
		<ul class="tags-ul">
				<?php wp_tag_cloud();?>
		</ul>
	</section>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>