<?php

class WEDIVI_ExSocial_Follow_Item extends ET_Builder_Module {

	public $slug                        = 'wedivi_ex_social_follow_item';
	public $vb_support                  = 'on';
	public $type                        = 'child';
	public $child_title_var             = 'we_ex_social_networks';
	public $main_css_element 			= 'li%%order_class%%';
	protected $module_credits = array(
		'module_uri' => 'https://webextent.net',
		'author'     => 'webextent',
		'author_uri' => 'https://webextent.net',
	);
	public function init() {
		$this->name                        = esc_html__( 'Extent Site Link', 'wedivi-we-divi-modules' );
		$this->plural                      = esc_html__( 'Extent Site Links', 'wedivi-we-divi-modules' );
		$this->settings_modal_toggles = array(
			'general'		=> array(
				'toggles'	=> array(
					'main_content'	=> esc_html__('Site List', 'wedivi-we-divi-modules'),
					'link'			=> esc_html__('Link', 'wedivi-we-divi-modules')
				)
			)
		);
		
	}
	public function get_advanced_fields_config(){
		$advanced_fields = array(
			'background'	=> array(
				'css'	=> array(
					'main'		=> "%%order_class%% a",
					'important'	=> true,
					
				),
			),
			'margin_padding'	=> array(
				'css'	=> array(
					'padding'	=> 'ul.we-style-one %%order_class%% a',
					'main'		=> '%%order_class%%',
					'important'	=> true
				)
			),
			'borders'	=> array(
				'default'	=> array(
					'css'	=> array(
						'main'	=> array(
							'border_styles'	=> "%%order_class%% a",
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
			'box_shadow'	=> array(
				'default'	=> array(
					'css'	=> array(
						'main'	=> '%%order_class%% a span',
						'important'	=> true
					)
				)
			),
			'link_options'	=> false,
			'max_width'		=> false,
			'fonts'			=> false,
			'text'			=> false
		);
		return $advanced_fields;
	}
	public function get_fields() {
		$we_ex_social_fields = array(
			'we_ex_social_networks'	=> array(

				'label'				=> esc_html__('Site Names', 'wedivi-we-divi-modules'),
				'type'				=> 'select',
				'option_category'	=> 'basic_option',
				'options'			=> array(
					''						=> esc_html__('Select an item', 'wedivi-we-divi-modules' ),
					'Facebook'				=>  esc_html__('Facebook', 'wedivi-we-divi-modules'),
					'Twitter'				=> esc_html__('Twitter', 'wedivi-we-divi-modules'),
					'Youtube'				=> esc_html__('Youtube', 'wedivi-we-divi-modules' ),
					'Pinterest'				=> esc_html__('Pinterest', 'wedivi-we-divi-modules'),
					'Linkedin'				=> esc_html__('Linkedin', 'wedivi-we-divi-modules'),
					'Tumblr'				=> esc_html__('Tumblr', 'wedivi-we-divi-modules' ),
					'Instagram'				=> esc_html__('Instagram', 'wedivi-we-divi-modules' ),
					'Spotify'				=> esc_html__('Spotify', 'wedivi-we-divi-modules' ),
					'Skype'					=> esc_html__('Skype', 'wedivi-we-divi-modules'),
					'Vimeo'					=> esc_html__('Vimeo', 'wedivi-we-divi-modules'),
					'Reddit'				=> esc_html__('Reddit', 'wedivi-we-divi-modules'),
					'Flickr'				=> esc_html__('flickr', 'wedivi-we-divi-modules'),
					'StumbleUpon'			=> esc_html__('StumbleUpon'),
					'WhatsApp'				=> esc_html__('WhatsApp', 'wedivi-we-divi-modules'),
					'Snapchat'				=> esc_html__('SnapChat', 'wedivi-we-divi-modules'),
					'Amazon'				=> esc_html__('Amazon', 'wedivi-we-divi-modules'),
					'Etsy'					=> esc_html__('Etsy', 'wedivi-we-divi-modules'),
					'Ebay'					=> esc_html__('eBay', 'wedivi-we-divi-modules' ),
					'Etsy'					=> esc_html__('Etsy', 'wedivi-we-divi-modules' ),
					'Behance'		=> esc_html__('Behance', 'wedivi-we-divi-modules'),
					'Github'			=> esc_html__('Github', 'wedivi-we-divi-modules'),
					'Soundcloud'			=> esc_html__('Soundcloud', 'wedivi-we-divi-modules' ),
					'Mixcloud'				=> esc_html__('Mixcloud', 'wedivi-we-divi-modules'),
					'Xing'					=> esc_html__('Xing', 'wedivi-we-divi-modules' ),
					'Telegram'		=> esc_html__('Telegram', 'wedivi-we-divi-modules'),
					'GetPocket'			=> esc_html__('Pocket', 'wedivi-we-divi-modules'),
					'500px'					=> esc_html__('500px', 'wedivi-we-divi-modules'),
					'Blackberry'			=> esc_html__('Blackberry App', 'wedivi-we-divi-modules'),
					'Diaspora'				=> esc_html__('Diaspora', 'wedivi-we-divi-modules'),
					'GoodReads'				=> esc_html__('goodreads', 'wedivi-we-divi-modules'),
					'iTunes'				=> esc_html__('iTunes', 'wedivi-we-divi-modules'),
					'Medium'				=> esc_html__('Medium', 'wedivi-we-divi-modules'),
					'Patreon'				=> esc_html__('Patreon', 'wedivi-we-divi-modules'),
					'StackExchange'		=> esc_html__('Stack Exchange', 'wedivi-we-divi-modules'),
					'Twitch'				=> esc_html__('Twitch', 'wedivi-we-divi-modules'),
					'Untappd'				=> esc_html__('Untappd', 'wedivi-we-divi-modules'),
					'Yelp'					=> esc_html__('yelp', 'wedivi-we-divi-modules'),
					'WordPress'				=> esc_html__('WordPress', 'wedivi-we-divi-modules'),
					'VK'					=> esc_html__('VK', 'wedivi-we-divi-modules'),
					'Viber'					=> esc_html__('Viber', 'wedivi-we-divi-modules'),
					'StackOverflow'		=> esc_html__('Stack overflow', 'wedivi-we-divi-modules'),
					'Quora'					=> esc_html__('Quora', 'wedivi-we-divi-modules'),
					'Periscope'				=> esc_html__('Periscope', 'wedivi-we-divi-modules'),
					'Odnoklassniki'			=> esc_html__('Odnoklassniki', 'wedivi-we-divi-modules'),
					'Meetup'				=> esc_html__('Meetup', 'wedivi-we-divi-modules'),
					'Mastodon'				=> esc_html__('Mastodon', 'wedivi-we-divi-modules'),
					'Imdb'					=> esc_html__('Imdb', 'wedivi-we-divi-modules'),
					'Houzz'					=> esc_html__('houzz', 'wedivi-we-divi-modules'),
					'GooglePlay'			=> esc_html__('Google Play', 'wedivi-we-divi-modules'),
					'Flipboard'				=> esc_html__('flipboard', 'wedivi-we-divi-modules'),
					'Discord'				=> esc_html__('Discord', 'wedivi-we-divi-modules'),
					'Deviantart'			=> esc_html__('DeviantArt', 'wedivi-we-divi-modules'),
					'Codepen'				=> esc_html__('Codepen', 'wedivi-we-divi-modules'),
					'Blogger'				=> esc_html__('blogger', 'wedivi-we-divi-modules'),
					'Bitbucket'				=> esc_html__('Bitbucket', 'wedivi-we-divi-modules' ),
					'Bandcamp'				=> esc_html__('Bandcamp', 'wedivi-we-divi-modules'),
					'Rss'					=> esc_html__('Rss', 'wedivi-we-divi-modules'),
				),
				'default_on_child' => true,
				'toggle_slug'		=> 'main_content'
			),
			'content' => array(
				'label'       => esc_html__( 'Body', 'wedivi-we-divi-modules' ),
				'type'        => 'hidden',
				'toggle_slug' => 'main_content'
			),
			'site_url'	=> array(
				'label'				=> esc_html__('Site URL', 'wedivi-we-divi-modules'),
				'type'				=> 'text',
				'option_category'	=> 'basic_option',
				'description'		=> esc_html__('URL for the site/account', 'wedivi-we-divi-modules'),
				'toggle_slug'		=> 'link',
				'depends_on'		=> array(
					'we_ex_social_networks'
				),
				'depends_show_if_not'	=> array('Skype', 'WhatsApp', 'Spotify', 'Tumblr', 'iTunes', 'Reddit', 'Snapchat', 'Telegram', 'Untappd', 'Viber'),
				'default_on_front'		=> '#',
				'dynamic_content'		=> 'url'
			),
			'ex_skype_url'		=> array(
				'label'				=> esc_html__('Skype username', 'wedivi-we-divi-modules' ),
				'type'				=> 'text',
				'option_category'	=> 'basic_option',
				'description'		=> esc_html__('Here you can add your skype username', 'wedivi-we-divi-modules' ),
				'toggle_slug'		=> 'main_content',
				'depends_on'		=> array(
					'we_ex_social_networks'
				),
				'depends_show_if'	=> 'Skype'
			),
			'ex_skype_action'		=> array(
				'label'				=> esc_html__('Skype Action', 'wedivi-we-divi-modules' ),
				'type'				=> 'select',
				'options'			=> array(
					'chat'			=> esc_html__('Chat', 'wedivi-we-divi-modules'),
					'call'			=> esc_html__('Call', 'wedivi-we-divi-modules' )
				),
				'option_category'	=> 'basic_option',
				'description'		=> esc_html__('You can select action would be call or chat', 'wedivi-we-divi-modules' ),
				'toggle_slug'		=> 'main_content',
				'depends_show_if'	=> 'Skype',
				'depends_on'		=> array(
					'we_ex_social_networks'
				),
				'default_on_front'	=> 'chat'
			),
			'ex_whatsapp' 			=> array(
				'label'		=> __("Whatsapp number ( Omit any zeroes, brackets or dashes )", 'wedivi-we-divi-modules'),
				'description'	=> esc_html__('Here you can add your whatsapp number without any zeroes, brackets or dashes when adding the phone number in international format. For a detailed explanation on international numbers, read this <a href="https://faq.whatsapp.com/en/general/21016748">article</a>. ( e.g 8801919919191 not (+880)xxx)', 'wedivi-we-divi-modules'),
				'option_category'	=> 'basic_option',
				'toggle_slug'		=> 'main_content',
				'depends_show_if'	=> 'WhatsApp',
				'depends_on'		=> array(
					'we_ex_social_networks'
				),
				'type'				=> 'number'
			),
			'ex_tumblr_url'			=> array(
				'label'				=> esc_html__('Tumblr blog name', 'wedivi-we-divi-modules'),
				'description'		=> esc_html__('Only add tumblr blog name ( not the full url )', 'wedivi-we-divi-modules' ),
				'type'				=> 'text',
				'option_category'	=> 'basic_option',
				'depends_on'		=> array( 'we_ex_social_networks' ),
				'depends_show_if'	=> 'Tumblr',
				'toggle_slug'		=> 'main_content'
			),
			'ex_reddit_url'			=> array(
				'label'				=> esc_html__('Reddit Username', 'wedivi-we-divi-modules' ),
				'description'		=> esc_html__('Add username of reddit simply', 'wedivi-we-divi-modules' ),
				'type'				=> 'text',
				'option_category'	=> 'basic_option',
				'depends_on'		=> array('we_ex_social_networks'),
				'depends_show_if'	=> 'Reddit',
				'toggle_slug'		=> 'main_content'
			),
			'ex_snapchat_url'		=> array(
				'label'				=> esc_html__('Snapchat username', '' ),
				'description'		=> esc_html__('Add your snpachat username here', 'wedivi-we-divi-modules'),
				'type'				=> 'text',
				'option_category'	=> 'basic_option',
				'depends_on'		=> array('we_ex_social_networks'),
				'depends_show_if'	=> 'Snapchat',
				'toggle_slug'		=> 'main_content'
			),
			'ex_telegram_url'		=> array(
				'label'			=> esc_html__('Telegram username', '' ),
				'Description'	=> esc_html__('Add telegram username here', '' ),
				'type'			=> 'text',
				'option_category'	=> 'basic_option',
				'depends_on'		=> array('we_ex_social_networks'),
				'depends_show_if'	=> 'Tlegram',
				'toggle_slug'		=> 'main_content'
			),
			'ex_blackberry_url'		=> array(
				'label'				=> esc_html__('Blackberry username', 'wedivi-we-divi-modules'),
				'description'		=> esc_html__('Add blackberry username here', 'wedivi-we-divi-modules'),
				'type'				=> 'text',
				'option_category'	=> 'basic_option',
				'depends_on'		=> array('we_ex_social_networks'),
				'depends_show_if'	=> 'Blackberry',
				'toggle_slug'		=> 'main_content'
			),
			'ex_itunes_url'			=> array(
				'label'				=> esc_html__('iTunes Username', 'wedivi-we-divi-modules'),
				'description'		=> esc_html__('You can add here your itunes username', 'wedivi-we-divi-modules' ),
				'type'				=> 'text',
				'option_category'	=> 'basic_option',
				'toggle_slug'		=> 'main_content',
				'depends_on'		=> array('we_ex_social_networks'),
				'depends_show_if'	=> 'iTunes'
			),
			'ex_untappd_url'		=> array(
				'label'				=> esc_html__('Untappd Username', 'wedivi-we-divi-modules'),
				'description'		=> esc_html__('You can add here your Untappd username', 'wedivi-we-divi-modules' ),
				'type'				=> 'text',
				'option_category'	=> 'basic_option',
				'toggle_slug'		=> 'main_content',
				'depends_on'		=> array('we_ex_social_networks'),
				'depends_show_if'	=> 'Untappd'
			),
			'ex_viber_url'		=> array(
				'label'				=> esc_html__('Viber Username', 'wedivi-we-divi-modules'),
				'description'		=> esc_html__('You can add here your Vibe username', 'wedivi-we-divi-modules' ),
				'type'				=> 'text',
				'option_category'	=> 'basic_option',
				'toggle_slug'		=> 'main_content',
				'depends_on'		=> array('we_ex_social_networks'),
				'depends_show_if'	=> 'Viber'
			),
			'ex_spotify_type'		=> array(
				'label'				=> esc_html__('Spotify type', 'wedivi-we-divi-modules'),
				'depends_on'		=> array(
					'we_ex_social_networks'
				),
				'depends_show_if'	=> 'Spotify',
				'type'				=> 'select',
				'description'		=> esc_html__('You can select an spotify type', 'wedivi-we-divi-modules' ),
				'options'			=> array(
					'artist'		=> esc_html__('Artist', 'wedivi-we-divi-modules'),
					'album'			=> esc_html__('Album', 'wedivi-we-divi-modules'),
					'track'			=> esc_html__('Track', 'wedivi-we-divi-modules')
				),
				'option_category'	=> 'basic_option',
				'default_on_front'	=> 'artist',
				'toggle_slug'		=> 'main_content'
			),
			'ex_spotify_id'			=> array(
				'label'				=> esc_html__('Spotify ID', 'wedivi-we-divi-modules'),
				'description'		=> esc_html__('Here you can add your tract/album/artist ID', 'wedivi-we-divi-modules' ),
				'type'				=> 'text',
				'option_category'	=> 'basic_option',
				'depends_on'		=> array(
					'we_ex_social_networks'
				),
				'depends_show_if'	=> 'Spotify',
				'toggle_slug'		=> 'main_content'
			),
			'ex_spotify_link_type'	=> array(
				'label'		=> esc_html('Spotify link type', 'wedivi-we-divi-modules' ),
				'description'	=> esc_html__('Here you can define whether it would be web browser link or app link', 'wedivi-we-divi-modules'),
				'type'		=> 'select',
				'options'	=> array(
					'weblink'	=> esc_html__('Web Link', 'wedivi-we-divi-modules'),
					'applink'	=> esc_html__('App link', 'wedivi-we-divi-modules' )
				),
				'option_category'	=> 'basic_option',
				'depends_on'		=> array(
					'we_ex_social_networks'
				),
				'depends_show_if'	=> 'Spotify',
				'default_on_front'	=> 'weblink',
				'toggle_slug'		=> 'main_content'
			),
			'site_icon_color' => array(
				'label'				=> esc_html__('Icon color', 'wedivi-we-divi-modules'),
				'type'				=> 'color-alpha',
				'option_category'	=> 'basic_option',
				'tab_slug'			=> 'advanced',
				'description'		=> esc_html__('You can define custom color for site icon', 'wedivi-we-divi-modules'),
				'hover'	=> 'tabs'
			),
			'ex_custom_size'	=> array(
				'label'		=> esc_html__('User custom font size', 'wedivi-we-divi-modules' ),
				'type'		=> 'yes_no_button',
				'option_category'	=> 'font-option',
				'options'		=> array(
					'off'		=> esc_html('Off', 'wedivi-we-divi-modules' ),
					'on'		=> esc_html('On', 'wedivi-we-divi-modules' )
				),
				'tab_slug'		=> 'advanced',
				'affects'	=> array(
					'extent_icon_size'
				),
				'depends_show_if'	=> 'on'
			),
			'extent_icon_size'	=> array(
				'label'		=> esc_html__('Icon font size', 'wedivi-we-divi-modules'),
				'description'	=> esc_html__('Control your icon font size here', 'wedivi-we-divi-modules'),
				'type'			=> 'range',
				'option_category'	=> 'font_option',
				'tab_slug'			=> 'advanced',
				'allowed_units'		=> array( '%', 'em', 'rem', 'px', 'cm', 'mm', 'in', 'pt', 'pc', 'ex', 'vh', 'vw' ),
				'default'			=> '30px',
				'default_unit'		=> 'px',
				'range_settings'	=> array(
					'min'		=> '1',
					'max'		=> '110',
					'step'		=> '1'
				),
				'responsive'	=> true,
				'depends_show_if'	=> 'on',
				'hover'			=> 'tabs',
				'mobile_options'	=> true
			)
		);
		return $we_ex_social_fields;
	}
	protected function _render_module_wrapper( $output = '', $render_slug = '' ) {
		return $output;
	}
	public function render( $attrs, $content = null, $render_slug ) {
		global $we_site_link;
		// Remove automatically added classnames

		$this->remove_classname( array(
			$render_slug,
			'et_pb_module',
			'et_pb_section_video',
			'et_pb_preload',
			'et_pb_section_parallax'
		) );
		$site_icon_clor 	= $this->props['site_icon_color'];
		$site_color_hover	= $this->get_hover_value('site_icon_color');
		$site_url 			= esc_url( $this->props['site_url'] );
		$site_list 			= $this->props['we_ex_social_networks'];
		$custom_font_size   = $this->props['ex_custom_size'];
		$ex_icon_size 		= $this->props['extent_icon_size'];
		
		$ex_font_size_hover = $this->get_hover_value('extent_icon_size');
		$ex_fontsize_values = et_pb_responsive_options()->get_property_values( $this->props, 'extent_icon_size');
		$skype_link 		= $this->props['ex_skype_url'];
		$get_skype_action 	= $this->props['ex_skype_action'];
		$whatsapp_link 		= $this->props['ex_whatsapp'];
		$spotify_link 		= $this->props['ex_spotify_type'];
		$spotify_id			= $this->props['ex_spotify_id'];
		$spotify_link_type 	= $this->props['ex_spotify_link_type'];
		$icon_pre 			= ( strtolower( $site_list ) === 'rss' )? 'fas' : 'fab';
		$parallax_bg 		= $this->get_parallax_image_background();
		$background_layout  = et_pb_background_layout_options()->get_background_layout_attrs( $this->props );
		if ( 'skype' === strtolower( $site_list ) ) {
			$site_url = sprintf('skype:%1$s?%2$s', sanitize_text_field( $skype_link ), sanitize_text_field( $get_skype_action ) );
		
		}
		if ( 'WhatsApp' === $site_list  ) {

			$site_url 	= sprintf('%1$s/%2$s', esc_url('https://wa.me'), sanitize_text_field( $whatsapp_link ) );

		}
		if ( 'tumblr' === strtolower( $site_list ) ){
			$site_url = sprintf('https://www.tumblr.com/blog/%s', sanitize_text_field($this->props['ex_tumblr_url']) );
		}
		if ( 'reddit' === strtolower( $site_list ) ) {
			$site_url = sprintf( 'https://www.reddit.com/user/%s', sanitize_text_field( $this->props['ex_reddit_url'] ) );
		}
		if ( 'snapchat' === strtolower( $site_list ) ) {
			$site_url = sprintf( 'https://www.snapchat.com/add/%s', sanitize_text_field( $this->props['ex_snapchat_url'] ) );
		}
		if ( 'telegram' === strtolower( $site_list ) ) {
			$site_url = sprintf('https://telegram.me/%s', sanitize_text_field( $this->props['ex_telegram_url'] ) );
		}
		if ( 'blackberry' === strtolower( $site_list ) ) {
			$site_url = sprintf('https://appworld.blackberry.com/webstore/%s', sanitize_text_field( $this->props['ex_blackberry_url'] ) );
		}
		if ( 'itunes' === strtolower( $site_list ) ) {
			$site_url = sprintf('https://www.apple.com/itunes/%s', sanitize_text_field($this->props['ex_itunes_url'] ) );
		}
		if ( 'untappd' === strtolower( $site_list ) ) {
			$site_url = sprintf('https://untappd.com/user/%s', sanitize_text_field($this->props['ex_untappd_url'] ) );
		}
		if ( 'viber' === strtolower( $site_list ) ) {
			$site_url = sprintf('https://www.viber.com/%s', sanitize_text_field( $this->props['ex_viber_url'] ) );
		}
		if ( 'spotify' === strtolower( $site_list ) ) {
			if ( 'applink' == $spotify_link_type ) {
				$site_url = sprintf('spotify:%1$s:%2$s', sanitize_text_field( $spotify_link ), sanitize_text_field( $spotify_id ) );
			}else {
				$site_url = sprintf('%3$s/%1$s/%2$s', sanitize_text_field( $spotify_link ), sanitize_text_field( $spotify_id ), esc_url('https://open.spotify.com') );
			}
		}
		// icon color
		if ( '' !== $site_icon_clor ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'		=> '%%order_class%% a.we-exsite-item span',
				'declaration'	=> sprintf(
					'color: %1$s !important;', esc_html( $site_icon_clor )
				)
				));
		}
		// icon size
		if ( 'off' !== $custom_font_size ) {
			foreach( $ex_fontsize_values as $ex_font_size_key => $ex_font_size_value ) {
				if ( '' === $ex_font_size_value ) {
					continue;
				}
				$media_query = 'general';
				if ( 'tablet' === $ex_font_size_key ) {
					$media_query = ET_Builder_Element::get_media_query( 'max_width_980' );
				}elseif ( 'phone' === $ex_font_size_key ) {
					$media_query = ET_Builder_Element::get_media_query('max_width_767');
				}
				ET_Builder_Element::set_style( $render_slug, array(
					'selector'	=> '%%order_class%% a.we-exsite-item span',
					'declaration'	=> sprintf(
						'font-size: %1$s; width: %1$s; height: %1$s; line-height: %1$s', esc_html($ex_font_size_value)
					),
					'media_query'	=> $media_query
				) );
			}
			
		}
		
		// icon size on responsive 
		// icon color on hover 
		if ( et_builder_is_hover_enabled('site_icon_color', $this->props) ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'		=> '%%order_class%% a.we-exsite-item span:hover',
				'declaration'	=> sprintf( 
					'color: %1$s !important;',
					esc_html( $site_color_hover )
				 )
			) );
		}
		// icon font size on  hover
		if ( et_builder_is_hover_enabled('extent_icon_size', $this->props ) ) {
			ET_Builder_Element::set_style($render_slug, array(
				'selector'		=> '%%order_class%% a.we-exsite-item span:hover',
				'declaration'	=> sprintf(
					'font-size: %1$s !important;', 
					esc_html( $ex_font_size_hover )
				)
			) );
		}
		$we_site_target = ('on' === $we_site_link['target_url'] ) ? 'target="_blank"' : '';
		$output = sprintf('<li class="%5$s %6$s" %9$s>%8$s<a title="%1$s" class="we-exsite-item" href="%2$s" %4$s><span class="%7$s fa-%3$s"></span></a></li>',
		esc_attr( $content ),
		$site_url,
		$site_list,
		$we_site_target,
		esc_attr($this->module_classname($render_slug)),
		esc_attr('we-site-item'),
		esc_attr($icon_pre),
		$parallax_bg,
		et_core_esc_previously($background_layout)
		);
		return $output;
	}
}

new WEDIVI_ExSocial_Follow_Item;
