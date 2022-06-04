<?php

$strName = 'tl_content';

$colors = array('-'=>'','weissbg'=>'Weiß','hellblaubg'=>'Hellblau','hellgraubg'=>'Hellgrau','dunkelgraubg'=>'Dunkelgrau','schwarzbg'=>'Schwarz','hellgelbbg'=>'Hellgelb','blaubg'=>'Blau','gelbbg'=>'Gelb','dunkelblaubg'=>'Dunkelblau','beigebg'=>'Beige');
$colorSchemes = array('btn'=>'Primary Color','btn-alt'=>'Secondary Color');

$GLOBALS['TL_DCA'][$strName]['palettes']['image_and_text'] = '{type_legend},type,headline, subheading, maximal_width, vertical_center, reverse_order_mobile, background_color, grid, text, reverse_order; {image_legend:hide}, image_front, add_background_image; {button_legend:hide}, button_add;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop;';
$GLOBALS['TL_DCA'][$strName]['palettes']['columns'] = '{type_legend},type,headline, subheading, maximal_width, vertical_center, reverse_order_mobile, background_color, grid, column, reverse_order; {expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop;';
$GLOBALS['TL_DCA'][$strName]['palettes']['text_with_background'] = '{type_legend},type,headline, subheading, maximal_width, text; {image_legend:hide}, image_front; {button_legend:hide}, button_add;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop;';
$GLOBALS['TL_DCA'][$strName]['palettes']['maps'] = '{type_legend},type,headline, subheading, background_color, text_second, text; {expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop;';
$GLOBALS['TL_DCA'][$strName]['palettes']['gallery1'] = '{type_legend},type,headline, subheading, background_color, gallery_elements; {expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop;';

$GLOBALS['TL_DCA'][$strName]['subpalettes']['add_background_image'] = 'image_second';
$GLOBALS['TL_DCA'][$strName]['palettes']['__selector__'][] = 'add_background_image';
$GLOBALS['TL_DCA'][$strName]['subpalettes']['button_add'] = 'button_text, button_link, button_link_extern, button_color';
$GLOBALS['TL_DCA'][$strName]['palettes']['__selector__'][] = 'button_add';
 
