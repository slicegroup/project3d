<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;


/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<?php get_header(); ?>

    <?php  get_template_part('partials/nav'); ?>
   <div class="center">
            <div class="slider-destacado">
            <?php while ( have_posts() ) : the_post(); global $product; ?>
              <div class="wrapper-product animated wow fadInDown" data-wow-duration="6s">
              <a href="<?php the_permalink() ?>">
                <div class="card-product" data-tilt>
                  <h1 class="titl"><?php the_title(); ?>
                  </h1>
                  <p class="price"><?php echo $product->get_price_html(); ?></p>
                  <div class="bg" style=" background: url('<?php echo get_the_post_thumbnail_url(); ?>');      background-size: cover;
                    background-position: center;background-repeat: no-repeat;">
                  </div>
                </div>
                </a>
              </div>
              <?php endwhile; ?>
          </div>
        </div>

        <?php get_footer(); ?>