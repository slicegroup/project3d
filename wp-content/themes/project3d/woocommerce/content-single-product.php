<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="fullpage">
	<div class="project-product-details section"  id="section0">
		<div class="container detailss " >
		 <div class="row">
			<div class="col-md-6 product-project" >		
        <?php
        /**
         * Hook: woocommerce_single_product_summary.
        *
        * @hooked woocommerce_template_single_title - 5
        * @hooked woocommerce_template_single_rating - 10
        * @hooked woocommerce_template_single_price - 10
        * @hooked woocommerce_template_single_excerpt - 20
        * @hooked woocommerce_template_single_add_to_cart - 30
        * @hooked woocommerce_template_single_meta - 40
        * @hooked woocommerce_template_single_sharing - 50
        * @hooked WC_Structured_Data::generate_product_data() - 60
        */
        do_action( 'woocommerce_single_product_summary' );
        ?>
        <hr>
        <p>
        <h4>Description</h4>
        <?php the_content(); ?></p>
			</div>
      <div class="col-md-6">
        <?php
          /**
           * Hook: woocommerce_before_single_product_summary.
           *
           * @hooked woocommerce_show_product_sale_flash - 10
           * @hooked woocommerce_show_product_images - 20
           */
          do_action( 'woocommerce_before_single_product_summary' );
          ?>
      </div>
	   </div>
		</div>
        <img class="back-product" src="<?php echo get_template_directory_uri();?>/assets/img/bg.png" width="60" alt="" />
  </div>
				<!-- 
				<section class="Lineas">
					<div class="anim-icons">
						<span class="icon shape-5"></span>
					</div>
				</section> -->
				<div class="gradient-dark" ></div>
        <!-- 2 -->
       
				<?php  get_template_part('partials/featured'); ?>
				<!-- 3 -->
				
				<?php  get_template_part('partials/categories'); ?>

</div>
