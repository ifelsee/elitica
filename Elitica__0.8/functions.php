<?php
  /**
   * Elitica functions and definitions
   *
   * @link https://developer.wordpress.org/themes/basics/theme-functions/
   *
   * @package Elitica
   */
  
  if ( ! function_exists( 'elitica_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function elitica_setup() {
      /*
       * Make theme available for translation.
       * Translations can be filed in the /languages/ directory.
       * If you're building a theme based on Elitica, use a find and replace
       * to change 'elitica' to the name of your theme in all the template files.
       */
      load_theme_textdomain( 'elitica', get_template_directory() . '/languages' );
  
      // Add default posts and comments RSS feed links to head.
      add_theme_support( 'automatic-feed-links' );
  
      /*
       * Let WordPress manage the document title.
       * By adding theme support, we declare that this theme does not use a
       * hard-coded <title> tag in the document head, and expect WordPress to
       * provide it for us.
       */
      add_theme_support( 'title-tag' );
  
      /*
       * Enable support for Post Thumbnails on posts and pages.
       *
       * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
       */
      add_theme_support( 'post-thumbnails' );
  
      // This theme uses wp_nav_menu() in one location.
      register_nav_menus( array(
        'top-menu' => 'Top Menu Locaiton',
        
      ) );
  
      /*
       * Switch default core markup for search form, comment form, and comments
       * to output valid HTML5.
       */
      add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
      ) );
  
      // Set up the WordPress core custom background feature.
      add_theme_support( 'custom-background', apply_filters( 'elitica_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
      ) ) );
  
      // Add theme support for selective refresh for widgets.
      add_theme_support( 'customize-selective-refresh-widgets' );
  
      /**
       * Add support for core custom logo.
       *
       * @link https://codex.wordpress.org/Theme_Logo
       */
      add_theme_support( 'custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
      ) );
    }
  endif;
  add_action( 'after_setup_theme', 'elitica_setup' );
  
  /**
   * Set the content width in pixels, based on the theme's design and stylesheet.
   *
   * Priority 0 to make it available to lower priority callbacks.
   *
   * @global int $content_width
   */
  function elitica_content_width() {
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters( 'elitica_content_width', 640 );
  }
  add_action( 'after_setup_theme', 'elitica_content_width', 0 );
  
  /**
   * Register widget area.
   *
   * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
   */
  function elitica_widgets_init() {
    register_sidebar( array(
      'name'          => esc_html__( 'Sidebar', 'elitica' ),
      'id'            => 'sidebar-1',
      'class'         => 'custom',    
      'description'   => esc_html__( 'Add widgets here.', 'elitica' ),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    ) );
  }
  add_action( 'widgets_init', 'elitica_widgets_init' );
  
  /**
   * Enqueue scripts and styles.
   */
  function add_theme_scripts() {
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js',array(), '1.0.0', true ); 
    wp_enqueue_script( 'jquery.gallery', get_template_directory_uri() . '/js/jquery.gallery.js', array('jquery'), '1.0.0', false );
    wp_enqueue_script( 'modernizr.custom.53451', get_template_directory_uri() . '/js/modernizr.custom.53451.js', array('jquery'), null, false );
    wp_register_script( 'jQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', null, null, true );
    
      if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
      }
    }
    add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
  
  
  
  
  function elitica_scripts() {
    wp_enqueue_style( 'elitica-style', get_stylesheet_uri() );
  
    wp_enqueue_script( 'elitica-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
  
    wp_enqueue_script( 'elitica-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
    
  
    wp_enqueue_style( 'style', get_template_directory_uri() . 'style.css', array(), false, 'all'); 
    wp_enqueue_style('style');
  
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
  }
  add_action( 'wp_enqueue_scripts', 'elitica_scripts' );
  
  
  function get_author_role()
  {
      global $authordata;
  
      $author_roles = $authordata->roles;
      $author_role = array_shift($author_roles);
  
      return $author_role;
  }
  
  
  add_editor_style( 'style-editor.css' );
  
  
  add_theme_support( 'editor-styles' );
  
  // Load default block styles.
  add_theme_support( 'wp-block-styles' ); 
  add_theme_support( 'customize-selective-refresh-widgets' );
  
  
  function misha_gutenberg_css(){
   
    add_theme_support( 'editor-styles' ); // if you don't add this line, your stylesheet won't be added
    add_editor_style( 'style-editor.css' ); // tries to include style-editor.css directly from your theme folder
   
  }
  add_editor_style( 'gutenberg/style-editor.css' );
  add_action( 'enqueue_block_editor_assets', 'misha_custom_block' );
   
  function misha_custom_block(){
   
    // wp_enqueue_script() with your block JS goes first...
   
    // block css
    wp_enqueue_style(
      'misha-block-css',
      get_stylesheet_directory_uri() . '/inc/block-misha.css',
      array( 'wp-edit-blocks' ),
      time()
    );
   
  }
  
  /**
   * Implement the Custom Header feature.
   */
  require get_template_directory() . '/inc/custom-header.php';
  
  /**
   * Custom template tags for this theme.
   */
  require get_template_directory() . '/inc/template-tags.php';
  
  /**
   * Functions which enhance the theme by hooking into WordPress.
   */
  require get_template_directory() . '/inc/template-functions.php';
  
  /**
   * Customizer additions.
   */
  require get_template_directory() . '/inc/customizer.php';
  /**
   * Customizer Widget.
   */
  require get_template_directory() . '/inc/widget.php';
  /**
   * Load Jetpack compatibility file.
   */

  require get_template_directory() . '/inc/function-admin.php';


  
  if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
  }
  
  if( function_exists('acf_add_local_field_group') ):
  
    acf_add_local_field_group(array (
      'key' => 'group_1',
      'title' => 'My Group',
      'fields' => array (
        array (
          'key' => 'field_1',
          'label' => 'Sub Title',
          'name' => 'sub_title',
          'type' => 'text',
          'prefix' => '',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'maxlength' => '',
          'readonly' => 0,
          'disabled' => 0,
        )
      ),
      'location' => array (
        array (
          array (
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'post',
          ),
        ),
      ),
      'menu_order' => 0,
      'position' => 'normal',
      'style' => 'default',
      'label_placement' => 'top',
      'instruction_placement' => 'label',
      'hide_on_screen' => '',
    ));
    
    endif;
  
  
    function my_acf_add_local_field_groups() {
    
      acf_add_local_field_group(array(
        'key' => 'group_1',
        'title' => 'My Group',
        'fields' => array (
          array (
            'key' => 'field_1',
            'label' => 'Sub Title',
            'name' => 'sub_title',
            'type' => 'text',
          )
        ),
        'location' => array (
          array (
            array (
              'param' => 'post_type',
              'operator' => '==',
              'value' => 'post',
            ),
          ),
        ),
      ));
      
    }
    
    add_action('acf/init', 'my_acf_add_local_field_groups');  
    
  
  
  ///////////////////////////////////////////////////////////////////////
              // Sidebar
  ///////////////////////////////////////////////////////////////////////
  
    // navbar üstündeki alan
    function nav_sidebar() {
      register_sidebar(
        array (
          'name' => __( 'Navbar üstü', 'your-theme-domain' ),
          'id' => 'custom-side-bar-nav',
          'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
          'before_widget' => '<div class="widget-content">',
          'after_widget' => "</div>",
          'before_title' => '<h3 class="widget-title">',
          'after_title' => '</h3>',
        )
      );
    }
    add_action( 'widgets_init', 'nav_sidebar' );
    
  
    // Ana sayfa orta
    function home_sidebar() {
      register_sidebar(
        array (
          'name' => __( 'Ana sayfa Orta', 'your-theme-domain' ),
          'id' => 'custom-side-bar-home',
          'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
          'before_widget' => '<div class="widget-content">',
          'after_widget' => "</div>",
          'before_title' => '<h3 class="widget-title">',
          'after_title' => '</h3>',
        )
      );
    }
    add_action( 'widgets_init', 'home_sidebar' );
  
  
    // Footer icerik
    function footer_sidebar() {
      register_sidebar(
        array (
          'name' => __( 'Footer icerik', 'your-theme-domain' ),
          'id' => 'custom-side-bar-footer',
          'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
          'before_widget' => '<div class="widget-content">',
          'after_widget' => "</div>",
          'before_title' => '<h3 class="widget-title">',
          'after_title' => '</h3>',
        )
      );
    }
    add_action( 'widgets_init', 'footer_sidebar' );
  
  


  ///////////////////////////////////////////////////////////////////////
              // elitca author area
  ///////////////////////////////////////////////////////////////////////



    function elitca_author_area($wp_customize) {
      $wp_customize->add_section('elitca-author-area-section', array(
        'title' => 'Author Avatar'
      ));
    
      $wp_customize->add_setting('elitca-author-area-display', array(
        'default' => 'Yes'
      ));
    
      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'elitca-author-area-display-control', array(
          'label' => 'Display this section?',
          'section' => 'elitca-author-area-section',
          'settings' => 'elitca-author-area-display',
          'type' => 'select',
          'choices' => array('No' => 'No', 'Yes' => 'Yes')
        )));
    
      $wp_customize->add_setting('elitca-author-area-headline', array(
        'default' =>  ''
      ));
    
      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'elitca-author-area-headline-control', array(
          'label' => 'Firs Name And Surname',
          'section' => 'elitca-author-area-section',
          'settings' => 'elitca-author-area-headline'
        )));
    
      $wp_customize->add_setting('elitca-author-area-text', array(
        'default' => 'Example paragraph text.'
      ));
    
      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'elitca-author-area-text-control', array(
          'label' => 'Text',
          'section' => 'elitca-author-area-section',
          'settings' => 'elitca-author-area-text',
          'type' => 'textarea'
        )));
    
    
      $wp_customize->add_setting('elitca-author-area-bg-image');
    
      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'elitca-author-area-bg-image-control', array(
          'label' => 'Image',
          'section' => 'elitca-author-area-section',
		  'settings' => 'elitca-author-area-bg-image', 
		  'width' => 1920,
		  'height' => 400
		)));
		$wp_customize->add_setting('elitca-author-area-avatar-image');
    
		$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'elitca-author-area-avatar-image-control', array(
			'label' => 'Image',
			'section' => 'elitca-author-area-section',
			'settings' => 'elitca-author-area-avatar-image', 
			'width' => 143,
			'height' => 143
		  )));
	}
  
  

    
    add_action('customize_register', 'elitca_author_area');         


