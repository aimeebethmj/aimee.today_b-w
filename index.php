<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 */
?>
	<?php get_header(); ?>


<!-- 		<div class="container" id="welcomeSection">
	      <div class="row" id="welcomeImage">
	        <div class="twelve columns">
	          <img alt="Drawing of Aimee's studio and photo of Aimee smiling, super happy that you're here!" src="<?php theActiveThemeDirectory(); ?>images/AimeeTodayheaderImage_heart.png">
	          <p>Pep-talks to be brave and<br>take your <b>very next step</b></p>
	        </div>
	      </div>
	    </div> -->




	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

		<div class="container mainBlogFeed">
			<div class="row">
				<!-- <div class="twelve columns h-centred v-centred"> -->
				<div class="twelve columns">

					<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

						<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

						<div class="entry">
							<?php
								$imageID = get_post_thumbnail_id($post->ID);
								$imageURL = wp_get_attachment_url($imageID);
								$imageAlt = get_post_meta($imageID, '_wp_attachment_image_alt', true);
								// $postMeta = get_post_meta($imageID);
					    	?>

					    	<?php // echo '<pre>'; print_r($postMeta); echo '</pre>'; ?>

						 	<img class="u-max-full-width" src="<?php echo $imageURL; ?>" alt="<?php echo $imageAlt; ?>">
							<?php the_content(); ?>
						</div>
						<div class="blogEnd">
							<img src="<?php theActiveThemeDirectory(); ?>images/LOOPY_HR.png">
						</div>
					</article>

				</div>
			</div>
		</div>

		<?php endwhile; ?>

		<!-- pagination -->
		<section class="pagination container h-centred v-centred">
			<div class="previous"><?php next_posts_link('<<  Older '); ?></div>
	 		<div class="next"><?php previous_posts_link(' Newer  >>'); ?></div>
		</section>

	<?php else : ?>

		<?php get_template_part('templates/404'); ?>

	<?php endif; ?>


<?php get_footer(); ?>
