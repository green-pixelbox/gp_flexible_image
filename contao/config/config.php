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



/**
 * Content elements
 */
array_insert($GLOBALS['TL_CTE']['media'], sizeof($GLOBALS['TL_CTE']['media']), array
(
    'GPFlexibleImage' => 'greenpixelbox\flexibleimage\ContentGPFlexibleImage'
));

?>