<?php
add_action('admin_menu', 'FlashCounterMenu');
function FlashCounterMenu()
{
	add_options_page(__('FlashCounter', 'flashcounter'), __('FlashCounter', 'flashcounter'),10, 'flashcounter', 'FlashCounterAdmin');
}

add_action('admin_head','flashcounter_add_admin_stylesheet');
function flashcounter_add_admin_stylesheet() {
	echo '<link rel="stylesheet" href="' . plugin_dir_url( __FILE__ ). '../css/admin.css" type="text/css" />';
}

function FlashCounterAdmin()
{
	$FlashCounter = Array();
	$FlashCounter['id'] = isset($_POST['id']) ? $_POST['id'] : null;
	$FlashCounter['submit'] = isset($_POST['submit']) ? $_POST['submit'] : null;

	if( isset( $FlashCounter['id'] ) )
	{
			update_option( 'FlashCounterID', $FlashCounter['id'] );
?>
			<div class="updated settings-error" id="setting-error-settings_updated"> 
			<p><strong><?php _e('Settings saved.', 'flashcounter'); ?></strong></p></div>
<?php
	}
?>
	<div class="wrap">
		<div class="icon32 icon32-posts-post" id="icon-flashcounter"><br></div><h2><?php _e('FlashCounter', 'flashcounter'); ?></h2>
		<form action="" method="post">
			<table class="form-table">
				<tbody>
					<tr valign="top">
						<th scope="row"><label for="blogdescription"><?php _e('FlashCounter User', 'flashcounter'); ?></label></th>
						<td>
							<input type="text" name="id" value="<?php echo get_option( 'FlashCounterID' ); ?>" />
							<span class="description"><?php _e('Please add here the User of your FlashCounter Site.', 'flashcounter'); ?></span>
							<span class="description"><?php _e("You don't have a FlashCounter Account?", 'flashcounter'); ?> <a href="http://fc.webmasterpro.de/anmeldung.html" title="FlashCounter" target="_blank"><?php _e('Just create one!', 'flashcounter'); ?></a></span>
						</td>
					</tr>
				</tbody>
			</table>
			<p class="submit"><input type="submit" value="<?php _e('Save Changes', 'flashcounter'); ?>" class="button-primary" id="submit" name="submit"></p>
		</form>
	</div>
<?php
}
?>