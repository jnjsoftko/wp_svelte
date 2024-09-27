<?php
// Apply a $callback to all paths in the template directory matching a $pattern.
function pattern_map( callable $callback, string $pattern ) {
	return array_map( $callback, glob( get_template_directory() . $pattern ) );
}

// Convert a template directory path to a URI.
function glob_path_to_uri( string $file_path ) {
	$template_directory_length = strlen( get_template_directory() );
	$file_url = get_template_directory_uri() . substr( $file_path, $template_directory_length );
	return $file_url;
}

function enqueue_svelte_styles () {
	$path = "/svelte-project/dist/assets/";
	$style_uris = pattern_map("glob_path_to_uri", $path . "*.css");
	foreach ($style_uris as $style_uri) {
		wp_enqueue_style(basename($style_uri), $style_uri);
	}
};
add_action('wp_enqueue_styles', 'enqueue_svelte_styles');

function enqueue_svelte_scripts () {
  $path = "/svelte-project/dist/assets/";
	$script_uris = pattern_map("glob_path_to_uri", $path . "*.js");
	foreach ($script_uris as $script_uri) {
		wp_enqueue_script(basename($script_uri), $script_uri);
	}
};
add_action('wp_enqueue_scripts', 'enqueue_svelte_scripts');

// Make a type="module" script tag
function script_tag(string $src_handle, string $src_url) {
	$escaped_url = esc_url($src_url);
	return "<script id=\"{$src_handle}\" type=\"module\" crossorigin src=\"{$escaped_url}\"></script>";
}

// Converts script tags that load svelte scripts into scripts of type="module".
// Ignores scripts that aren't part svelte scripts.
//
// Currently enqueued scripts are loaded via bare script tags.
// Meanwhile, Svelte needs the script tags to be of type="module"
function add_module_to_svelte_scripts ($tag, $handle, $src) {
  $path = "/svelte-project/dist/assets/";
	$script_uris = pattern_map("glob_path_to_uri", $path . "*.js");
	// $handle corresponds to the first argument to wp_enqueue_script
  // Acts as an ID for a URI. Since our wp_enqueue_scripts use the basename
  // we must use the basename again here.
  $script_handles = array_map('basename', $script_uris);
	if (!in_array($handle, $script_handles)) {
		return $tag;
	}
	return script_tag($handle, $src);
};


add_filter('script_loader_tag', 'add_module_to_svelte_scripts' , 10, 3);