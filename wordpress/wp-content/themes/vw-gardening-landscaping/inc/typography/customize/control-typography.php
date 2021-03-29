<?php
/**
 * Typography control class.
 *
 * @since  1.0.0
 * @access public
 */

class VW_Gardening_Landscaping_Control_Typography extends WP_Customize_Control {

	/**
	 * The type of customize control being rendered.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $type = 'typography';

	/**
	 * Array 
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $l10n = array();

	/**
	 * Set up our control.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @param  string  $id
	 * @param  array   $args
	 * @return void
	 */
	public function __construct( $manager, $id, $args = array() ) {

		// Let the parent class do its thing.
		parent::__construct( $manager, $id, $args );

		// Make sure we have labels.
		$this->l10n = wp_parse_args(
			$this->l10n,
			array(
				'color'       => esc_html__( 'Font Color', 'vw-gardening-landscaping' ),
				'family'      => esc_html__( 'Font Family', 'vw-gardening-landscaping' ),
				'size'        => esc_html__( 'Font Size',   'vw-gardening-landscaping' ),
				'weight'      => esc_html__( 'Font Weight', 'vw-gardening-landscaping' ),
				'style'       => esc_html__( 'Font Style',  'vw-gardening-landscaping' ),
				'line_height' => esc_html__( 'Line Height', 'vw-gardening-landscaping' ),
				'letter_spacing' => esc_html__( 'Letter Spacing', 'vw-gardening-landscaping' ),
			)
		);
	}

