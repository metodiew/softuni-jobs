<?php
/**
 * Plugin Name: SoftUni training
 * Description: this our test plugin
 * Version: 0.0.1
 */

 /**
  * Undocumented function
  *
  * @param [type] $title
  * @return void
  */
function change_title_text( $title ) {

    var_dump( $title );

    return $title . ' 1st function' ;
}
// add_filter( 'the_title', 'change_title_text', 10 );


function change_title_again( $title ) {

    return $title . ' 2nd function';
}
// add_filter( 'the_title', 'change_title_again', 1 );

function change_title_for_the_third_time( $title ) {

    return $title . ' 3rd function';
}
// add_filter( 'the_title', 'change_title_for_the_third_time', 3 );

// @TODO: 
/**
 * Undocumented function
 *
 * @param [type] $content
 * @return void
 */
function display_twitter_share( $content ) {

    $post_title = get_the_title( get_the_ID() );

    // echo $my_var;

    // test_funct();

    $twitter = '<a class="twitter-share-button" href="https://twitter.com/intent/tweet?text='. $post_title .'">Tweet</a>';

    $content .= '<div>'. $twitter .'</div>';

    return $content;
}
add_filter( 'the_content', 'display_twitter_share' );

function add_body_class( $classes ) {

    echo '<pre>' . var_dump( $classes ) . '</pre>';
    // die();

    $classes[] = 'my-custom-body-class';
    // var_dump( $classes ); die();

    return $classes;
}
add_filter( 'body_class', 'add_body_class' );

// post-template-default single single-post postid-5 single-format-standard logged-in admin-bar no-customize-support wp-embed-responsive
// post-template-default single single-post postid-5 single-format-standard logged-in admin-bar no-customize-support wp-embed-responsive my-custom-body-class

function detect_word( $content ) {

    $my_word = 'standard';

    // echo $my_var;

    if ( str_contains( $content, $my_word ) ) {
        $content .= "<p>This returned true!</p>";
        // var_dump( $my_word );
        $my_word = str_replace( $content, $my_word, 'test-word' );
        // var_dump( $my_word ); die();
        $content .= $my_word;
    } else {
        $content .= "<p>This returned false!</p>";
    }

    return $content;

}
add_filter( 'the_content', 'detect_word' );