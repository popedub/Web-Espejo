<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }
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

    public function tags_mob()
    {
    $tags = get_tags();
    $html = '<div class="post_tags_mob">';
    $i = 0;
    $len = count($tags);
    foreach ( $tags as $tag ) {
        if ($i < $len -1) {
        $tag_link = get_tag_link( $tag->term_id );

        $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
        $html .= "{$tag->name}</a></br> ";
        }
        else if ($i == $len - 1) {
        $tag_link = get_tag_link( $tag->term_id );

        $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
        $html .= "{$tag->name}</a> ";
        }
        $i++;
    }
    $html .= '</div>';
    return $html;
    }
}
