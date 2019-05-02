<?php
add_action( 'init', 'ha_contact_posttype_register' );


 function ha_contact_posttype_register(){

   // TODO: make argoman for function register_post_type(name , Arg)

   $label = array(
     'name' => __( 'تماس' ),
     'singular_name' => __( 'تماس' ),
   );
   $arg = array(
     'labels' => $label,
     'public' => true,
     'has_archive' => true,
     'menu_position' => 10,
     'supports' =>array(
       'title',
       'author',
       'editor',
       'page-attributes',
       'revisions' ,
       'custom-fields',
       'trackbacks',
       'excerpt',
       'thumbnail',
     ),

   );
   register_post_type("hacontact",$arg);

 }






 ?>
