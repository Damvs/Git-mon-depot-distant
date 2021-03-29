<?php
//about theme info
add_action( 'admin_menu', 'vw_gardening_landscaping_gettingstarted' );
function vw_gardening_landscaping_gettingstarted() {
	add_theme_page( esc_html__('About VW Gardening Landscaping', 'vw-gardening-landscaping'), esc_html__('About VW Gardening Landscaping', 'vw-gardening-landscaping'), 'edit_theme_options', 'vw_gardening_landscaping_guide', 'vw_gardening_landscaping_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function vw_gardening_landscaping_admin_theme_style() {
   wp_enqueue_style('vw-gardening-landscaping-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstart/getstart.css');
   wp_enqueue_script('vw-gardening-landscaping-tabs', esc_url(get_template_directory_uri()) . '/inc/getstart/js/tab.js');
   wp_enqueue_style( 'font-awesome-css', esc_url(get_template_directory_uri()).'/assets/css/fontawesome-all.css' );
}
add_action('admin_enqueue_scripts', 'vw_gardening_landscaping_admin_theme_style');

//guidline for about theme
function vw_gardening_landscaping_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'vw-gardening-landscaping' );
?>

<div class="wrapper-info">
    <div class="col-left">
    	<h2><?php esc_html_e( 'Welcome to VW Gardening Landscaping Theme', 'vw-gardening-landscaping' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','vw-gardening-landscaping'); ?></p>
    </div>
    <div class="col-right">
    	<div class="logo">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/final-logo.png" alt="" />
		</div>
		<div class="update-now">
			<h4><?php esc_html_e('Buy VW Gardening Landscaping at 20% Discount','vw-gardening-landscaping'); ?></h4>
			<h4><?php esc_html_e('Use Coupon','vw-gardening-landscaping'); ?> ( <span><?php esc_html_e('vwpro20','vw-gardening-landscaping'); ?></span> ) </h4> 
			<div class="info-link">
				<a href="<?php echo esc_url( VW_GARDENING_LANDSCAPING_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'vw-gardening-landscaping' ); ?></a>
			</div>
		</div>
    </div>

    <div class="tab-sec">
		<div class="tab">
			<button class="tablinks" onclick="vw_gardening_landscaping_open_tab(event, 'block_pattern')"><?php esc_html_e( 'Setup With Block Pattern', 'vw-gardening-landscaping' ); ?></button>
		  	<button class="tablinks" onclick="vw_gardening_landscaping_open_tab(event, 'gardening_lite')"><?php esc_html_e( 'Setup With Customizer', 'vw-gardening-landscaping' ); ?></button>		  
		  	<button class="tablinks" onclick="vw_gardening_landscaping_open_tab(event, 'gardening_pro')"><?php esc_html_e( 'Get Premium', 'vw-gardening-landscaping' ); ?></button>
		  	<button class="tablinks" onclick="vw_gardening_landscaping_open_tab(event, 'free_pro')"><?php esc_html_e( 'Support', 'vw-gardening-landscaping' ); ?></button>
		</div>

		<div id="block_pattern" class="tabcontent open">
			<h3><?php esc_html_e( 'Block Patterns', 'vw-gardening-landscaping' ); ?></h3>
			<hr class="h3hr">
			<p><?php esc_html_e('Follow the below instructions to setup Home page with Block Patterns.','vw-gardening-landscaping'); ?></p>
          	<p><b><?php esc_html_e('Click on Below Add new page button >> Click on "+" Icon >> Click Pattern Tab >> Click on homepage sections >> Publish.','vw-gardening-landscaping'); ?></span></b></p>
          	<div class="vw-gardening-landscaping-pattern-page">
		    	<a href="<?php echo esc_url( admin_url( 'post-new.php?post_type=page' ) ); ?>" target="_blank" class="vw-pattern-page-btn button-primary button"><?php esc_html_e('Add New Page','vw-gardening-landscaping'); ?></a>
		    </div>
          	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/block-pattern.png" alt="" />	
		</div>
		
		<div id="gardening_lite" class="tabcontent">
			<h3><?php esc_html_e( 'Lite Theme Information', 'vw-gardening-landscaping' ); ?></h3>
			<hr class="h3hr">
		  	<p><?php esc_html_e('VW Gardening Landscape is a refreshing, clean, reliable, robust, dynamic and feature-full gardening and landscaping WordPress theme for lawn services, sod cutting services, gardening and landscaping, lawn decorators, farm producers, nurseries, garden designers, florists, landscape architects, environmentalist, forest department and forest guards, green tourism industry, conservationist, organic food producer, renewable energy provider, land scrappers, NGOs, organic farmers, ecologists, fertilizer maker and supplier, gardening tools store and all such websites. It has multiple website layouts like boxed, full-width and full screen; unlimited colour options and over 100+ Google fonts. This garden WordPress theme is fully responsive, cross-browser compatible, social media linked and SEO friendly. It is translation ready and supports RTL writing style. It is packed with an amazing range of advanced features and functionality along with some predesigned inner pages and a fully explained documentation. This theme has a super-efficient theme customizer that eases the burden of making changes to the website through theme customizer. It is made to work conveniently with third party plugins and integrated with WooCommerce to instantly set up an online store with beautiful product pages and secure payment gateways. It is compatible with the latest WordPress version and coded in clean environment.','vw-gardening-landscaping'); ?></p>
		  	<div class="col-left-inner">
		  		<h4><?php esc_html_e( 'Theme Documentation', 'vw-gardening-landscaping' ); ?></h4>
				<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'vw-gardening-landscaping' ); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_GARDENING_LANDSCAPING_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'vw-gardening-landscaping' ); ?></a>
				</div>
				<hr>
				<h4><?php esc_html_e('Theme Customizer', 'vw-gardening-landscaping'); ?></h4>
				<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'vw-gardening-landscaping'); ?></p>
				<div class="info-link">
					<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'vw-gardening-landscaping'); ?></a>
				</div>
				<hr>				
				<h4><?php esc_html_e('Having Trouble, Need Support?', 'vw-gardening-landscaping'); ?></h4>
				<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'vw-gardening-landscaping'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_GARDENING_LANDSCAPING_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'vw-gardening-landscaping'); ?></a>
				</div>
				<hr>
				<h4><?php esc_html_e('Reviews & Testimonials', 'vw-gardening-landscaping'); ?></h4>
				<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'vw-gardening-landscaping'); ?>  </p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_GARDENING_LANDSCAPING_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'vw-gardening-landscaping'); ?></a>
				</div>
		  		<div class="link-customizer">
					<h3><?php esc_html_e( 'Link to customizer', 'vw-gardening-landscaping' ); ?></h3>
					<hr class="h3hr">
					<div class="first-row">
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-gardening-landscaping'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_gardening_landscaping_slidersettings') ); ?>" target="_blank"><?php esc_html_e('Slider Settings','vw-gardening-landscaping'); ?></a>
							</div>
						</div>
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-welcome-write-blog"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_gardening_landscaping_topbar') ); ?>" target="_blank"><?php esc_html_e('Topbar Settings','vw-gardening-landscaping'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-editor-table"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_gardening_landscaping_expertise_section') ); ?>" target="_blank"><?php esc_html_e('Our Expertise','vw-gardening-landscaping'); ?></a>
							</div>
						</div>
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','vw-gardening-landscaping'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','vw-gardening-landscaping'); ?></a>
							</div>
						</div>

						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_gardening_landscaping_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','vw-gardening-landscaping'); ?></a>
							</div>
							 <div class="row-box2">
								<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_gardening_landscaping_woocommerce_section') ); ?>" target="_blank"><?php esc_html_e('WooCommerce Layout','vw-gardening-landscaping'); ?></a>
							</div> 
						</div>
						
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_gardening_landscaping_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','vw-gardening-landscaping'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_gardening_landscaping_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-gardening-landscaping'); ?></a>
							</div>
						</div>
					</div>
				</div>
		  	</div>
			<div class="col-right-inner">
				<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','vw-gardening-landscaping'); ?></h3>
			  	<hr class="h3hr">
				<p><?php esc_html_e('Follow these instructions to setup Home page.','vw-gardening-landscaping'); ?></p>
                <ul>
                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','vw-gardening-landscaping'); ?></span><?php esc_html_e(' Go to ','vw-gardening-landscaping'); ?>
				  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','vw-gardening-landscaping'); ?></b></p>

                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','vw-gardening-landscaping'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/home-page-template.png" alt="" />
                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','vw-gardening-landscaping'); ?></span><?php esc_html_e(' Go to ','vw-gardening-landscaping'); ?>
				  	<b><?php esc_html_e(' Settings >> Reading ','vw-gardening-landscaping'); ?></b></p>
				  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','vw-gardening-landscaping'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/set-front-page.png" alt="" />
                  	<p><?php esc_html_e(' Once you are done with this, then follow the','vw-gardening-landscaping'); ?> <a class="doc-links" href="https://www.vwthemesdemo.com/docs/free-vw-gardening-landscaping/" target="_blank"><?php esc_html_e('Documentation','vw-gardening-landscaping'); ?></a></p>
                </ul>
		  	</div>
		</div>	

		<div id="gardening_pro" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'vw-gardening-landscaping' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('This landscaping WordPress theme brings many incredible features under one roof to help you design a performance focused website with unique design and visually stunning look. The thoughtful placement of objects throughout the theme leads to a beautiful design which catches user attention at the very first glance. It is an intuitive theme with the use of refreshing colours and apt typography making it more impactful. This landscaping WordPress theme requires minimum efforts to set it up and hence is equally easy for experienced coder and WordPress newbie to explore it to its maximum potential to craft a highly efficient gardening and landscaping website. Whether you run the biggest nursery shop in your city or famous for offering gardening services throughout the country, this landscaping WP theme will perfectly represent your brand aiding you in handling your website smoothly without ever raising the need to take help from outside.','vw-gardening-landscaping'); ?></p>
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( VW_GARDENING_LANDSCAPING_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'vw-gardening-landscaping'); ?></a>
					<a href="<?php echo esc_url( VW_GARDENING_LANDSCAPING_BUY_NOW ); ?>"><?php esc_html_e('Buy Pro', 'vw-gardening-landscaping'); ?></a>
					<a href="<?php echo esc_url( VW_GARDENING_LANDSCAPING_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'vw-gardening-landscaping'); ?></a>
				</div>
		    </div>
		    <div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/responsive.png" alt="" />
		    </div>
		    <div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'vw-gardening-landscaping' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'vw-gardening-landscaping'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'vw-gardening-landscaping'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Slider Settings', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Number of Slides', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><?php esc_html_e('4', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><?php esc_html_e('Unlimited', 'vw-gardening-landscaping'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><?php esc_html_e('6', 'vw-gardening-landscaping'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-gardening-landscaping'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme sections', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><?php esc_html_e('14', 'vw-gardening-landscaping'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'vw-gardening-landscaping'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates & Layout', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'vw-gardening-landscaping'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Page Templates & Layout', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('2(Left/Right Sidebar)', 'vw-gardening-landscaping'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Color Pallete For Particular Sections', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Global Color Option', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Reordering', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Demo Importer', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Full Documentation', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Latest WordPress Compatibility', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Woo-Commerce Compatibility', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support 3rd Party Plugins', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Secure and Optimized Code', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Exclusive Functionalities', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Enable / Disable', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Google Font Choices', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Gallery', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Simple & Mega Menu Option', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Shortcodes', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Premium Membership', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Budget Friendly Value', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Priority Error Fixing', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Feature Addition', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('All Access Theme Pass', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Seamless Customer Support', 'vw-gardening-landscaping'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( VW_GARDENING_LANDSCAPING_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'vw-gardening-landscaping'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="free_pro" class="tabcontent">
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-star-filled"></span><?php esc_html_e('Pro Version', 'vw-gardening-landscaping'); ?></h4>
				<p> <?php esc_html_e('To gain access to extra theme options and more interesting features, upgrade to pro version.', 'vw-gardening-landscaping'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_GARDENING_LANDSCAPING_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'vw-gardening-landscaping'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-cart"></span><?php esc_html_e('Pre-purchase Queries', 'vw-gardening-landscaping'); ?></h4>
				<p> <?php esc_html_e('If you have any pre-sale query, we are prepared to resolve it.', 'vw-gardening-landscaping'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_GARDENING_LANDSCAPING_CONTACT ); ?>" target="_blank"><?php esc_html_e('Question', 'vw-gardening-landscaping'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">		  		
		  		<h4><span class="dashicons dashicons-admin-customizer"></span><?php esc_html_e('Child Theme', 'vw-gardening-landscaping'); ?></h4>
				<p> <?php esc_html_e('For theme file customizations, make modifications in the child theme and not in the main theme file.', 'vw-gardening-landscaping'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_GARDENING_LANDSCAPING_CHILD_THEME ); ?>" target="_blank"><?php esc_html_e('About Child Theme', 'vw-gardening-landscaping'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-admin-comments"></span><?php esc_html_e('Frequently Asked Questions', 'vw-gardening-landscaping'); ?></h4>
				<p> <?php esc_html_e('We have gathered top most, frequently asked questions and answered them for your easy understanding. We will list down more as we get new challenging queries. Check back often.', 'vw-gardening-landscaping'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_GARDENING_LANDSCAPING_FAQ ); ?>" target="_blank"><?php esc_html_e('View FAQ','vw-gardening-landscaping'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-sos"></span><?php esc_html_e('Support Queries', 'vw-gardening-landscaping'); ?></h4>
				<p> <?php esc_html_e('If you have any queries after purchase, you can contact us. We are eveready to help you out.', 'vw-gardening-landscaping'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_GARDENING_LANDSCAPING_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Contact Us', 'vw-gardening-landscaping'); ?></a>
				</div>
		  	</div>
		</div>
	</div>
</div>
<?php } ?>