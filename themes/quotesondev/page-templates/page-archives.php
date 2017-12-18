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
		
		<header>
		<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
		</header>
		
			<?php while (have_posts()) : the_post(); ?>

	<div class="archives-container">
		<h2>Quote Authors</h2>

		<ul class="archives-ul"> <?php $posts = get_posts('posts_per_page=200');
		foreach($posts as $post) : setup_postdata($post); ?>

			<li class="archives-li"> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></li>

			<?php endforeach; ?>	
		</ul>
</div>

	<div class="archives-container">
		<ul class="categories-ul">
				<?php wp_list_categories(); ?>
		
		</ul>
</div>

	<div class="archives-container">
		<h2>Tags</h2>
		<ul class="tags-ul">
				<?php wp_tag_cloud();?>
		</ul>
</div>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
