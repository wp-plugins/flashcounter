<?php
/*
Plugin Name: FlashCounter
Description: Includes the FlashCounter to your Page.
Author: Ninos Ego
Version: 1.0.0
Author URI: http://ninosego.de/
*/

load_plugin_textdomain('flashcounter', false, basename( dirname( __FILE__ ) ) . '/languages' );

add_action('admin_menu', 'FlashCounterMenu');
function FlashCounterMenu()
{
	add_options_page(__('FlashCounter', 'flashcounter'), __('FlashCounter', 'flashcounter'),10, 'flashcounter', 'FlashCounterOption');
}

function FlashCounterOption()
{
	$FlashCounter = Array();
	$FlashCounter['id'] = isset($_POST['id']) ? $_POST['id'] : null;

	if( isset( $FlashCounter['id'] ) )
	{
			update_option( 'FlashCounterID', $FlashCounter['id'] );
?>
			<div class="updated settings-error" id="setting-error-settings_updated"> 
			<p><strong><?php _e('Settings were updated.', 'flashcounter'); ?></strong></p></div>
<?php
	}

	_e('Please add here the User of your FlashCounter Site.', 'flashcounter');
?>
	<form action="" method="post">
		<p><?php _e('FlashCounter User', 'flashcounter'); ?> <input type="text" name="id" value="<?php echo get_option( 'FlashCounterID' ); ?>" /></p>
		<p><input type="submit" name="SubmitBrowserCheck" value="<?php _e('Update', 'flashcounter'); ?>" /></p>
	</form>
<?php
}

add_action('wp_footer', 'FlashCounterFooter');
function FlashCounterFooter()
{
?>
	<script type="text/javascript" src="http://fc.webmasterpro.de/counter.php?name=<?php echo get_option( 'FlashCounterID' ); ?>"></script>
	<noscript><div><img src="http://fc.webmasterpro.de/as_noscript.php?name=<?php echo get_option( 'FlashCounterID' ); ?>" style="width:1px;height:1px;" alt="" /></div></noscript>
<?php
}
?>