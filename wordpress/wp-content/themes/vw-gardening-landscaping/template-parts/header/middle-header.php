<?php
/**
 * The template part for header
 *
 * @package VW Gardening Landscaping 
 * @subpackage vw_gardening_landscaping
 * @since VW Gardening Landscaping 1.0
 */
?>
<div class="main-header">
  <div class="header-menu <?php if( get_theme_mod( 'vw_gardening_landscaping_sticky_header', false) != '' || get_theme_mod( 'vw_gardening_landscaping_stickyheader_hide_show', false) != '') { ?> header-sticky"<?php } else { ?>close-sticky <?php } ?>">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4">
          <div class="logo">
            <?php if ( has_custom_logo() ) : ?>
              <div class="site-logo"><?php the_custom_logo(); ?></div>
            <?php endif; ?>
            <?php $blog_info = get_bloginfo( 'name' ); ?>
              <?php if ( ! empty( $blog_info ) ) : ?>
                <?php if ( is_front_page() && is_home() ) : ?>
                  <?php if( get_theme_mod('vw_gardening_landscaping_logo_title_hide_show',true) != ''){ ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                  <?php } ?>
                <?php else : ?>
                  <?php if( get_theme_mod('vw_gardening_landscaping_logo_title_hide_show',true) != ''){ ?>
                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                  <?php } ?>
                <?php endif; ?>
              <?php endif; ?>
              <?php
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) :
              ?>
              <?php if( get_theme_mod('vw_gardening_landscaping_tagline_hide_show',true) != ''){ ?>
                <p class="site-description">
                  <?php echo esc_html($description); ?>
                </p>
              <?php } ?>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-lg-7 col-md-5 col-5">
          <?php get_template_part( 'template-parts/header/navigation' ); ?>
        </div>
        <div class="col-lg-2 col-md-3 col-7">
          <?php if( get_theme_mod( 'vw_gardening_landscaping_top_btn_url') != '' | get_theme_mod( 'vw_gardening_landscaping_top_btn_text') != '') { ?>
            <div class="top-btn">
              <a href="<?php echo esc_url(get_theme_mod('vw_gardening_landscaping_top_btn_url',''));?>"><?php echo esc_html(get_theme_mod('vw_gardening_landscaping_top_btn_text',''));?><span class="screen-reader-text"><?php esc_html_e( 'Get A Quote','vw-gardening-landscaping' );?></span></a>
            </div>
          <?php }?>
        </div>
      </div>
    </div>
  </div>
</div>