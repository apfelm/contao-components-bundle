<?php

$strName = 'tl_module';

$GLOBALS['TL_DCA']['tl_module']['palettes']['navigation_top'] = '{title_legend},name,headline,type;{type_legend},apfel_fullwidth,apfel_sidebar,apfel_fullwidth_sidebar;{nav_legend},levelOffset,showLevel,hardLimit,showProtected,showHidden;{reference_legend:hide},defineRoot;{protected_legend:hide},protected;{logo_legend:hide},apfel_logo,apfel_menuicon,apfel_menuclose;{notification_bar_legend},apfel_nav_notif_bar;{info_bar_legend},apfel_infos;{socials_legend:hide},apfel_socials;{link_legend:hide},apfel_landingpage_links;{template_legend:hide},customTpl,navigationTpl;{expert_legend:hide},guests,cssID';
$GLOBALS['TL_DCA']['tl_module']['palettes']['footer'] = '{title_legend},name,headline,type;{text_legend},text;{logo_legend:hide},apfel_logo;{socials_legend:hide},apfel_socials;{link_legend:hide},apfel_landingpage_links;{expert_legend:hide},guests,cssID';

// Add palette to tl_module
$GLOBALS['TL_DCA']['tl_module']['palettes']['apflComponent'] = '{title_legend},name,headline,type;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';

// Fields
$GLOBALS['TL_DCA'][$strName]['fields']['apfel_fullwidth'] = array
(
    'label'                   => array('Full width?', ''),
    'eval'                    => array('class'=>'w25'),
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'sql'                     => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA'][$strName]['fields']['text'] = array
(
    'exclude'                 => true,
    'search'                  => true,
    'inputType'               => 'textarea',
    'eval'                    => array('mandatory'=>true, 'rte'=>'tinyMCE', 'helpwizard'=>true),
    'explanation'             => 'insertTags',
    'sql'                     => "mediumtext NULL"
);
$GLOBALS['TL_DCA'][$strName]['fields']['apfel_sidebar'] = array
(
    'label'                   => array('Links in Sidebar?', ''),
    'eval'                    => array('class'=>'w25'),
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'sql'                     => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA'][$strName]['fields']['apfel_fullwidth_sidebar'] = array
(
    'label'                   => array('Full width Sidebar?', ''),
    'eval'                    => array('class'=>'w25'),
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'sql'                     => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA'][$strName]['fields']['apfel_logo'] = array
(
    'label'                   => array('Logo', ''),
    'exclude'                 => true,
    'inputType'               => 'fileTree',
  	'eval'                    => array('fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true, 'tl_class'=>'clr', 'extensions'=>$GLOBALS['TL_CONFIG']['validImageTypes']),
  	'sql'                     => "blob NULL"
);
$GLOBALS['TL_DCA'][$strName]['fields']['apfel_menuicon'] = array
(
    'label'                   => array('Menu Icon', ''),
    'exclude'                 => true,
    'inputType'               => 'fileTree',
  	'eval'                    => array('fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true, 'tl_class'=>'clr', 'extensions'=>$GLOBALS['TL_CONFIG']['validImageTypes']),
  	'sql'                     => "blob NULL"
);
$GLOBALS['TL_DCA'][$strName]['fields']['apfel_menuclose'] = array
(
    'label'                   => array('Menu Close', ''),
    'exclude'                 => true,
    'inputType'               => 'fileTree',
  	'eval'                    => array('fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true, 'tl_class'=>'clr', 'extensions'=>$GLOBALS['TL_CONFIG']['validImageTypes']),
  	'sql'                     => "blob NULL"
);
$GLOBALS['TL_DCA'][$strName]['fields']['apfel_nav_notif_bar'] = array
(
    'label'                   => array('Notification Bar', ''),
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('rte'=>'tinyMCE'),
    'sql'                     => "text NULL"
);
$GLOBALS['TL_DCA'][$strName]['fields']['apfel_socials'] = array
(
    'label'       => array('Socials',''),
	'inputType' 		=> 'multiColumnWizard',
		'eval' 			=> array
		(
			'class' => 'clr',
			//'style'=>'clr',
			'columnFields' => array
			(
				'link' => array
				(
                    'label'                   => array('Link', ''),
                    'exclude'                 => true,
                    'inputType'               => 'text',
                    'eval'                    => array('class'=>'w25'),
                    'sql'                     => "text NULL"
				),
				'icon' => array
				(
					'label'                   => array('Icon', ''),
                    'exclude'                 => true,
                    'inputType'               => 'fileTree',
                    'eval'                    => array('fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true, 'tl_class'=>'clr', 'extensions'=>$GLOBALS['TL_CONFIG']['validImageTypes']),
                    'sql'                     => "blob NULL"
				),
			)
		),
    'sql'                     => "blob NULL"
);
$GLOBALS['TL_DCA'][$strName]['fields']['apfel_infos'] = array
(
    'label'       => array('Information Bar',''),
	'inputType' 		=> 'multiColumnWizard',
		'eval' 			=> array
		(
			'class' => 'clr',
			//'style'=>'clr',
			'columnFields' => array
			(
				'link' => array
				(
                    'label'                   => array('Link', ''),
                    'exclude'                 => true,
                    'inputType'               => 'text',
                    //'eval'                    => array('class'=>'w25'),
                    'sql'                     => "text NULL"
				),
				'icon' => array
				(
					'label'                   => array('Icon', ''),
                    'exclude'                 => true,
                    'inputType'               => 'fileTree',
                    'eval'                    => array('fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true, 'tl_class'=>'clr', 'extensions'=>$GLOBALS['TL_CONFIG']['validImageTypes']),
                    'sql'                     => "blob NULL"
				),
                'text' => array
                (
                    'label'                   => array('Text', ''),
                    'exclude'                 => true,
                    'inputType'               => 'text',
                    //'eval'                    => array('class'=>'w25'),
                    'sql'                     => "text NULL"
                ),
                'isTransparent' => array
                (
                    'label'                   => array('Is Transparent?', ''),
                    //'eval'                    => array('class'=>'w25'),
                    'exclude'                 => true,
                    'inputType'               => 'checkbox',
                    'sql'                     => "char(1) NOT NULL default '1'"
				)
			)
		),
    'sql'                     => "blob NULL"
);

$GLOBALS['TL_DCA'][$strName]['fields']['apfel_landingpage_links'] = array
(
    'label'       => array('Links',''),
	'inputType' 		=> 'multiColumnWizard',
		'eval' 			=> array
		(
			'class' => 'clr',
			//'style'=>'clr',
			'columnFields' => array
			(
                'label' => array
				(
                    'label'                   => array('Label', ''),
                    'exclude'                 => true,
                    'inputType'               => 'text',
                    'eval'                    => array('class'=>'w25'),
                    'sql'                     => "text NULL"
				),
				'link' => array
				(
                    'label'                   => array('Link', ''),
                    'exclude'                 => true,
                    'inputType'               => 'text',
                    'eval'                    => array('class'=>'w25'),
                    'sql'                     => "text NULL"
				),
                'isButton' => array
				(
                    'label'                   => array('Button', ''),
                    'eval'                    => array('class'=>'w25'),
                    'exclude'                 => true,
                    'inputType'               => 'checkbox',
                    'sql'                     => "char(1) NOT NULL default ''"
				),
			)
		),
    'sql'                     => "blob NULL"
);