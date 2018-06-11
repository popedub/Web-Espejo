<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateInfo extends Controller
{
    public function info()
    {
        $info = get_field('info');
       return (object) array(
        't_izq' => $info['texto_izquierda'],
        'datos' => $info['datos'],
        'enlaces' => $info['enlaces'],
        'bio' => $info ['bio'],
        'pie' => $info ['pie'],
        );
    }
    public function col_tags() {
        $tags = get_tags();

            if($tags)
            {
                $output = '<ul class="top_tags">';
                foreach($tags as $tag)
                    $output .= '<li><a href="'.get_tag_link($tag->term_id).'" title="'.$tag->name.'">'.$tag->name.'</a></li>';

                $output .= '</ul>';

                return $output;
            }
    }
}
