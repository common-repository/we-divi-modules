<?php

class WEDIVI_ExSocial_Follow extends ET_Builder_Module {
	public $slug            = 'wedivi_ex_social_follow';
	public $vb_support      = 'on';
	public $child_slug      = 'wedivi_ex_social_follow_item';
	public $main_css_element = 'ul%%order_class%%';
	protected $module_credits = array(
		'module_uri' => 'https://webextent.net',
		'author'     => 'Mohammad Tanjid',
		'author_uri' => 'https://webextent.net',
	);
	public function get_custom_css_fields_config(){
		return array(
			'ex_site_li'	=> array(
				'label'		=> esc_html__('li', 'wedivi-we-divi-modules'),
				'selector'	=> '%%order_class%% li',
				'no_space_before_selector'	=> true
			),
			'ex_site_a'	=> array(
				'label'		=> esc_html__('a', 'wedivi-we-divi-modules'),
				'selector'	=> '%%order_class%% a',
				'no_space_before_selector'	=> true
			),
			'ex_site_span'	=> array(
				'label'		=> esc_html__('span', 'wedivi-we-divi-modules'),
				'selector'	=> '%%order_class%% a span',
				'no_space_before_selector'	=> true
			)

		);
	}
	public function get_advanced_fields_config(){
		return array(
			'link_options'	=> false,
			'text'			=> array(
				'text_orientation'	=> array(
					'exclude_options'	=> array('justified')
				),
				'options'	=> array(
					'text_orientation'	=> array(
						'label'		=> esc_html( 'Icons Aligment', 'wedivi-we-divi-modules' ),
						'toggle_slug'	=> 'ex_align'
					)
					),
				'responsive'	=> false
			),
			'fonts'			=> false,
			'background'	=> array(
				'css'		=> array(
					'main'	=> '%%order_class%%'
				)
			),
			'borders'	=> array(
				'default'	=> array(
					'css'	=> array(
						'main'	=> array(
							'border_styles'	=> "%%order_class%%",
							'border_radii'	=> "%%order_class%% a"
						)
					),
					'defaults'	=> array(
						'border_radii'	=> 'on|3px|3px|3px|3px',
						'border_styles'	=> array(
							'width'	=> '0px',
							'color'	=> '#cccccc',
							'style'	=> 'solid'
						),
					
					),
				)
			),
			'margin_padding'	=> array(
				'css'	=> array(
					'important'	=> 'all'
				)
			)
		);
	}
	public function init() {
		$this->name = esc_html__( 'Extended SM Follow', 'wedivi-we-divi-modules' );
		$this->child_item_text = esc_html__( 'Site Links', 'wedivi-we-divi-modules' );
		$this->settings_modal_toggles = array(
			'advanced'	=> array(
				'toggles'	=> array(
					'ex_align'	=> esc_html( 'Aligment', 'wedivi-we-divi-modules' )
				)
			)
		);
	}

	public function get_fields() {
		$fields = array(
			'ex_target_site'	=> array(
			'label'			=> esc_html__('Target', 'wedivi-we-divi-modules'),
			'type'			=> 'select',
			'options'		=> array(
				'off'		=> esc_html__('In the same window', 'wedivi-we-divi-modules'),
				'on'		=> esc_html('In the new tab', 'wedivi-we-divi-modules' )
			),
			'option_category'	=> 'configuration',
			'toggle_slug'		=> 'icon'
		) );
		return $fields;
	}
	public function before_render(){
		global $we_site_link;
		$we_site_target = $this->props['ex_target_site'];
		$we_site_link  = array(
			'target_url'	=> $we_site_target
		);
	}
	public function render( $attrs, $content = null, $render_slug ) {
		$content = '';
		$video_background = $this->video_background();
		$parallax_background = $this->get_parallax_image_background();
		$background_layout =  et_pb_background_layout_options()->get_background_layout_attrs( $this->props );
		$aligment		   = 'right' === $this->props['text_orientation'] ? 'flex-end' : $this->props['text_orientation'];
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'	=> '%%order_class%%',
			'declaration'	=> sprintf('
			-webkit-box-pack: %1$s;
			-ms-flex-pack: %1$s;
			  justify-content: %1$s;
			', esc_html( $aligment ) )
		) );
		return sprintf('<ul %6$s class="%5$s we-style-one" %4$s>
		%3$s
		%1$s
		%2$s
		</ul>',
		$this->content,
		$video_background,
		$parallax_background,
		et_core_esc_previously( $background_layout ),
		$this->module_classname($render_slug),
		$this->module_id()
		);
	}
}

new WEDIVI_ExSocial_Follow;