	/**
	 * Enqueue scripts/styles.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue() {
		wp_enqueue_script( 'vw-gardening-landscaping-ctypo-customize-controls' );
		wp_enqueue_style(  'vw-gardening-landscaping-ctypo-customize-controls' );
	}

	/**
	 * Add custom parameters to pass to the JS via JSON.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function to_json() {
		parent::to_json();

		// Loop through each of the settings and set up the data for it.
		foreach ( $this->settings as $setting_key => $setting_id ) {

			$this->json[ $setting_key ] = array(
				'link'  => $this->get_link( $setting_key ),
				'value' => $this->value( $setting_key ),
				'label' => isset( $this->l10n[ $setting_key ] ) ? $this->l10n[ $setting_key ] : ''
			);

			if ( 'family' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_families();

			elseif ( 'weight' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_weight_choices();

			elseif ( 'style' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_style_choices();
		}
	}

	/**
	 * Underscore JS template to handle the control's output.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function content_template() { ?>

		<# if ( data.label ) { #>
			<span class="customize-control-title">{{ data.label }}</span>
		<# } #>

		<# if ( data.description ) { #>
			<span class="description customize-control-description">{{{ data.description }}}</span>
		<# } #>

		<ul>

		<# if ( data.family && data.family.choices ) { #>

			<li class="typography-font-family">

				<# if ( data.family.label ) { #>
					<span class="customize-control-title">{{ data.family.label }}</span>
				<# } #>

				<select {{{ data.family.link }}}>

					<# _.each( data.family.choices, function( label, choice ) { #>
						<option value="{{ choice }}" <# if ( choice === data.family.value ) { #> selected="selected" <# } #>>{{ label }}</option>
					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.weight && data.weight.choices ) { #>

			<li class="typography-font-weight">

				<# if ( data.weight.label ) { #>
					<span class="customize-control-title">{{ data.weight.label }}</span>
				<# } #>

				<select {{{ data.weight.link }}}>

					<# _.each( data.weight.choices, function( label, choice ) { #>

						<option value="{{ choice }}" <# if ( choice === data.weight.value ) { #> selected="selected" <# } #>>{{ label }}</option>

					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.style && data.style.choices ) { #>

			<li class="typography-font-style">

				<# if ( data.style.label ) { #>
					<span class="customize-control-title">{{ data.style.label }}</span>
				<# } #>

				<select {{{ data.style.link }}}>

					<# _.each( data.style.choices, function( label, choice ) { #>

						<option value="{{ choice }}" <# if ( choice === data.style.value ) { #> selected="selected" <# } #>>{{ label }}</option>

					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.size ) { #>

			<li class="typography-font-size">

				<# if ( data.size.label ) { #>
					<span class="customize-control-title">{{ data.size.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.size.link }}} value="{{ data.size.value }}" />

			</li>
		<# } #>

		<# if ( data.line_height ) { #>

			<li class="typography-line-height">

				<# if ( data.line_height.label ) { #>
					<span class="customize-control-title">{{ data.line_height.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.line_height.link }}} value="{{ data.line_height.value }}" />

			</li>
		<# } #>

		<# if ( data.letter_spacing ) { #>

			<li class="typography-letter-spacing">

				<# if ( data.letter_spacing.label ) { #>
					<span class="customize-control-title">{{ data.letter_spacing.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.letter_spacing.link }}} value="{{ data.letter_spacing.value }}" />

			</li>
		<# } #>

		</ul>
	<?php }

	/**
	 * Returns the available fonts.  Fonts should have available weights, styles, and subsets.
	 *
	 * @todo Integrate with Google fonts.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_fonts() { return array(); }

	/**
	 * Returns the available font families.
	 *
	 * @todo Pull families from `get_fonts()`.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	function get_font_families() {

		return array(
			'' => __( 'No Fonts', 'vw-gardening-landscaping' ),
        'Abril Fatface' => __( 'Abril Fatface', 'vw-gardening-landscaping' ),
        'Acme' => __( 'Acme', 'vw-gardening-landscaping' ),
        'Anton' => __( 'Anton', 'vw-gardening-landscaping' ),
        'Architects Daughter' => __( 'Architects Daughter', 'vw-gardening-landscaping' ),
        'Arimo' => __( 'Arimo', 'vw-gardening-landscaping' ),
        'Arsenal' => __( 'Arsenal', 'vw-gardening-landscaping' ),
        'Arvo' => __( 'Arvo', 'vw-gardening-landscaping' ),
        'Alegreya' => __( 'Alegreya', 'vw-gardening-landscaping' ),
        'Alfa Slab One' => __( 'Alfa Slab One', 'vw-gardening-landscaping' ),
        'Averia Serif Libre' => __( 'Averia Serif Libre', 'vw-gardening-landscaping' ),
        'Bangers' => __( 'Bangers', 'vw-gardening-landscaping' ),
        'Boogaloo' => __( 'Boogaloo', 'vw-gardening-landscaping' ),
        'Bad Script' => __( 'Bad Script', 'vw-gardening-landscaping' ),
        'Bitter' => __( 'Bitter', 'vw-gardening-landscaping' ),
        'Bree Serif' => __( 'Bree Serif', 'vw-gardening-landscaping' ),
        'BenchNine' => __( 'BenchNine', 'vw-gardening-landscaping' ),
        'Cabin' => __( 'Cabin', 'vw-gardening-landscaping' ),
        'Cardo' => __( 'Cardo', 'vw-gardening-landscaping' ),
        'Courgette' => __( 'Courgette', 'vw-gardening-landscaping' ),
        'Cherry Swash' => __( 'Cherry Swash', 'vw-gardening-landscaping' ),
        'Cormorant Garamond' => __( 'Cormorant Garamond', 'vw-gardening-landscaping' ),
        'Crimson Text' => __( 'Crimson Text', 'vw-gardening-landscaping' ),
        'Cuprum' => __( 'Cuprum', 'vw-gardening-landscaping' ),
        'Cookie' => __( 'Cookie', 'vw-gardening-landscaping' ),
        'Chewy' => __( 'Chewy', 'vw-gardening-landscaping' ),
        'Days One' => __( 'Days One', 'vw-gardening-landscaping' ),
        'Dosis' => __( 'Dosis', 'vw-gardening-landscaping' ),
        'Droid Sans' => __( 'Droid Sans', 'vw-gardening-landscaping' ),
        'Economica' => __( 'Economica', 'vw-gardening-landscaping' ),
        'Fredoka One' => __( 'Fredoka One', 'vw-gardening-landscaping' ),
        'Fjalla One' => __( 'Fjalla One', 'vw-gardening-landscaping' ),
        'Francois One' => __( 'Francois One', 'vw-gardening-landscaping' ),
        'Frank Ruhl Libre' => __( 'Frank Ruhl Libre', 'vw-gardening-landscaping' ),
        'Gloria Hallelujah' => __( 'Gloria Hallelujah', 'vw-gardening-landscaping' ),
        'Great Vibes' => __( 'Great Vibes', 'vw-gardening-landscaping' ),
        'Handlee' => __( 'Handlee', 'vw-gardening-landscaping' ),
        'Hammersmith One' => __( 'Hammersmith One', 'vw-gardening-landscaping' ),
        'Inconsolata' => __( 'Inconsolata', 'vw-gardening-landscaping' ),
        'Indie Flower' => __( 'Indie Flower', 'vw-gardening-landscaping' ),
        'IM Fell English SC' => __( 'IM Fell English SC', 'vw-gardening-landscaping' ),
        'Julius Sans One' => __( 'Julius Sans One', 'vw-gardening-landscaping' ),
        'Josefin Slab' => __( 'Josefin Slab', 'vw-gardening-landscaping' ),
        'Josefin Sans' => __( 'Josefin Sans', 'vw-gardening-landscaping' ),
        'Kanit' => __( 'Kanit', 'vw-gardening-landscaping' ),
        'Lobster' => __( 'Lobster', 'vw-gardening-landscaping' ),
        'Lato' => __( 'Lato', 'vw-gardening-landscaping' ),
        'Lora' => __( 'Lora', 'vw-gardening-landscaping' ),
        'Libre Baskerville' => __( 'Libre Baskerville', 'vw-gardening-landscaping' ),
        'Lobster Two' => __( 'Lobster Two', 'vw-gardening-landscaping' ),
        'Merriweather' => __( 'Merriweather', 'vw-gardening-landscaping' ),
        'Monda' => __( 'Monda', 'vw-gardening-landscaping' ),
        'Montserrat' => __( 'Montserrat', 'vw-gardening-landscaping' ),
        'Muli' => __( 'Muli', 'vw-gardening-landscaping' ),
        'Marck Script' => __( 'Marck Script', 'vw-gardening-landscaping' ),
        'Noto Serif' => __( 'Noto Serif', 'vw-gardening-landscaping' ),
        'Open Sans' => __( 'Open Sans', 'vw-gardening-landscaping' ),
        'Overpass' => __( 'Overpass', 'vw-gardening-landscaping' ),
        'Overpass Mono' => __( 'Overpass Mono', 'vw-gardening-landscaping' ),
        'Oxygen' => __( 'Oxygen', 'vw-gardening-landscaping' ),
        'Orbitron' => __( 'Orbitron', 'vw-gardening-landscaping' ),
        'Patua One' => __( 'Patua One', 'vw-gardening-landscaping' ),
        'Pacifico' => __( 'Pacifico', 'vw-gardening-landscaping' ),
        'Padauk' => __( 'Padauk', 'vw-gardening-landscaping' ),
        'Playball' => __( 'Playball', 'vw-gardening-landscaping' ),
        'Playfair Display' => __( 'Playfair Display', 'vw-gardening-landscaping' ),
        'PT Sans' => __( 'PT Sans', 'vw-gardening-landscaping' ),
        'Philosopher' => __( 'Philosopher', 'vw-gardening-landscaping' ),
        'Permanent Marker' => __( 'Permanent Marker', 'vw-gardening-landscaping' ),
        'Poiret One' => __( 'Poiret One', 'vw-gardening-landscaping' ),
        'Quicksand' => __( 'Quicksand', 'vw-gardening-landscaping' ),
        'Quattrocento Sans' => __( 'Quattrocento Sans', 'vw-gardening-landscaping' ),
        'Raleway' => __( 'Raleway', 'vw-gardening-landscaping' ),
        'Rubik' => __( 'Rubik', 'vw-gardening-landscaping' ),
        'Rokkitt' => __( 'Rokkitt', 'vw-gardening-landscaping' ),
        'Russo One' => __( 'Russo One', 'vw-gardening-landscaping' ),
        'Righteous' => __( 'Righteous', 'vw-gardening-landscaping' ),
        'Slabo' => __( 'Slabo', 'vw-gardening-landscaping' ),
        'Source Sans Pro' => __( 'Source Sans Pro', 'vw-gardening-landscaping' ),
        'Shadows Into Light Two' => __( 'Shadows Into Light Two', 'vw-gardening-landscaping'),
        'Shadows Into Light' => __( 'Shadows Into Light', 'vw-gardening-landscaping' ),
        'Sacramento' => __( 'Sacramento', 'vw-gardening-landscaping' ),
        'Shrikhand' => __( 'Shrikhand', 'vw-gardening-landscaping' ),
        'Tangerine' => __( 'Tangerine', 'vw-gardening-landscaping' ),
        'Ubuntu' => __( 'Ubuntu', 'vw-gardening-landscaping' ),
        'VT323' => __( 'VT323', 'vw-gardening-landscaping' ),
        'Varela Round' => __( 'Varela Round', 'vw-gardening-landscaping' ),
        'Vampiro One' => __( 'Vampiro One', 'vw-gardening-landscaping' ),
        'Vollkorn' => __( 'Vollkorn', 'vw-gardening-landscaping' ),
        'Volkhov' => __( 'Volkhov', 'vw-gardening-landscaping' ),
        'Yanone Kaffeesatz' => __( 'Yanone Kaffeesatz', 'vw-gardening-landscaping' )
		);
	}

	/**
	 * Returns the available font weights.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_font_weight_choices() {

		return array(
			'' => esc_html__( 'No Fonts weight', 'vw-gardening-landscaping' ),
			'100' => esc_html__( 'Thin',       'vw-gardening-landscaping' ),
			'300' => esc_html__( 'Light',      'vw-gardening-landscaping' ),
			'400' => esc_html__( 'Normal',     'vw-gardening-landscaping' ),
			'500' => esc_html__( 'Medium',     'vw-gardening-landscaping' ),
			'700' => esc_html__( 'Bold',       'vw-gardening-landscaping' ),
			'900' => esc_html__( 'Ultra Bold', 'vw-gardening-landscaping' ),
		);
	}

	/**
	 * Returns the available font styles.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_font_style_choices() {

		return array(
			'' => esc_html__( 'No Fonts Style', 'vw-gardening-landscaping' ),
			'normal'  => esc_html__( 'Normal', 'vw-gardening-landscaping' ),
			'italic'  => esc_html__( 'Italic', 'vw-gardening-landscaping' ),
			'oblique' => esc_html__( 'Oblique', 'vw-gardening-landscaping' )
		);
	}
}
