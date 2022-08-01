<?php
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'theme_register_plugin' );
function theme_register_plugin() {
	$plugins = [
		[
			'name'        => 'Advanced Custom Fields',
			'slug'        => 'advanced-custom-fields',
			'is_callable' => 'acf',
			'required'    => true,
			'force_deactivation' => true,
		],
		[
			'name'        => 'Classic Editor (Optional)',
			'slug'        => 'classic-editor',
			'required'    => false,
		]
	];

	$config = array(
		'domain'       => 'weepie',
		'default_path' => '',
		'menu'         => 'install-required-plugins',
		'parent_slug'  => 'themes.php',
		'capability'   => 'edit_theme_options',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => false,
		'message'      => '',

		'strings'      => array(
			'page_title'                      => __( 'Install Required Plugins', 'weepie' ),
			'menu_title'                      => __( 'Install Plugins', 'weepie' ),
			// translators: %s: plugin name.
			'installing'                      => __( 'Installing Plugin: %s', 'weepie' ),
			// translators: %s: plugin name.
			'updating'                        => __( 'Updating Plugin: %s', 'weepie' ),
			'oops'                            => __( 'Something went wrong with the plugin API.', 'weepie' ),
			'notice_can_install_required'     => _n_noop(
				// translators: 1: plugin name(s).
				'This theme requires the following plugin: %1$s.',
				'This theme requires the following plugins: %1$s.',
				'weepie'
			),
			'notice_can_install_recommended'  => _n_noop(
				// translators: 1: plugin name(s).
				'This theme recommends the following plugin: %1$s.',
				'This theme recommends the following plugins: %1$s.',
				'weepie'
			),
			'notice_ask_to_update'            => _n_noop(
				// translators: 1: plugin name(s).
				'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
				'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
				'weepie'
			),
			'notice_ask_to_update_maybe'      => _n_noop(
				// translators: 1: plugin name(s).
				'There is an update available for: %1$s.',
				'There are updates available for the following plugins: %1$s.',
				'weepie'
			),
			'notice_can_activate_required'    => _n_noop(
				// translators: 1: plugin name(s).
				'The following required plugin is currently inactive: %1$s.',
				'The following required plugins are currently inactive: %1$s.',
				'weepie'
			),
			'notice_can_activate_recommended' => _n_noop(
				// translators: 1: plugin name(s).
				'The following recommended plugin is currently inactive: %1$s.',
				'The following recommended plugins are currently inactive: %1$s.',
				'weepie'
			),
			'install_link'                    => _n_noop(
				'Begin installing plugin',
				'Begin installing plugins',
				'weepie'
			),
			'update_link' 					  => _n_noop(
				'Begin updating plugin',
				'Begin updating plugins',
				'weepie'
			),
			'activate_link'                   => _n_noop(
				'Begin activating plugin',
				'Begin activating plugins',
				'weepie'
			),
			'return'                          => __( 'Return to Required Plugins Installer', 'weepie' ),
			'plugin_activated'                => __( 'Plugin activated successfully.', 'weepie' ),
			'activated_successfully'          => __( 'The following plugin was activated successfully:', 'weepie' ),
			// translators: 1: plugin name.
			'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'weepie' ),
			// translators: 1: plugin name.
			'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'weepie' ),
			// translators: 1: dashboard link.
			'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'weepie' ),
			'dismiss'                         => __( 'Dismiss this notice', 'weepie' ),
			'notice_cannot_install_activate'  => __( 'There are one or more required or recommended plugins to install, update or activate.', 'weepie' ),
			'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'weepie' ),

			'nag_type'                        => '', // Determines admin notice type - can only be one of the typical WP notice classes, such as 'updated', 'update-nag', 'notice-warning', 'notice-info' or 'error'. Some of which may not work as expected in older WP versions.
		),
	);

	tgmpa( $plugins, $config );
}
