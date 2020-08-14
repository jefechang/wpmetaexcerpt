
<?php
/**
 * Plugin Name: Wordpress Excerpt to Meta description
 * Description: Snippet per aggiungere dinamicamente l'excerpt degli articoli alla description e avere quindi controllo sul testo che facebook visualizza subito dopo l'articolo. Testato con developers.facebook.com/tools/debug/
 * Plugin URI:  https://github.com/jefechang
 * Version:     1.0.0
 * Author:      JefeChang
 * Author URI:  https://github.com/jefechang
 * Text Domain: effecimetaexcerpt
 */
defined( 'ABSPATH' ) or die ('No script kiddies please!');

function effeci_metaexcerpt () {
if ( is_single() ) {
?><meta name="description" content="<?php echo wp_strip_all_tags( get_the_excerpt(), true ); ?>" />
<?php } 
}
add_action( 'wp_head', 'effeci_metaexcerpt', 10 );