<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage UT-TheHill
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
		<div id="content" class="site-content<?php
              if (is_front_page()){  
              $settings = get_option( 'ut_options', $ut_options );
              if (($settings['homepage_head'] == false) && is_front_page()) { ?> home-margin<?php } }else{   } ?>" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php utthehill_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>


		</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>