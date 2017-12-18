<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

$source = get_post_meta(get_the_ID(), '_qod_quote_source', true);
$source_url = get_post_meta(get_the_ID(), '_qod_quote_source_url');

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- <header class="entry-header">
		<?php
		// the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header> -->

<div class="entry-content">

<?php the_content(); ?>

</div>

<div class="entry-meta">
	<?php the_title('<h2 class="entry-title">&mdash;', '</h2>');?>

	<?php if ($source && $source_url):?>
	<span class="source">, &nbsp;<a href="<?php echo $source_url; ?>"><?php echo $source; ?></a></span>

	<?php elseif($source):?>
	<span class="source">, <?php echo $source; ?></span>

		<?php else : ?>
<span class="source"></span>
<?php endif; ?>

</div>
	

</article><!-- #post-## -->

<?php if(is_home() || is_single()): ?>
	<button type="button" id="new-quote-button">Show me another!</button>
<?php endif; ?>