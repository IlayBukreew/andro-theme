
<?php get_header( )?>
<div class="projects">

		<section class="first-projects">
			<div class="container">
				<div class="row pad-top padTop425">
						<div class="col-md-6">	
							<h2>All projects</h2>
						</div>
						<div class="col-md-6 col-9 hov text-right">
							<p>Check out my <a href="<?php echo get_theme_mod('ads_code')?>">latest projects on Dribbble.</a></p>
						</div>
					</div>
				</div>
		</section>
		<section class="three two-projects">

			<div class="container reverse ">


<?php
				$args = array( 'posts_per_page' => -1, 'orderby' => 'modified', 'order' => 'ASC');
				$query = new WP_Query( $args );
				while ( $query->have_posts() ) :	$query->the_post(); 
			?>
			<?php 
			$number = $i++; 
				if ($number==0): ?>
						<div class="row tpad1">
				<?php else: ?>
					<div class="row"> 
				
			<?php endif; ?>
	
				<div class="col-md-12 col-lg-7 col-xl-6">
					<!-- Past porfolio item here -->
					<div class="portfolio-item"  style="<?php if($value = get_post_meta( $post->ID, 'linear gradient', true )){echo $value. '';}; ?>">
						<img 
						src="<?php $thumb_id = get_post_thumbnail_id();
						$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
						echo $thumb_url[0]; ?>"  alt=""
					>
					</div>
					<!-- Past porfolio item here -->
				</div>
	
						<?php if($value = get_post_meta( $post->ID, 'coming soon', true )): ?>
							<div class="col-md-12 col-lg-5 col-xl-6 coming "> 
								<?php else: ?>
<div class="col-md-12 col-lg-5 col-xl-6 hov "> 
								<?php endif; ?>

					<div>
							<?php $link_post = get_the_permalink(); if($value = get_post_meta( $post->ID, 'coming soon', true )): ?>
								<h4><?php the_title(); ?></h4>
								<?php else: ?>
									<a <?php echo "href='$link_post'"; ?> >
							<h4><?php the_title(); ?></h4>
						</a>
						<?php endif; ?>
						<?php the_excerpt(); ?>

						

<?php $link_post = get_the_permalink(); if($value = get_post_meta( $post->ID, 'coming soon', true )): ?>
								<span>Coming soon</span>
								<?php else: ?>
									<a <?php echo "href='$link_post'"; ?> >
							<span>
								Read more
								<svg width="22px" height="14px" viewBox="0 0 22 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<!-- Generator: sketchtool 51.2 (57519) - http://www.bohemiancoding.com/sketch -->
									<defs></defs>
									<g id="Website---Gilroy-font" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<g id="Homepage---Gilroy" transform="translate(-947.000000, -4170.000000)" fill="#3E77F6">
											<g id="Project_right-Copy-2" transform="translate(264.000000, 3937.000000)">
												<g id="Group-5" transform="translate(550.000000, 232.000000)">
													<path d="M143.801455,18.7966102 C144.059658,18.7755221 144.36494,18.6791238 144.530502,18.5435646 L150.362878,13.916446 C150.880794,13.4660731 150.926364,12.7626739 150.54514,12.2897053 C150.163917,11.8167367 149.381698,11.7309036 148.904765,12.1089585 L144.967911,15.2298729 L144.967911,-1.63983051 C144.967911,-2.27845 144.445407,-2.79661017 143.801435,-2.79661017 C143.157463,-2.79661017 142.63496,-2.27845 142.63496,-1.63983051 L142.63496,15.2298729 L138.698105,12.1089585 C138.221173,11.7308959 137.457209,11.8303057 137.05773,12.2897053 C136.623335,12.7882773 136.763075,13.5383718 137.239992,13.916446 L143.072369,18.5435646 C143.313864,18.7393727 143.491561,18.7935987 143.801416,18.7966102 L143.801455,18.7966102 Z"
													 id="arrow_icon" transform="translate(143.796610, 8.000000) scale(-1, 1) rotate(90.000000) translate(-143.796610, -8.000000) "></path>
												</g>
											</g>
										</g>
									</g>
								</svg>
							</span>
						</a>
						<?php endif; ?>

					</div>
				</div>
			</div>
<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>	

					
			</div>


			</section>

</div>



<?php get_footer( )?>