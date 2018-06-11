<?php

namespace App\Controllers;
use Sober\Controller\Controller;

class Single extends Controller
{
    public function publicacion_original()
    {
        return get_field('publicacion_original');
    }
    public function texto_largo()
    {
        return get_field('texto_largo');
    }
    public function player()
    {
        return get_field('player');
    }
    public function embed()
    {
        return get_field('embed');
    }
    public function video()
    {
        return get_field('video');
    }
    public function info_player()
    {
        return get_field('info_player');
    }
    public function galeria()
    {

        return get_field('galeria');
    }
    public function related()
    {
        global $post;

        $data = [];

        $related_posts = get_field('related_posts');
        if($related_posts) {
        foreach ($related_posts as $p) {

            $this_post = (object) array(

                'permalink' => get_the_permalink($p),
                'title' => get_the_title($p),
            );

            array_push($data, $this_post);
        }
        }


        return $data;
    }

}