$GLOBALS['TL_DCA'][$strName]['fields']['background_color'] = array
(
    'label'                   => array('Hintergrundfarbe', ''),
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => $colors,
    'eval'                    =>  array('includeBlankOption'=>false, 'tl_class'=>'clr'),
    'sql'                     => "varchar(50) NOT NULL default ''"
);
$GLOBALS['TL_DCA'][$strName]['fields']['foreground_color'] = array
(
    'label'                   => array('Vordergrundfarbe', ''),
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => $colors,
    'eval'                    =>  array('includeBlankOption'=>false),
    'sql'                     => "varchar(50) NOT NULL default ''"
);
$GLOBALS['TL_DCA'][$strName]['fields']['maximal_width'] = array
(
    'label'                   => array('Maximale Breite', ''),
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array(''=>'Normal','slim'=>'Dünn'),
    'eval'                    =>  array('includeBlankOption'=>false),
    'sql'                     => "varchar(50) NOT NULL default ''"
);
$GLOBALS['TL_DCA'][$strName]['fields']['grid'] = array
(
    'label'                   => array('Grid', ''),
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => array('33x66'=>'33x66','50x50'=>'50x50','66x33'=>'66x33','33x33x33'=>'33x33x33'),
    'eval'                    =>  array('includeBlankOption'=>false),
    'sql'                     => "varchar(50) NOT NULL default ''"
);
$GLOBALS['TL_DCA'][$strName]['fields']['vertical_center'] = array
(
    'label'                   => array('Vertikal zentrieren?', ''),
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'sql'                     => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA'][$strName]['fields']['reverse_order_mobile'] = array
(
    'label'                   => array('Mobil Reihung umdrehen?', ''),
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'sql'                     => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA'][$strName]['fields']['reverse_order'] = array
(
    'label'                   => array('Text links', ''),
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'sql'                     => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA'][$strName]['fields']['image_front'] = array
(
    'label'                   => array('Bild (Vordergrund)', ''),
    'exclude'                 => true,
    'inputType'               => 'fileTree',
  	'eval'                    => array('fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true, 'tl_class'=>'clr', 'extensions'=>$GLOBALS['TL_CONFIG']['validImageTypes']),
  	'sql'                     => "blob NULL"
);
$GLOBALS['TL_DCA'][$strName]['fields']['add_background_image'] = array
(
    'label'                   => array('Hintergrundbild hinzufügen', ''),
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('submitOnChange'=>true),
    'sql'                     => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA'][$strName]['fields']['image_second'] = array
(
    'label'                   => array('Bild (Hintergrund)', ''),
    'exclude'                 => true,
    'inputType'               => 'fileTree',
  	'eval'                    => array('fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true, 'tl_class'=>'clr', 'extensions'=>$GLOBALS['TL_CONFIG']['validImageTypes']),
  	'sql'                     => "blob NULL"
);
$GLOBALS['TL_DCA'][$strName]['fields']['subheading'] = array
(
    'label'                   => array('Unterüberschrift', ''),
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'clr'),
    'sql'                     => "longtext NULL"
);
$GLOBALS['TL_DCA'][$strName]['fields']['text_second'] = array
(
    'label'                   => array('Text', ''),
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('rte'=>'tinyMCE'),
    'sql'                     => "longtext NULL"
);
$GLOBALS['TL_DCA'][$strName]['fields']['button_add'] = array
(
    'label'                   => array('Button hinzufügen', ''),
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('submitOnChange'=>true),
    'sql'                     => "longtext NULL"
);
$GLOBALS['TL_DCA'][$strName]['fields']['button_text'] = array
(
    'label'                   => array('Button-Text', ''),
    'exclude'                 => true,
    'inputType'               => 'text',
    'sql'                     => "longtext NULL"
);
$GLOBALS['TL_DCA'][$strName]['fields']['button_link'] = array
(
    'label'                   => array('Button-Link', ''),
    'exclude'                 => true,
    'inputType'               => 'pageTree',
    'eval'                  => ['fieldType'=>'radio', 'tl_class'=>'clr'],
  	'sql'                     => "blob NULL"
);
$GLOBALS['TL_DCA'][$strName]['fields']['button_link_extern'] = array
(
    'label'                   => array('Button-Link (extern)', ''),
    'exclude'                 => true,
    'inputType'               => 'text',
    'sql'                     => "text NULL"
);
$GLOBALS['TL_DCA'][$strName]['fields']['button_color'] = array
(
    'label'                   => array('Button-Farbe', ''),
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => $colorSchemes,
    'eval'                    =>  array('includeBlankOption'=>false, 'tl_class'=>'clr'),
    'sql'                     => "varchar(50) NOT NULL default ''"
);
$GLOBALS['TL_DCA'][$strName]['fields']['button_text'] = array
(
    'label'                   => array('Button-Text', ''),
    'exclude'                 => true,
    'inputType'               => 'text',
    'sql'                     => "longtext NULL"
);
$GLOBALS['TL_DCA'][$strName]['fields']['button_link'] = array
(
    'label'                   => array('Button-Link', ''),
    'exclude'                 => true,
    'inputType'               => 'pageTree',
    'eval'                  => ['fieldType'=>'radio', 'tl_class'=>'clr'],
  	'sql'                     => "blob NULL"
);
$GLOBALS['TL_DCA'][$strName]['fields']['button_link_extern'] = array
(
    'label'                   => array('Button-Link (extern)', ''),
    'exclude'                 => true,
    'inputType'               => 'text',
    'sql'                     => "text NULL"
);
$GLOBALS['TL_DCA'][$strName]['fields']['button_color'] = array
(
    'label'                   => array('Button-Farbe', ''),
    'exclude'                 => true,
    'inputType'               => 'select',
    'options'                 => $colorSchemes,
    'eval'                    =>  array('includeBlankOption'=>false, 'tl_class'=>'clr'),
    'sql'                     => "varchar(50) NOT NULL default ''"
);
$GLOBALS['TL_DCA'][$strName]['fields']['column'] = array
(
    'label'       => array('Column',''),
	'inputType' 		=> 'multiColumnWizard',
		'eval' 			=> array
		(
			'class' => 'clr',
			'columnFields' => array
			(
				'title' => array
				(
                    'label'                   => array('Title', ''),
                    'exclude'                 => true,
                    'inputType'               => 'text',
                    'sql'                     => "longtext NULL"
				),
				'subtitle' => array
				(
                    'label'                   => array('Subtitle', ''),
                    'exclude'                 => true,
                    'inputType'               => 'text',
                    'sql'                     => "longtext NULL"
				),
				'image' => array
				(
					'label'                   => array('Bild', ''),
                    'exclude'                 => true,
                    'inputType'               => 'fileTree',
                    'eval'                    => array('fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true, 'tl_class'=>'clr', 'extensions'=>$GLOBALS['TL_CONFIG']['validImageTypes']),
                    'sql'                     => "blob NULL"
				),
                'button_text' => array
                (
                    'label'                   => array('Button-Text', ''),
                    'exclude'                 => true,
                    'inputType'               => 'text',
                    'sql'                     => "longtext NULL"
                ),
                'button_link' => array
                (
                    'label'                   => array('Button-Link', ''),
                    'exclude'                 => true,
                    'inputType'               => 'pageTree',
                    'eval'                  => ['fieldType'=>'radio', 'tl_class'=>'clr'],
                    'sql'                     => "blob NULL"
                ),
                'button_link_extern' => array
                (
                    'label'                   => array('Button-Link (extern)', ''),
                    'exclude'                 => true,
                    'inputType'               => 'text',
                    'sql'                     => "text NULL"
                ),
                'button_color' => array
                (
                    'label'                   => array('Button-Farbe', ''),
                    'exclude'                 => true,
                    'inputType'               => 'select',
                    'options'                 => $colorSchemes,
                    'eval'                    =>  array('includeBlankOption'=>false, 'tl_class'=>'clr'),
                    'sql'                     => "varchar(50) NOT NULL default ''"
                )
			)
		),
    'sql'                     => "blob NULL"
);
$GLOBALS['TL_DCA'][$strName]['fields']['gallery_elements'] = array
(
    'label'       => array('Element',''),
	'inputType' 		=> 'multiColumnWizard',
		'eval' 			=> array
		(
			'class' => 'clr',
			'columnFields' => array
			(
                'image' => array
                (
                    'label'                   => array('Bild', ''),
                    'exclude'                 => true,
                    'inputType'               => 'fileTree',
                    'eval'                    => array('fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true, 'tl_class'=>'clr', 'extensions'=>$GLOBALS['TL_CONFIG']['validImageTypes']),
                    'sql'                     => "blob NULL"
                ),
			)
		),
    'sql'                     => "blob NULL"
);