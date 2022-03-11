<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package   fen
 * @author    Frank Hoppe
 * @license   GNU/LGPL
 * @copyright Frank Hoppe 2013
 */

/**
 * palettes
 */
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';{templateparser_legend:hide},templateparser';

/**
 * fields
 */

$GLOBALS['TL_DCA']['tl_settings']['fields']['templateparser'] = array
(
	'label'                               => &$GLOBALS['TL_LANG']['tl_settings']['templateparser'],
	'exclude'                             => true,
	'inputType'                           => 'multiColumnWizard',
	'eval'                                => array
	(
		'tl_class'                        => 'long clr',
		'buttonPos'                       => 'middle',
		'buttons'                         => array
		(
			'copy'                        => false,
			'delete'                      => 'system/themes/flexible/icons/delete.svg',
			'move'                        => false,
			'up'                          => 'system/themes/flexible/icons/up.svg',
			'down'                        => 'system/themes/flexible/icons/down.svg'
		),
		'columnFields'                    => array
		(
			'template' => array
			(
				'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['templateparser_template'],
				'exclude'                 => true,
				'inputType'               => 'text',
				'eval'                    => array
				(
					'tl_class'            => 'w50', 
					'style'               => 'width:100%', 
					'mandatory'           => true
				),
			),
			'search' => array
			(
				'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['templateparser_search'],
				'exclude'                 => true,
				'inputType'               => 'text',
				'eval'                    => array
				(
					'tl_class'            => 'w50', 
					'style'               => 'width:100%', 
					'allowHtml'           => true,
					'mandatory'           => true
				),
			),
			'replace' => array
			(
				'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['templateparser_replace'],
				'exclude'                 => true,
				'inputType'               => 'text',
				'eval'                    => array
				(
					'tl_class'            => 'w50', 
					'style'               => 'width:100%', 
					'allowHtml'           => true,
					'mandatory'           => false
				),
			),
			'info' => array
			(
				'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['templateparser_info'],
				'exclude'                 => true,
				'inputType'               => 'text',
				'eval'                    => array
				(
					'tl_class'            => 'w50', 
					'style'               => 'width:100%', 
					'mandatory'           => false
				),
			),
		)
	),
);
