<?php
/**
 * Plugin Name: Fix Mixed Content
 * Description: Fixes mixed content warnings by adjusting URLs based on the current protocol
 * Version: 1.0
 * Author: Claude
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Fix URLs to match the current protocol
 */
function fmc_fix_mixed_content() {
    // Skip if not needed
    if (!is_ssl()) {
        return;
    }

    // Buffer the output
    ob_start(function($content) {
        // Replace http:// URLs with https:// for WordPress core assets
        $content = str_replace(
            'http://' . $_SERVER['HTTP_HOST'],
            'https://' . $_SERVER['HTTP_HOST'],
            $content
        );
        
        return $content;
    });
}

// Priority 1 to run before other plugins
add_action('template_redirect', 'fmc_fix_mixed_content', 1);