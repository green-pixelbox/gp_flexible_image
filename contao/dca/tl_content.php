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

array_insert($GLOBALS['TL_DCA']['tl_content']['palettes'], sizeof($GLOBALS['TL_DCA']['tl_content']['palettes']), array
(
    'GPFlexibleImage'                       => '{type_legend},type,headline;{gpFlexibleImage_legend},singleSRC,gpFlexibleImageHeightDesktop,gpFlexibleImageHeightTablet,gpFlexibleImageHeightMobile,title,size,imagemargin,imageUrl,fullsize,caption,alt,imageTitle;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop'
));



$GLOBALS['TL_DCA']['tl_content']['fields']['gpFlexibleImageHeightDesktop'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['gpFlexibleImageHeightDesktop'],
//    'exclude'                 => true,
//    'search'                  => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50', 'mandatory'=>'true'),
    'sql'                     => "varchar(255) NOT NULL default '500px'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['gpFlexibleImageHeightTablet'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['gpFlexibleImageHeightTablet'],
//    'exclude'                 => true,
//    'search'                  => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50', 'mandatory'=>'true'),
    'sql'                     => "varchar(255) NOT NULL default '400px'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['gpFlexibleImageHeightMobile'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['gpFlexibleImageHeightMobile'],
//    'exclude'                 => true,
//    'search'                  => true,
    'inputType'               => 'text',
    'eval'                    => array( 'maxlength'=>255, 'tl_class'=>'w50', 'mandatory'=>'true'),
    'sql'                     => "varchar(255) NOT NULL default '300px'"
);

?>