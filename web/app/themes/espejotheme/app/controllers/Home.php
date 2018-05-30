<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Home extends Controller
{
    public function tags()
    {
    $tags = get_tags();
    $html = '<div class="post_tags">';
    $i = 0;
    $len = count($tags);
    foreach ( $tags as $tag ) {
        if ($i < $len -1) {
        $tag_link = get_tag_link( $tag->term_id );

        $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
        $html .= "{$tag->name}</a>, ";
        }
        else if ($i == $len - 1) {
        $tag_link = get_tag_link( $tag->term_id );

        $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
        $html .= "{$tag->name}</a>. ";
        }
        $i++;
    }
    $html .= '</div>';
    return $html;
    }
    public function pie()
    {

        return get_field('pie_de_foto');
    }
}
