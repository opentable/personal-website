<?php get_header(); ?>

	<?php if ( !is_paged() ): ?>
	<!-- FEATURED ARTICLE -->

		<div class="featured">
			<div class="line cf t-center">
				<div class="lastUnit size4of6 a-center ">
					<?php query_posts('showposts=1&cat=37');
						if(have_posts()) : while(have_posts()) : the_post(); ?>
					
							<a href="<?php the_permalink(); ?>">
								<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
								<img src="<?php echo $feat_image; ?>" alt="" />
							</a>
							<div class="description">
								<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><small><?php the_author_meta( 'display_name' ); ?></small></a>
								<a href="<?php the_permalink(); ?>">
									<h1><?php the_title(); ?></h1>
									<h3><?php echo get_the_excerpt(); ?></h3>
								</a>
							</div>

					<?php endwhile; endif; ?>
					
				</div>
			</div>
		</div>

	<!-- END FEATURED ARTICLE -->
	<?php endif; ?>
 
	<!-- HOME PAGE ARTICLES -->
	
		<!-- WP ARTICLES -->
			<?php
				wp_reset_query();
				if (is_home()) {
					query_posts("cat=-37");
				}
			?>
			
			<?php
				$count = 0;
				if ( have_posts() ) : while( have_posts() ) : the_post();
					$count++;
			?>
				
				<!-- Post <?php echo $count; ?> -->
				<?php if ($count == 1 || $count == 4) : ?>
					<div class="article-row">
						<div class="line cf">
							
							<div class="article">
								<div class="unit size2of6">
								    <a href="<?php the_permalink(); ?>">
										<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
										<img src="<?php echo $feat_image; ?>" alt="" />
									</a>
									<div class="description">
										
										<?php 
											$category = get_the_category(); 
											if($category[0]){
												$category_url = get_category_link($category[0]->term_id );
												$category_name = $category[0]->cat_name;
											}
										?>
										
										<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><small><?php the_author_meta( 'display_name' ); ?></small></a> - <a href="<?php echo $category_url; ?>"><small><?php echo $category_name; ?></small></a>
										<a href="<?php the_permalink(); ?>">
											<h2><?php the_title(); ?></h2>
											<h3><?php echo get_the_excerpt(); ?></h3>
										</a>
									</div>
							 	</div>
							</div>
							
				<?php elseif ($count == 2 || $count == 5) :?>
							<div class="article">
								<div class="unit size2of6">
								    <a href="<?php the_permalink(); ?>">
										<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
										<img src="<?php echo $feat_image; ?>" alt="" />
									</a>
									<div class="description">
										
										<?php 
											$category = get_the_category(); 
											if($category[0]){
												$category_url = get_category_link($category[0]->term_id );
												$category_name = $category[0]->cat_name;
											}
										?>
										
										<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><small><?php the_author_meta( 'display_name' ); ?></small></a> - <a href="<?php echo $category_url; ?>"><small><?php echo $category_name; ?></small></a>
										<a href="<?php the_permalink(); ?>">
											<h2><?php the_title(); ?></h2>
											<h3><?php echo get_the_excerpt(); ?></h3>
										</a>
									</div>
							 	</div>
							</div>
							
				<?php else : ?>
							<div class="article lastmobo">
								<div class="unit size2of6">
								    <a href="<?php the_permalink(); ?>">
										<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
										<img src="<?php echo $feat_image; ?>" alt="" />
									</a>
									<div class="description">
										
										<?php 
											$category = get_the_category(); 
											if($category[0]){
												$category_url = get_category_link($category[0]->term_id );
												$category_name = $category[0]->cat_name;
											}
										?>
										
										<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><small><?php the_author_meta( 'display_name' ); ?></small></a> - <a href="<?php echo $category_url; ?>"><small><?php echo $category_name; ?></small></a>
										<a href="<?php the_permalink(); ?>">
											<h2><?php the_title(); ?></h2>
											<h3><?php echo get_the_excerpt(); ?></h3>
										</a>
									</div>
							 	</div>
							</div>
						</div>
					</div>
				<?php endif; ?>
			
			
			<?php endwhile; ?>
			
				<!-- Pagination -->
				<div class="pagination t-center">
					<div class="line cf">
						<div class="unit size6of6 a-center">	
							<?php wp_paginate(); ?>
						</div>
					</div>
				</div>
				
			
			<?php endif; ?>
		
		<!-- END WP ARTICLES -->
	
	<!-- END HOME PAGE ARTICLES -->

	
	<?php get_footer(); ?>