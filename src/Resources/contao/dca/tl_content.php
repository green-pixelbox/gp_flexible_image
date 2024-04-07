<?php

/*
 * This file is part of gp_flexible_image.
 *
 * (c) Peter Friedhoff 2021 <info@green-pixelbox.de>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/green-pixelbox/gp_flexible_image
 */

$GLOBALS['TL_DCA']['tl_content']['palettes']['GPFlexibleImage'] = '{type_legend},type,headline;{source_legend},singleSRC,size,fullsize,gpOverwriteMeta,gpFlexibleImageWidthDesktop,gpFlexibleImageHeightDesktop,gpFlexibleImageHeightTablet,gpFlexibleImageHeightMobile,gpFlexibleImageObjectPositionX,gpFlexibleImageObjectPositionY;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] ='gpOverwriteMeta';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['gpOverwriteMeta'] = 'alt,imageTitle,imageUrl,caption';



$GLOBALS['TL_DCA']['tl_content']['fields']['gpFlexibleImageWidthDesktop'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['gpFlexibleImageWidthDesktop'],
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50 clr', 'mandatory'=>'true'),
    'sql'                     => "varchar(255) NOT NULL default '100%'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['gpFlexibleImageHeightDesktop'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['gpFlexibleImageHeightDesktop'],
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50', 'mandatory'=>'true'),
    'sql'                     => "varchar(255) NOT NULL default '500px'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['gpFlexibleImageHeightTablet'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['gpFlexibleImageHeightTablet'],
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50', 'mandatory'=>'true'),
    'sql'                     => "varchar(255) NOT NULL default '400px'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['gpFlexibleImageHeightMobile'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['gpFlexibleImageHeightMobile'],
    'inputType'               => 'text',
    'eval'                    => array( 'maxlength'=>255, 'tl_class'=>'w50', 'mandatory'=>'true'),
    'sql'                     => "varchar(255) NOT NULL default '300px'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['gpFlexibleImageObjectPositionX'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['gpFlexibleImageObjectPositionX'],
    'inputType'               => 'text',
    'eval'                    => array('rgxp'=>'digit', 'maxlength'=>3, 'tl_class'=>'w50 clr'),
    'sql'                     => "varchar(255) NOT NULL default '50'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['gpFlexibleImageObjectPositionY'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['gpFlexibleImageObjectPositionY'],
    'inputType'               => 'text',
    'eval'                    => array('rgxp'=>'digit', 'maxlength'=>3, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default '50'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['gpOverwriteMeta'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['gpOverwriteMeta'],
    'inputType'               => 'checkbox',
    'eval'                    => array('submitOnChange'=>true, 'tl_class'=>'w50 clr'),
    'sql'                     => array('type' => 'boolean', 'default' => true)
);
