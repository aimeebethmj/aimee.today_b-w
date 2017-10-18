<?php
/*
Template Name: Post Page
Template Post Type: post
*/
?>

<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<?php
				// vars
				$heading = get_field('main_heading');
				$blogHeading = get_field('blog_heading');
			?>


    <!-- MAIN IMAGE -->
    <?php 
      $imageURL = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
    ?>

      <!-- <div class="container">
        <div class="row">
          <img class="u-max-full-width" src="<?php echo $imageURL; ?>">
        </div>
      </div> -->

    <!-- DETAIL -->
      


		<div class="container mainBlogFeed">
			<div class="row">
				<!-- <div class="twelve columns h-centred v-centred"> -->
				<div class="twelve columns">
					
					<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<h1><?php echo get_the_title(); ?></h1>

						<div class="entry">
								<!-- <img class="u-max-full-width" src="<?php echo $imageURL; ?>">  -->
							 	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
									<div class="post-thumbnail">
										<a href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
										</a>
									</div><!-- .post-thumbnail -->
								<?php endif; ?>

							<?php the_content(); ?>
						</div>
						<div class="entry">
							<div class="relatedposts">
								<h3>You might also like...</h3>
								<?php
								  $orig_post = $post;
								  global $post;
								  $tags = wp_get_post_tags($post->ID);
								   
								  if ($tags) {
								  $tag_ids = array();
								  foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
								  $args=array(
								  'tag__in' => $tag_ids,
								  'post__not_in' => array($post->ID),
								  'posts_per_page'=>3, // Number of related posts to display.
								  'caller_get_posts'=>1
								  );
								   
								  $my_query = new wp_query( $args );
								 
								  while( $my_query->have_posts() ) {
								  $my_query->the_post();
								  ?>
								   
								  <div class="relatedthumb">
								    <a rel="external" href="<? the_permalink()?>"><?php the_post_thumbnail(array(200,250)); ?><br />
								    <?php the_title(); ?>
								    </a>
								  </div>
								   
								  <? }
								  }
								  $post = $orig_post;
								  wp_reset_query();
								  ?>
							</div>

						
							<?php
								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
							 ?>

						</div>


						

					</article>

				</div>
			</div>
		</div>




		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part('templates/404'); ?>

	<?php endif; ?>

<?php get_footer(); ?>