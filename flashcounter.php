<?php
/*
Plugin Name: FlashCounter
Description: Includes the FlashCounter to your Page.
Author: Ninos Ego
Version: 1.1.0
Author URI: http://ninosego.de/
*/

load_plugin_textdomain('flashcounter', false, basename( dirname( __FILE__ ) ) . '/languages' );

require_once('lib/admin.php');
require_once('lib/footer.php');