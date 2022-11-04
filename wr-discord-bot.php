<?php
/** 
* Plugin Name: WR Discord Bot
* Plugin URI: https://github.com/emmofie/WorkRemote-Discord-Webhook
* Author: Emmanuel Ofie
* Author URI: https://github.com/emmofie/
* Description: Share job updates to Discord via webhooks 
* Version: 0.1.0 
* License: GNU General Public License v3.0
* License URL: http://www.gnu.org/licenses/gpl-3.0.txt 
* text-domain: WR-webhook-plugin

**/


//Basic Security 
defined ( 'ABSPATH') or die( 'Unauthorized Access' );

add_action( 'save_post', 'wr_post_webhook', 10, 2);
function wr_post_webhook( $post_id, $post ) {
$message =  $post->post_title.' APPLY: '.$post->post_url;
$url = 'https://discord.com/api/webhooks/1017371106874773514/8tMFzuoC9_KBRwnXr1x5LDYMWNiD1OwhWxoTdKfj_toJMP25pr0qCzGSnGM84QaWKqbj';
$args = array( 'body' => array(
'message' => $message
wp_remote_post( $url, $args );

?>