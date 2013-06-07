<?php
/*
Plugin Name: Social Redirects
Plugin URI: https://github.com/ngryman/social-redirects
Description: Redirect glyph urls to your social networks profiles.
Version: 0.0.1
Author: Nicolas Gryman
Author URI: http://ngryman.sh
License: MIT
*/

function social_redirects() {
    global $wp_query;
    $redirects = array(
        '@'  => 'https://twitter.com/:you',
        '~'  => 'https://github.com/:you',
        '+'  => 'https://plus.google.com/:you',
        'f'  => 'https://www.facebook.com/:you',
        'in' => 'https://linkedin.com/in/:you'
    );

    foreach ($redirects as $from => $to) {
        if (!empty($wp_query->query) && $wp_query->query['pagename'] == $from) {
            wp_redirect($to, 301);
            exit;
        }
    }
}
add_action('template_redirect', 'social_redirects', -10);
?>
