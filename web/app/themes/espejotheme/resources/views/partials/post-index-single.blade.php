@php
  //load and display all posts
  //setting post_type is unnecessary, it will default to post
  $all_posts = new WP_Query( array( 'posts_per_page' => -1 ) );
  $posicion = 1;
  while( $all_posts->have_posts() ):
    $all_posts->the_post();
      // condicional para ver el ID del post en el que estamos
        if (get_the_ID() == $post->ID) {
              break;
          };

      $posicion++;
  endwhile;
    echo $posicion;

    // reset the global post variable
    wp_reset_postdata();
@endphp
