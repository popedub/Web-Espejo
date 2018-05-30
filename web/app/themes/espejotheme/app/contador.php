<?php
/**
 * Contador para los post
 */
function get_post_number()
{
    global $wp_query;

    /*
     * Get current page number. Set page 1 to one as get_query_var( 'paged' ) will be 0
     */
    $current_page_number   = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
    /*
     * Get the posts_per_page option that is set under "Reading"
     */
    $posts_per_page        = get_option( 'posts_per_page' );
    /*
     * Get the current post position in the loop, add 1 because the counter starts at 0
     */
    $current_post_position = $wp_query->current_post + 1;

    /*
     * If this is page one, return the post position as is
     */
    if ( $current_page_number == 1 )
        return $current_post_position;

    /*
     * Calculate the post number on paged pages
     */
    return ( $posts_per_page * ( $current_page_number - 1 ) ) + $current_post_position;
}

function nombres_cat()
{
    global $post;

        $categories = get_the_category($post->ID);
        $separator = ', ';
        $output = '';
         if($categories){
         foreach($categories as $category) {
            if($category->name !== 'Destacada Inicio') {
            $output .= $category->cat_name . $separator;
            //if($output != '') break; //end foreach when we have value

            }

         }
         //var_dump($categories);
          echo trim ($output, $separator);
         }
}
?>
