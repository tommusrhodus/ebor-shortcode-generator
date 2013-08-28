<?php

/*-----------------------------------------------------------------------------------*/
/*	Button Config
/*-----------------------------------------------------------------------------------*/

$ebor_shortcodes['button'] = array(
	'no_preview' => true,
	'params' => array(
		'url' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Button URL', 'ebor'),
			'desc' => __('Add the button\'s url eg http://example.com', 'ebor')
		),
		'style' => array(
			'type' => 'select',
			'label' => __('Button Style', 'ebor'),
			'desc' => __('Select the button\'s style, ie the button\'s colour', 'ebor'),
			'options' => array(
				'turquoise' => 'turquoise',
				'emerald' => 'emerald',
				'river' => 'river',
				'amethyst' => 'amethyst',
				'asphalt' => 'asphalt',
				'sea' => 'sea',
			 	'nephritis' => 'nephritis',
				'blue' => 'blue',
				'wisteria' => 'wisteria',
				'midnight' => 'midnight',
				'sunflower' => 'sunflower',
				'carrot' => 'carrot',
				'alizarin' => 'alizarin',
				'clouds' => 'clouds',
				'concrete' => 'concrete',
				'orange' => 'orange',
				'pumpkin' => 'pumpkin',
				'pomegranate' => 'pomegranate',
				'silver' => 'silver',
				'asbestos' => 'asbestos'
			)
		),
		'target' => array(
			'type' => 'select',
			'label' => __('Button Target', 'ebor'),
			'desc' => __('_self = open in same window. _blank = open in new window', 'ebor'),
			'options' => array(
				'_self' => '_self',
				'_blank' => '_blank'
			)
		),
		'content' => array(
			'std' => 'Button Text',
			'type' => 'text',
			'label' => __('Button\'s Text', 'ebor'),
			'desc' => __('Add the button\'s text', 'ebor'),
		)
	),
	'shortcode' => '[ebor_button url="{{url}}" style="{{style}}" target="{{target}}"] {{content}} [/ebor_button]',
	'popup_title' => __('Insert Button Shortcode', 'ebor')
);

/*-----------------------------------------------------------------------------------*/
/*	Alert Config
/*-----------------------------------------------------------------------------------*/

$ebor_shortcodes['alert'] = array(
	'no_preview' => true,
	'params' => array(
		'style' => array(
			'type' => 'select',
			'label' => __('Alert Style', 'ebor'),
			'desc' => __('Select the alert\'s style, ie the alert colour', 'ebor'),
			'options' => array(
				'turquoise' => 'turquoise',
				'emerald' => 'emerald',
				'river' => 'river',
				'amethyst' => 'amethyst',
				'asphalt' => 'asphalt',
				'sea' => 'sea',
					'nephritis' => 'nephritis',
				'blue' => 'blue',
				'wisteria' => 'wisteria',
				'midnight' => 'midnight',
				'sunflower' => 'sunflower',
				'carrot' => 'carrot',
				'alizarin' => 'alizarin',
				'clouds' => 'clouds',
				'concrete' => 'concrete',
				'orange' => 'orange',
				'pumpkin' => 'pumpkin',
				'pomegranate' => 'pomegranate',
				'silver' => 'silver',
				'asbestos' => 'asbestos'
			)
		),
		'content' => array(
			'std' => 'Your Alert!',
			'type' => 'textarea',
			'label' => __('Alert Text', 'ebor'),
			'desc' => __('Add the alert\'s text', 'ebor'),
		)
		
	),
	'shortcode' => '[ebor_alert style="{{style}}"] {{content}} [/ebor_alert]',
	'popup_title' => __('Insert Alert Shortcode', 'ebor')
);


/*-----------------------------------------------------------------------------------*/
/*	Tabs Config
/*-----------------------------------------------------------------------------------*/

$ebor_shortcodes['tabs'] = array(
    'params' => array(
    	'type' => array(
    		'type' => 'select',
    		'label' => __('Tabs tyle', 'ebor'),
    		'desc' => __('Select the tabs display style', 'ebor'),
    		'options' => array(
    			'verticalTab' => 'Vertical Tabs',
    			'horizontalTab' => 'Horizontal Tabs',
    			'accordion' => 'Accordion',
    		)
    	)
    	
    ),
    'no_preview' => true,
    'shortcode' => '[ebor_tabs type="{{type}}"] {{child_shortcode}}  [/ebor_tabs]',
    'popup_title' => __('Insert Tab Shortcode', 'ebor'),
    
    'child_shortcode' => array(
        'params' => array(
            'title' => array(
                'std' => 'Title',
                'type' => 'text',
                'label' => __('Tab Title', 'ebor'),
                'desc' => __('Title of the tab', 'ebor'),
            ),
            'content' => array(
                'std' => 'Tab Content',
                'type' => 'textarea',
                'label' => __('Tab Content', 'ebor'),
                'desc' => __('Add the tabs content', 'ebor')
            )
        ),
        'shortcode' => '[ebor_tab title="{{title}}"] {{content}} [/ebor_tab]',
        'clone_button' => __('Add Tab', 'ebor')
    )
);

/*-----------------------------------------------------------------------------------*/
/*	Columns Config
/*-----------------------------------------------------------------------------------*/

$ebor_shortcodes['columns'] = array(
	'params' => array(),
	'shortcode' => ' {{child_shortcode}} ', // as there is no wrapper shortcode
	'popup_title' => __('Insert Columns Shortcode', 'ebor'),
	'no_preview' => true,
	
	// child shortcode is clonable & sortable
	'child_shortcode' => array(
		'params' => array(
			'column' => array(
				'type' => 'select',
				'label' => __('Column Type', 'ebor'),
				'desc' => __('Select the type, ie width of the column.', 'ebor'),
				'options' => array(
					'ebor_one_third' => 'One Third',
					'ebor_one_third_last' => 'One Third Last',
					'ebor_two_third' => 'Two Thirds',
					'ebor_two_third_last' => 'Two Thirds Last',
					'ebor_one_half' => 'One Half',
					'ebor_one_half_last' => 'One Half Last',
					'ebor_one_fourth' => 'One Fourth',
					'ebor_one_fourth_last' => 'One Fourth Last',
					'ebor_three_fourth' => 'Three Fourth',
					'ebor_three_fourth_last' => 'Three Fourth Last',
					'ebor_one_fifth' => 'One Fifth',
					'ebor_one_fifth_last' => 'One Fifth Last',
					'ebor_two_fifth' => 'Two Fifth',
					'ebor_two_fifth_last' => 'Two Fifth Last',
					'ebor_three_fifth' => 'Three Fifth',
					'ebor_three_fifth_last' => 'Three Fifth Last',
					'ebor_four_fifth' => 'Four Fifth',
					'ebor_four_fifth_last' => 'Four Fifth Last',
					'ebor_one_sixth' => 'One Sixth',
					'ebor_one_sixth_last' => 'One Sixth Last',
					'ebor_five_sixth' => 'Five Sixth',
					'ebor_five_sixth_last' => 'Five Sixth Last'
				)
			),
			'content' => array(
				'std' => '',
				'type' => 'textarea',
				'label' => __('Column Content', 'ebor'),
				'desc' => __('Add the column content.', 'ebor'),
			)
		),
		'shortcode' => '[{{column}}] {{content}} [/{{column}}] ',
		'clone_button' => __('Add Column', 'ebor')
	)
);

?>