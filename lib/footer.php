<?php
add_action('wp_footer', 'FlashCounterFooter');
function FlashCounterFooter()
{
	if( get_option( 'FlashCounterID' ) )
	{
?>
		<script type="text/javascript" src="http://fc.webmasterpro.de/counter.php?name=<?php echo get_option( 'FlashCounterID' ); ?>"></script>
		<noscript><div><img src="http://fc.webmasterpro.de/as_noscript.php?name=<?php echo get_option( 'FlashCounterID' ); ?>" style="width:1px;height:1px;" alt="" /></div></noscript>
<?php
	}
}
?>