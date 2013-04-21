<?php
/**
 * Helpers for theming, available for all themes in their template files and functions.php.
 * This file is included right before the themes own functions.php.
 */

/**
 * Print debuginformation from the framework 
 */
function get_debug() {
    $li = CLibra::Instance();
    $html = null;
    if (isset($li->config['debug']['display-libra']) && $li->config['debug']['display-libra']) {
        $html = '<h2>Debuginformation</h2><hr>
                 <p>The content of the config array:</p><pre>'      . htmlentities(print_r($li->config, true))  . '</pre>'; 
        $html .= '<hr><p>The content of the data array: </p><pre>'  . htmlentities(print_r($li->data, true))    . '</pre>';
        $html .= '<hr><p>The content of the request array:</p><pre>'. htmlentities(print_r($li->request, true)) . '</pre>';
    }
    return $html;
}
 
 
 
/**
 * Create a url by prepending the base_url.
 */
function base_url($url) {
    return CLibra::Instance()->request->base_url . trim($url, '/');
}
