<?php

    include 'includes/includes.php';

    if (!class_exists('Timber')){
        add_action( 'admin_notices', function(){
            echo '<div class="error"><p>Timber not activated. Make sure you activate the plugin in <a href="' . admin_url('plugins.php#timber') . '">' . admin_url('plugins.php') . '</a></p></div>';
        });
        return;
    }

    if ( ! isset( $content_width ) )
        $content_width = 770;

    class QualooWeb extends TimberSite {
        function __construct(){
            add_theme_support('post-formats');
            add_theme_support('post-thumbnails');
            add_theme_support('menus');
            add_filter('timber_context', array($this, 'add_to_context'));
            add_filter('get_twig', array($this, 'add_to_twig'));
            add_action('init', array($this, 'register_post_types'));
            add_action('init', array($this, 'register_taxonomies'));

            remove_action( 'ninja_forms_display_css', 'ninja_forms_display_css', 10, 2 );
            parent::__construct();
        }

        function register_post_types(){
            //this is where you can register custom post types
        }

        function register_taxonomies(){
            //this is where you can register custom taxonomies
        }

        function add_to_context($context){
            $context['foo'] = 'bar';
            $context['stuff'] = 'I am a value set in your functions.php file';
            $context['notes'] = 'These values are available everytime you call Timber::get_context();';
            $context['menus'] = array(
                'main'   => new TimberMenu('main-menu'),
                'footer' => new TimberMenu('footer'),
                'mobile' => new TimberMenu('mobile')
            );
            $context['site'] = $this;
            return $context;
        }

        function add_to_twig($twig){
            /* this is where you can add your own fuctions to twig */
            $twig->addExtension(new Twig_Extension_StringLoader());
            $twig->addFilter('myfoo', new Twig_Filter_Function('myfoo'));
            return $twig;
        }

        function onAfterSetup() {
            register_nav_menu('main-menu', 'Main Menu');
            register_nav_menu('footer', 'Footer');
            register_nav_menu('mobile', 'Mobile Menu');
        }

        function addScripts() {
            if (WP_DEBUG) {
                wp_register_script('livereload', 'http://localhost:35730/livereload.js?snipver=1', null, false, true);
                wp_enqueue_script('livereload');
            }
        }
    }

    new QualooWeb();

    function myfoo($text){
        $text .= ' bar!';
        return $text;
    }
