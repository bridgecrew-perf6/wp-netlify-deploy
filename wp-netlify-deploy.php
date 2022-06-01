<?php
/*
Plugin Name: WP Netlify Deploy
Plugin URI: https://github.com/wearefar
Description: Trigger Netlify deploys form the WordPress admin
Author: Victor Guerrero
Version: 0.1
Author URI: https://wearefar.com
Requires PHP: 7.4
Update URI: false
License: MIT
*/

require __DIR__.'/src/deploy.php';

new WeAreFar\WPNetlify\Deploy(__FILE__);
