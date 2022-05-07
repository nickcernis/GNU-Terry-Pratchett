<?php
/**
 * The GNU Terry Pratchett admin page at Settings → GNU Terry Pratchett.
 *
 * @package gnu-terry-pratchett
 */

class GNUTerryPratchettOptions {
	public function __construct() {
		register_setting(
			'gnu_terry_pratchett_options',
			'gnu_terry_pratchett',
			[
				'sanitize_callback' => [ $this, 'gnu_terry_pratchett_sanitize' ],
				'default' => [ 'header' => 'GNU Terry Pratchett' ],
			]
		);

		add_action( 'admin_menu', [ $this, 'gnu_terry_pratchett_add_options_page' ] );
		add_action( 'admin_init', [ $this, 'gnu_terry_pratchett_options_page_init' ] );
	}

	public function gnu_terry_pratchett_add_options_page() {
		add_options_page(
			'GNU Terry Pratchett', // Page title.
			'GNU Terry Pratchett', // Menu title.
			'manage_options', // Capability.
			'gnu-terry-pratchett', // Menu slug.
			[ $this, 'gnu_terry_pratchett_create_admin_page' ]
		);
	}

	public function gnu_terry_pratchett_create_admin_page() {
		?>
		<div class="wrap">
			<h2>GNU Terry Pratchett</h2>
			<form method="post" action="options.php">
				<?php
					settings_fields( 'gnu_terry_pratchett_options' );
					do_settings_sections( 'gnu-terry-pratchett-admin' );
					submit_button();
				?>
			</form>
		</div>
	    <?php
    }

	public function gnu_terry_pratchett_options_page_init() {
		add_settings_section(
			'gnu_terry_pratchett_setting_section',
			'',
			'',
			'gnu-terry-pratchett-admin'
		);

		add_settings_field(
			'header',
			esc_html__( 'X-Clacks-Overhead header', 'gnu-terry-pratchett' ),
			[ $this, 'header_field' ],
			'gnu-terry-pratchett-admin',
			'gnu_terry_pratchett_setting_section',
			[ 'label_for' => 'header' ]
		);
	}

	public function gnu_terry_pratchett_sanitize( $input ) {
		$sanitized_values = [];

		if ( isset( $input['header'] ) ) {
			$sanitized_values['header'] = sanitize_text_field( $input['header'] );
		}

		return $sanitized_values;
	}

	public function header_field() {
		$options = get_option( 'gnu_terry_pratchett' );
		$header  = isset( $options['header'] )
					? esc_attr( $options['header'])
					: '';

		echo "<input
				class=\"regular-text\"
				type=\"text\"
				name=\"gnu_terry_pratchett[header]\"
				id=\"header\"
				value=\"{$header}\">";

        echo '<p>' . esc_html__( 'A comma-separated list of names to honor.', 'gnu-terry-pratchett' ) . '</p>';
	}
}
