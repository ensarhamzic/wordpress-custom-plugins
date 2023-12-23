<?php
/**
 * Plugin Name: Woohome
 * Plugin URI: https://woohome.com/
 * Description: Very beautiful slider for your website.
 * Version: 1.0.0
 * Author: Ensar Hamzic
 * Author URI: https://ensarhamzic.com
 * Text Domain: ensarhamzic
 * Requires at least: 6.3
 * Requires PHP: 7.4
 *
 * @package Woohome
 */

  if (!function_exists('add_action')) {
    echo 'Hi there! I\'m just a plugin, not much I can do when called directly.';
    exit;
}

function woohome_scripts() {
  $plugin_directory_url = plugin_dir_url( __FILE__ );
  wp_enqueue_style('woohome-styles', $plugin_directory_url . '/inc/style.css', array(), '', 'all');
}

add_action( 'wp_enqueue_scripts', 'woohome_scripts' );

function woohome_customizer($wp_customize) {
  	/*--------------------------------------------------------------------------------*/
	// Home Page Settings
	$wp_customize->add_section(
		'sec_home_page', array(
			'title'			=> 'Woohome Settings',
			'description'	=> 'Home Page Section'
		)
	);	

			// Field 1 - Popular Products Title
			$wp_customize->add_setting(
				'set_popular_title', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_popular_title', array(
					'label' 		=> 'Popular Products Title',
					'description' 	=> 'Popular Products Title',
					'section' 		=> 'sec_home_page',
					'type' 			=> 'text'
				)
			);

			// Field 2 - Popular Products Limit
			$wp_customize->add_setting(
				'set_popular_max_num', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_popular_max_num', array(
					'label'			=> 'Popular Products Max Number',
					'description'	=> 'Popular Products Max Number',
					'section'		=> 'sec_home_page',
					'type'			=> 'number'
				)
			);

			// Field 3 - Popular Products Columns
			$wp_customize->add_setting(
				'set_popular_max_col', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_popular_max_col', array(
					'label'			=> 'Popular Products Max Columns',
					'description'	=> 'Popular Products Max Columns',
					'section'		=> 'sec_home_page',
					'type'			=> 'number'
				)
			);


			/*---------------------------------------------------------------------------------------*/
			// Field 4 - New Arrivals Title
			$wp_customize->add_setting(
				'set_new_arrivals_title', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_new_arrivals_title', array(
					'label' 		=> 'New Arrivals Title',
					'description' 	=> 'New Arrivals Title',
					'section' 		=> 'sec_home_page',
					'type' 			=> 'text'
				)
			);

			// Field 5 - New Arrivals Limit
			$wp_customize->add_setting(
				'set_new_arrivals_max_num', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_new_arrivals_max_num', array(
					'label'			=> 'New Arrivals Max Number',
					'description'	=> 'New Arrivals Max Number',
					'section'		=> 'sec_home_page',
					'type'			=> 'number'
				)
			);

			// Field 6 - New Arrivals Columns
			$wp_customize->add_setting(
				'set_new_arrivals_max_col', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_new_arrivals_max_col', array(
					'label'			=> 'New Arrivals Max Columns',
					'description'	=> 'New Arrivals Max Columns',
					'section'		=> 'sec_home_page',
					'type'			=> 'number'
				)
			);


			/*---------------------------------------------------------------------------------------*/
			// Field 7 - Deal of the Week Title
			$wp_customize->add_setting(
				'set_deal_title', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_deal_title', array(
					'label' 		=> 'Deal of the Week Title',
					'description' 	=> 'Deal of the Week Title',
					'section' 		=> 'sec_home_page',
					'type' 			=> 'text'
				)
			);

			// Field 8 - Deal of the Week Checkbox
			$wp_customize->add_setting(
				'set_deal_show', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'fancy_lab_sanitize_checkbox'
				)
			);

			$wp_customize->add_control(
				'set_deal_show', array(
					'label'			=> 'Show Deal of the Week?',
					'section'		=> 'sec_home_page',
					'type'			=> 'checkbox'
				)
			);

			// Field 9 - Deal of the Week Product ID
			$wp_customize->add_setting(
				'set_deal', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_deal', array(
					'label'			=> 'Deal of the Week Product ID',
					'description'	=> 'Product ID to Display',
					'section'		=> 'sec_home_page',
					'type'			=> 'number'
				)
			);	

      /*---------------------------------------------------------------------------------------*/
			// Field 10 - Blog Title
			$wp_customize->add_setting(
				'set_blog_title', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_blog_title', array(
					'label' 		=> 'Blog Section Title',
					'description' 	=> 'Blog Section Title',
					'section' 		=> 'sec_home_page',
					'type' 			=> 'text'
				)
			);
}

add_action('customize_register', 'woohome_customizer');



