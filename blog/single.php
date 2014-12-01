<?php get_header(); ?>

<!-- POST CONTENT -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- HEADER & SIDE NAV -->
			<div class="header-details">
				<div class="line cf">
					<!-- SIDE NAVIGATION -->
					
					<?php 
						$category = get_the_category(); 
						if($category[0]){
							$category_url = get_category_link($category[0]->term_id );
							$category_name = $category[0]->cat_name;
						}
					?>
					

						<div class="navigation-side">
							<div class="side-menu">
								<div class="unit size1of6">
									<ul class="cf">
										<li>PUBLISHED IN </li> <a href="<?php echo $category_url; ?>"><?php echo $category_name; ?></a>
										<li>AUTHOR </li> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta( 'display_name' ); ?></a> 
										<?php the_tags('<li>TAGS</li>', ', '); ?> 
										<?php edit_post_link( 'Edit this story', '<li>ADMINISTRATION</li>' ); ?> 
									</ul>
								</div>
							</div>
						</div>

					<!-- END SIDE NAVIGATION -->
					<!-- FEATURED ARTICLE -->

					<div class="feautered t-center">
						<div class="lastUnit size4of6">
							<!--  <a href="article.html">  -->
							<a href="<?php the_permalink(); ?>">
								<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
								<img src="<?php echo $feat_image; ?>" alt="" />
							</a>
								<div class="description">
									<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><small><?php the_author_meta( 'display_name' ); ?></small></a> 
									<a href="<?php the_permalink(); ?>">
										<h1><?php the_title(); ?></h2>
										<h3><?php echo get_the_excerpt(); ?></h3>
									</a>
								</div>
							<!--  </a> -->
						</div>
					</div>

					<!-- END FEATURED ARTICLE -->

				</div>
			</div>
		<!-- END HEADER & SIDE NAV -->
		<!-- STARTING BODY -->
			<div class="article-paragraph">
				<div class="line cf">
					<div class="unit size1of6"><div class="fill"></div>
				</div>
				<div class="unit size4of6">
					<?php the_content(); ?>
				</div>
				<div class="lastUnit size1f6"><div class="fill"></div> </div>
				</div>

			</div>
		<!-- END BODY -->
	</div><!-- END MAIN-BOX -->
	<!-- PROFILE & BOTTOM INFO -->

	<div class="profile-info">
		<div class="line cf">
			<div class="unit size1of6">
				<div class="fill"></div>
			</div>
			<div class="unit size4of6">
	  			<div class="info a-center">
					<div class="division-line"></div>
					<div class="profile-pic a-center">
						<?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?>
					</div>
					<a href="">
						<small>ABOUT THE AUTHOR</small>
						<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><h2><?php the_author_meta( 'display_name' ); ?></h2></a> 
						<h3 class="reduced"><?php echo get_the_author_meta( 'description' ); ?> </h3>
					</a>
					<div class="division-line"></div>
				</div>

				<div class="following a-center cf">
					<small>Read more</small>
					<h2><a href="<?php echo $category_url; ?>"><?php echo $category_name; ?></a></h2>
					<?php the_tags('<h2>', ', ', '</h2>'); ?> 
				</div>

				<div class="unit size1of6">
					<div class="fill"></div>
				</div>
			</div>
		</div>
	</div>


	<!-- END PROFILE & BOTTOM INFO -->
	<?php endwhile; endif; ?>
<!-- END POST CONTENT -->	

<?php get_footer(); ?>