<?php

/**
 * Bright Cloud Studio's Custom Clickthrough Button
 *
 * Copyright (C) 2022 Bright Cloud Studio
 *
 * @package    bright-cloud-studio/custom-clickthrough-button
 * @link       https://www.brightcloudstudio.com/
 * @license    http://opensource.org/licenses/lgpl-3.0.html
**/

 /* Extend the tl_news palettes */
$GLOBALS['TL_DCA']['tl_news']['palettes']['default'] = str_replace(';{teaser_legend}', ';{add_news_fields_legend},news_issue;{teaser_legend}', $GLOBALS['TL_DCA']['tl_news']['palettes']['default']);

$GLOBALS['TL_DCA']['tl_news']['fields']['news_issue'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_news']['news_issue'],
	'inputType'               => 'text',
	'default'                 => '',
	'search'                  => true,
	'eval'                    => array('mandatory'=>false, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