function woohome_shortcode_fn($attributes) {
  ob_start();
				/*----------------------------------------------------------------------------------------------*/
				// We'll only show these sections if WooCommerce is ative
				if( class_exists( 'WooCommerce' ) ): 
				?>

						<section class="popular-products">
							<?php 

							// Getting data from Customizer to display the Popular Products section
							$popular_limit		= get_theme_mod( 'set_popular_max_num', 4 );
							$popular_col 		= get_theme_mod( 'set_popular_max_col', 4 );
							$arrivals_limit		= get_theme_mod( 'set_new_arrivals_max_num', 4 );
							$arrivals_col		= get_theme_mod( 'set_new_arrivals_max_col', 4 );

							?>
							<div class="container">
								<div class="section-title">
									<h2><?php echo get_theme_mod( 'set_popular_title', 'Popular products' ); ?></h2>
								</div>
								<?php echo do_shortcode( '[products limit=" ' . $popular_limit . ' " columns=" ' . $popular_col . ' " orderby="popularity"]' ); ?>
							</div>
						</section>
						<section class="new-arrivals">
							<div class="container">
								<div class="section-title">
									<h2><?php echo get_theme_mod( 'set_new_arrivals_title', 'New Arrivals' ); ?></h2>
								</div>
								<?php echo do_shortcode( '[products limit=" ' . $arrivals_limit . ' " columns=" ' . $arrivals_col . ' " orderby="date"]' ); ?>
							</div>
						</section>
						<?php 

						// Getting data from Customizer to display the Deal of the Week section
						$showdeal			= get_theme_mod( 'set_deal_show', 0 );
						$deal 				= get_theme_mod( 'set_deal' );
						$currency			= get_woocommerce_currency_symbol();
						$regular			= get_post_meta( $deal, '_regular_price', true );
						$sale 				= get_post_meta( $deal, '_sale_price', true );

						// We'll only show this section if the user chooses to do so and if some deal product is set
						if( $showdeal == 1 && ( !empty( $deal ) ) ):
							$discount_percentage = absint( 100 - ( ( $sale/$regular ) * 100 ) );
						?>
						<section class="deal-of-the-week">
							<div class="container">
								<div class="section-title">
									<h2><?php echo get_theme_mod( 'set_deal_title', 'Deal of the Week' ); ?></h2>
								</div>
								<div class="row d-flex align-items-center">
									<div class="deal-img col-md-6 col-12 ml-auto text-center">
										<?php echo get_the_post_thumbnail( $deal, 'large', array( 'class' => 'img-fluid' ) ); ?>
									</div>
									<div class="deal-desc col-md-4 col-12 mr-auto text-center">
										<?php if( !empty( $sale ) ): ?>
											<span class="discount">
												<?php echo $discount_percentage . '% OFF'; ?>
											</span>
										<?php endif; ?>
										<h3>
											<a href="<?php echo get_permalink( $deal ); ?>"><?php echo get_the_title( $deal ); ?></a>
										</h3>
										<p><?php echo get_the_excerpt( $deal ); ?></p>
										<div class="prices">
											<span class="regular">
												<?php 
												echo $currency;
												echo $regular;
												?>
											</span>
											<?php if( !empty( $sale ) ): ?>
												<span class="sale">
													<?php 
													echo $currency;
													echo $sale;
													?>										
												</span>
											<?php endif; ?>
										</div>
										<a href="<?php echo esc_url( '?add-to-cart=' . $deal ); ?>" class="add-to-cart">Add to Cart</a>
									</div>
								</div>
							</div>
						</section>
						<?php endif; ?><!-- End $showdeal/$deal verification -->
						
				<?php endif; ?>
				<!---------------------------------------------------------------------------------------------->
				<!-- End class_exists for WooCommerce -->

				<section class="lab-blog">
					<div class="container">
						<div class="section-title">
							<h2><?php echo get_theme_mod( 'set_blog_title', 'News From Our Blog' ); ?></h2>
						</div>						
						<div class="row">
							<?php 

							$args = array(
								'post_type'			=> 'post',
								'posts_per_page'	=> 2,
							);

							$blog_posts = new WP_Query( $args );

								// If there are any posts
								if( $blog_posts->have_posts() ):

									// Load posts loop
									while( $blog_posts->have_posts() ): $blog_posts->the_post();
										?>
											<article class="col-12 col-md-6">
												<a href="<?php the_permalink(); ?>">
													<?php 
														if( has_post_thumbnail() ):
															the_post_thumbnail( 'fancy-lab-blog', array( 'class' => 'img-fluid' ) );
														endif;
													?>
												</a>
												<h3>
													<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
												</h3>
												<div class="excerpt"><?php the_excerpt(); ?></div>
											</article>
										<?php
									endwhile;
									wp_reset_postdata();
								else:
							?>
								<p>Nothing to display.</p>
							<?php endif; ?>
						</div>
					</div>
				</section>
			</main>
		</div>
  <?php
  return ob_get_clean();

}

add_shortcode('woohome', 'woohome_shortcode_fn');

?>