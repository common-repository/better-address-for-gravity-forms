<?php

if (class_exists('GFForms')) {
    GFForms::include_addon_framework();

    class GravityFormsBetterAddress extends GFAddOn {

        protected $_version = GF_STATES_PROVINCES_ADDON_VERSION;
        protected $_min_gravityforms_version = '2.4';
        protected $_slug = 'gravityformsbetteraddress';
        protected $_path = 'better-address-gravity-forms/better-address-gravity-forms.php';
        protected $_full_path = __FILE__;
        protected $_title = 'Better Address Integration';
        protected $_short_title = 'Better Address';
        private static $_instance = null;


        /**
         * Get an instance of this class.
         *
         * @return GravityFormsBetterAddress
         */
        public static function get_instance() {
            if ( self::$_instance == null ) {
                self::$_instance = new GravityFormsBetterAddress();
            }

            return self::$_instance;
        }

        /*
            Create fields
            https://docs.gravityforms.com/gfaddon/
        */
        public function plugin_settings_fields() {

            return array(
                array(
                    'title' => esc_html__( 'Better Address', 'gformba' ),
                    'description' => sprintf(
                        '<a href="https://rocketapps.com.au/" rel="noopener" target="_blank" style="display:inline-block; text-decoration: none; padding: 5px 12px 6px 12px; border: solid 1px #8e50a1; color: #8e50a1; font-weight: 600; background: #8e50a117; border-radius: 3px; margin: 5px 0 15px 0">More WordPress tools from Rocket Apps</a>'
                    ),
                    'fields' => array(
                        array(
                            'name'    => 'gft_better_address',
                            'type'    => 'checkbox',
                            'horizontal' => true,
                            'label'   => esc_html__( 'Enabled for', 'gformba' ),
                            'tooltip' => esc_html__( 'Select the countries you would like to enable.', 'gformba' ),
                            'choices' => array(
                                array(
                                    'label'         => esc_html__( 'Argentinian Provinces', 'gformba' ),
                                    'name'          => 'gformba_argentina',
                                    'default_value' => 0,
                                ),
                                array(
                                    'label'         => esc_html__( 'Angolan Provinces', 'gformba' ),
                                    'name'          => 'gformba_angola',
                                    'default_value' => 0,
                                ),
                                array(
                                    'label'         => esc_html__( 'Australian States', 'gformba' ),
                                    'name'          => 'gformba_australia',
                                    'default_value' => 0,
                                ),
                                array(
                                    'label'         => esc_html__( 'Bangladesh Districts', 'gformba' ),
                                    'name'          => 'gformba_bangladesh',
                                    'default_value' => 0,
                                ),
                                array(
                                    'label'         => esc_html__( 'Bolivian Departments', 'gformba' ),
                                    'name'          => 'gformba_bolivia',
                                    'default_value' => 0,
                                ),
                                array(
                                    'label'         => esc_html__( 'Brazilian States', 'gformba' ),
                                    'name'          => 'gformba_brazil',
                                    'default_value' => 0,
                                ),
                                array(
                                    'label'         => esc_html__( 'British Countries', 'gformba' ),
                                    'name'          => 'gformba_uk',
                                    'default_value' => 0,
                                ),
                                array(
                                    'label'         => esc_html__( 'Bulgarian Districts', 'gformba' ),
                                    'name'          => 'gformba_bulgaria',
                                    'default_value' => 0,
                                ),
                                array(
                                    'label'         => esc_html__( 'Chinese Provinces', 'gformba' ),
                                    'name'          => 'gformba_china',
                                    'default_value' => 0,
                                ),
                                array(
                                    'label'         => esc_html__( 'Greek Administrations', 'gformba' ),
                                    'name'          => 'gformba_greece',
                                    'default_value' => 0,
                                ),
                                array(
                                    'label'         => esc_html__( 'Hong Kong Districts', 'gformba' ),
                                    'name'          => 'gformba_hong_kong',
                                    'default_value' => 0,
                                ),
                                array(
                                    'label'         => esc_html__( 'Hungarian Counties', 'gformba' ),
                                    'name'          => 'gformba_hungary',
                                    'default_value' => 0,
                                ),
                                array(
                                    'label'         => esc_html__( 'Indian States', 'gformba' ),
                                    'name'          => 'gformba_india',
                                    'default_value' => 0,
                                ),
                                array(
                                    'label'         => esc_html__( 'Indonesian Provinces', 'gformba' ),
                                    'name'          => 'gformba_indonesia',
                                    'default_value' => 0,
                                ),
                                array(
                                    'label'         => esc_html__( 'Iranian Provinces', 'gformba' ),
                                    'name'          => 'gformba_iran',
                                    'default_value' => 0,
                                ),
                                array(
                                    'label'         => esc_html__( 'Irish Countries', 'gformba' ),
                                    'name'          => 'gformba_ireland',
                                    'default_value' => 0,
                                ),
                                array(
                                    'label'         => esc_html__( 'Italian Regions', 'gformba' ),
                                    'name'          => 'gformba_italy',
                                    'default_value' => 0,
                                ),
                                array(
                                    'label'         => esc_html__( 'Japanese Prefectures', 'gformba' ),
                                    'name'          => 'gformba_japan',
                                    'default_value' => 0,
                                ),
                                array(
                                    'label'         => esc_html__( 'Liberian Countries', 'gformba' ),
                                    'name'          => 'gformba_liberia',
                                    'default_value' => 0,
                                ),
                                array(
                                    'label'         => esc_html__( 'Malay States', 'gformba' ),
                                    'name'          => 'gformba_malaysia',
                                    'default_value' => 0,
                                ),
                                array(
                                    'label'         => esc_html__( 'Mexican States', 'gformba' ),
                                    'name'          => 'gformba_mexico',
                                    'default_value' => 0,
                                ),
                                array(
                                    'label'         => esc_html__( 'Moldovan Districts', 'gformba' ),
                                    'name'          => 'gformba_moldova',
                                    'default_value' => 0,
                                ),
                                array(
                                    'label'         => esc_html__( 'Nepalis Provinces', 'gformba' ),
                                    'name'          => 'gformba_nepal',
                                    'default_value' => 0,
                                ),
                                array(
                                    'label'         => esc_html__( 'Netherlands Provinces', 'gformba' ),
                                    'name'          => 'gformba_netherlands',
                                    'default_value' => 0,
                                ),
                                array(
                                    'label'         => esc_html__( 'New Zealand Regions', 'gformba' ),
                                    'name'          => 'gformba_new_zealand',
                                    'default_value' => 0,
                                ),
                                array(
                                    'label'         => esc_html__( 'Nigerian States', 'gformba' ),
                                    'name'          => 'gformba_nigeria',
                                    'default_value' => 0,
                                ),
                                array(
                                    'label'         => esc_html__( 'Pakistanis Provinces', 'gformba' ),
                                    'name'          => 'gformba_pakistan',
                                    'default_value' => 0,
                                ),
                                array(
                                    'label'         => esc_html__( 'Paraguayan Departments', 'gformba' ),
                                    'name'          => 'gformba_paraguay',
                                    'default_value' => 0,
                                ),
                                array(
                                    'label'         => esc_html__( 'Peruvian Regions', 'gformba' ),
                                    'name'          => 'gformba_peru',
                                    'default_value' => 0,
                                ),
                                array(
                                    'label'         => esc_html__( 'Philippines Provinces', 'gformba' ),
                                    'name'          => 'gformba_philippines',
                                    'default_value' => 0,
                                ),
                                array(
                                    'label'         => esc_html__( 'Romanian Counties', 'gformba' ),
                                    'name'          => 'gformba_romania',
                                    'default_value' => 0,
                                ),
                                array(
                                    'label'         => esc_html__( 'South African Provinces', 'gformba' ),
                                    'name'          => 'gformba_south_africa',
                                    'default_value' => 0,
                                ),
                                array(
                                    'label'         => esc_html__( 'Spanish Provinces', 'gformba' ),
                                    'name'          => 'gformba_spain',
                                    'default_value' => 0,
                                ),
                                array(
                                    'label'         => esc_html__( 'Swiss Cantons', 'gformba' ),
                                    'name'          => 'gformba_switzerland',
                                    'default_value' => 0,
                                ),
                                array(
                                    'label'         => esc_html__( 'Tanzanian Regions', 'gformba' ),
                                    'name'          => 'gformba_tanzania',
                                    'default_value' => 0,
                                ),
                                array(
                                    'label'         => esc_html__( 'Thai Provinces', 'gformba' ),
                                    'name'          => 'gformba_thailand',
                                    'default_value' => 0,
                                ),
                                array(
                                    'label'         => esc_html__( 'Turkish Provinces', 'gformba' ),
                                    'name'          => 'gformba_turkey',
                                    'default_value' => 0,
                                )
                            )
                        ),
                        array(
                            'name'    => 'gft_label_type',
                            'type'    => 'checkbox',
                            'label'   => esc_html__( 'Show code intead of name', 'gformba' ),
                            'tooltip' => esc_html__( 'When receiving an email, all states, provinces, countries etc will show the code instead of the name. For example: NY instead of New York.', 'gformba' ),
                            'choices' => array(
                                array(
                                    'label'         => esc_html__( 'Yes', 'gformba' ),
                                    'name'          => 'gft_codes',
                                    'default_value' => 0,
                                )
                            ),
                        )
                    ),
                )
            );
        }
    }    

    

    /* Get settings */
    $options        = get_option('gravityformsaddon_gravityformsbetteraddress_settings');

    $codes          = $options['gft_codes'];

    /// $argentina = isset($options['gformba_argentina']) ? $options['gformba_argentina'] : '';

    $argentina      = $options['gformba_argentina'];
    $australia      = $options['gformba_australia'];
    $bangladesh     = $options['gformba_bangladesh'];
    $bolivia        = $options['gformba_bolivia'];
    $bulgaria       = $options['gformba_bulgaria'];
    $brazil         = $options['gformba_brazil'];
    $britain        = $options['gformba_uk'];
    $china          = $options['gformba_china'];
    $angola         = $options['gformba_angola'];
    $greece         = $options['gformba_greece'];
    $hong_kong      = $options['gformba_hong_kong'];
    $hungary        = $options['gformba_hungary'];
    $india          = $options['gformba_india'];
    $indonesia      = $options['gformba_indonesia'];
    $iran           = $options['gformba_iran'];
    $ireland        = $options['gformba_ireland'];
    $italy          = $options['gformba_italy'];
    $japan          = $options['gformba_japan'];
    $liberia        = $options['gformba_liberia'];
    $malaysia       = $options['gformba_malaysia'];
    $mexico         = $options['gformba_mexico'];
    $moldova        = $options['gformba_moldova'];
    $nepal          = $options['gformba_nepal'];
    $netherlands    = $options['gformba_netherlands'];
    $new_zealand    = $options['gformba_new_zealand'];
    $nigeria        = $options['gformba_nigeria'];
    $pakistan       = $options['gformba_pakistan'];
    $paraguay       = $options['gformba_paraguay'];
    $peru           = $options['gformba_peru'];
    $philippines    = $options['gformba_philippines'];
    $romania        = $options['gformba_romania'];
    $south_africa   = $options['gformba_south_africa'];
    $spain          = $options['gformba_spain'];
    $switzerland    = $options['gformba_switzerland'];
    $tanzania       = $options['gformba_tanzania'];
    $thailand       = $options['gformba_thailand'];
    $turkey         = $options['gformba_turkey'];

    /* Include functions */
    if($codes == 1) {
        require_once( 'inc/codes.php' );
    } else {
        require_once( 'inc/names.php' );
    }

    /* Return functions if conditions are met */
    if($australia) {
        gfba_australia();
    }

    if($brazil) {
        gfba_brazil();
    }

    if($britain) {
        gfba_united_kingdom();
    }

    if($angola) {
        gfba_angola();
    }

    if($argentina) {
        gfba_argentina();
    }

    if($bangladesh) {
        gfba_bangladesh();
    }

    if($bolivia) {
        gfba_bolivia();
    }

    if($bulgaria) {
        gfba_bulgaria();
    }

    if($china) {
        gfba_china();
    }

    if($greece) {
        gfba_greece();
    }

    if($hong_kong) {
        gfba_hong_kong();
    }

    if($hungary) {
        gfba_hungary();
    }

    if($india) {
        gfba_india();
    }

    if($indonesia) {
        gfba_indonesia();
    }

    if($iran) {
        gfba_iran();
    }

    if($ireland) {
        gfba_ireland();
    }

    if($italy) {
        gfba_italy();
    }

    if($japan) {
        gfba_japan();
    }

    if($liberia) {
        gfba_liberia();
    }
    
    if($malaysia) {
        gfba_malaysia();
    }

    if($mexico) {
        gfba_mexico();
    }

    if($moldova) {
        gfba_moldova();
    }

    if($netherlands) {
        gfba_netherlands();
    }

    if($nepal) {
        gfba_nepal();
    }

    if($new_zealand) {
        gfba_new_zealand();
    }

    if($nigeria) {
        gfba_nigeria();
    }

    if($pakistan) {
        gfba_pakistan();
    }

    if($paraguay) {
        gfba_paraguay();
    }

    if($peru) {
        gfba_peru();
    }

    if($philippines) {
        gfba_philippines();
    }

    if($romania) {
        gfba_romania();
    }

    if($south_africa) {
        gfba_south_africa();
    }

    if($spain) {
        gfba_spain();
    }

    if($switzerland) {
        gfba_switzerland();
    }

    if($tanzania) {
        gfba_tanzania();
    }

    if($thailand) {
        gfba_thailand();
    }

    if($turkey) {
        gfba_turkey();
    }

}