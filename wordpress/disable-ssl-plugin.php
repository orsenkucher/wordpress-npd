<?php
// Load WordPress core
require_once('wp-load.php');

// Deactivate Really Simple SSL plugin
deactivate_plugins('really-simple-ssl/rlrsssl-really-simple-ssl.php');

// Get active plugins
$active_plugins = get_option('active_plugins');
echo "<p>Current active plugins:</p>";
echo "<pre>";
print_r($active_plugins);
echo "</pre>";

echo "<p>Really Simple SSL plugin has been deactivated.</p>";
echo "<p><a href='/'>Go to homepage</a></p>";