# Multi Site Supported Slider for Wordpress
Slider Script to show multi website in one slider Wordpress

Script have three different sliders. Main, top, right.

Yall.js used to lazy load images.

In high traffic which produce high load to databeses.
Database results saved txt files to decrease database requests.

All try files can be used by cron jobs or in proper wp-includes/functions.php 

function dothisfunction() {    include "/slider/tries/try.php"; }
add_action( 'publish_post', 'dothisfunction' );
can be added.

File positions and wpdb parameters should edited to use.

To use, add add.php in proper place in your wordpress theme.


