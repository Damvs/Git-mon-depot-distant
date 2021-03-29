<?php
/**
 * Template Name: Custom Home Page
 */

get_header(); ?>

<main id="maincontent" role="main">
  <?php do_action( 'vw_gardening_landscaping_before_slider' ); ?>

  <?php if( get_theme_mod( 'vw_gardening_landscaping_slider_hide_show', false) != '' || get_theme_mod( 'vw_gardening_landscaping_resp_slider_hide_show', false) != '') { ?>

    <section id="slider">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="<?php echo esc_attr(get_theme_mod( 'vw_gardening_landscaping_slider_speed',3000)) ?>"> 
        <?php $vw_gardening_landscaping_slider_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'vw_gardening_landscaping_slider_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $vw_gardening_landscaping_slider_pages[] = $mod;
            }
          }
          if( !empty($vw_gardening_landscaping_slider_pages) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $vw_gardening_landscaping_slider_pages,
              'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              $i = 1;
        ?>     
        <div class="carousel-inner" role="listbox">
          <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <?php the_post_thumbnail(); ?>
              <div class="carousel-caption">
                <div class="inner_carousel">
                  <h1><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                  <p><?php $excerpt = get_the_excerpt(); echo esc_html( vw_gardening_landscaping_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_gardening_landscaping_slider_excerpt_number','30')))); ?></p>
                  <?php if( get_theme_mod('vw_gardening_landscaping_slider_button_text','READ MORE') != ''){ ?>
                    <div class="more-btn">
                      <a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html(get_theme_mod('vw_gardening_landscaping_slider_button_text',__('READ MORE','vw-gardening-landscaping')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_gardening_landscaping_slider_button_text',__('READ MORE','vw-gardening-landscaping')));?></span></a>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
            <div class="no-postfound"></div>
        <?php endif;
        endif;?>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Previous','vw-gardening-landscaping' );?></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Next','vw-gardening-landscaping' );?></span>
        </a>
      </div>
      <div class="clearfix"></div>
    </section>

  <?php } ?>

  <?php do_action( 'vw_gardening_landscaping_after_slider' ); ?>

  <section id="serv-section">
    <div class="container">
      <?php if( get_theme_mod( 'vw_gardening_landscaping_section_title') != '') { ?>
        <h2><?php echo esc_html(get_theme_mod('vw_gardening_landscaping_section_title',''));?></h2>
      <?php }?>
      <div class="row">
        <?php
          $vw_gardening_landscaping_catData =  get_theme_mod('vw_gardening_landscaping_our_expertise','');
          if($vw_gardening_landscaping_catData){
          $page_query = new WP_Query(array( 'category_name' => esc_html($vw_gardening_landscaping_catData,'vw-gardening-landscaping'))); ?>
          <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
          <div class="col-lg-4 col-md-6">
            <div class="serv-box">
              <?php the_post_thumbnail(); ?>
              <h3><?php the_title(); ?></h3>
              <p><?php $excerpt = get_the_excerpt(); echo esc_html( vw_gardening_landscaping_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_gardening_landscaping_expertise_excerpt_number','30')))); ?></p>
              <?php if( get_theme_mod('vw_gardening_landscaping_expertise_button_text','READ MORE') != ''){ ?>
                <div class="expertise-btn">
                  <a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html(get_theme_mod('vw_gardening_landscaping_expertise_button_text',__('READ MORE','vw-gardening-landscaping')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_gardening_landscaping_expertise_button_text',__('READ MORE','vw-gardening-landscaping')));?></span></a>
                </div>
              <?php } ?>
            </div>
          </div>
          <?php endwhile;
          wp_reset_postdata();
        } ?>
      </div>
    </div>
  </section>

  <?php do_action( 'vw_gardening_landscaping_after_expertise_section' ); ?>

  <div class="content-vw">
    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
