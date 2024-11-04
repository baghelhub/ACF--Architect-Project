<?php
    
    function architect_menu() {
            register_nav_menus(array(
                'menu-1' => esc_html__( 'Menu 1', 'architect' ),
                'footer-1' => esc_html__( 'footer 1', 'architect' ),
                'footer-2' => esc_html__( 'footer 2', 'architect' ),
            ));
        }
        add_action('after_setup_theme', 'architect_menu');


  /*-----  use for custom theme ------------*/ 

        add_theme_support('post-thumbnails');
        add_theme_support( 'woocommerce' );
        add_filter( 'woocommerce_enqueue_styles', '__return_false');

 /*------------------- get category  ------- */
                                                                                                                 
    //   $curl = curl_init();
    //   curl_setopt_array($curl, array(
    //   CURLOPT_URL => "https://jsonplaceholder.typicode.com/posts",
    //   CURLOPT_RETURNTRANSFER => true,
    //   CURLOPT_TIMEOUT => 30,
    //   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //   CURLOPT_CUSTOMREQUEST => "GET", CURLOPT_HTTPHEADER => array("cache-control: no-cache"),));
    //   $apidata = curl_exec($curl);
    //   $decode = json_decode($apidata,true);
    //   foreach($decode as $data) { 
    //   print_r($data['id']); }
    //   $err = curl_error($curl);
    //   curl_close($curl);                                                                            
                                                                                                      
  




