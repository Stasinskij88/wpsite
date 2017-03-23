<?
function mytheme_setup() 
{ 
register_nav_menus( array( 'top'   => 'Top Menu', ) ); 
} add_action( 'after_setup_theme', 'mytheme_setup' );
?>

<!--реєстрація позиції для віджетів-->
<?php if ( function_exists('register_sidebar') ) 
{ register_sidebar(array( 
'name' => 'sidebar', 
'before_widget' => '<div class="well">', 
'after_widget' => '</div>', 
'before_title' => '<h4>', 
'after_title' => '</h4>', )); 
}
?>