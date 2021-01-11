<?php

/**
 * Parallax Image - Modul
 *
 * Copyright (C) 2016 Green Pixelbox
 *
 * @link    http://www.green-pixelbox.de
 * @license proprietary
 */




/**
 * Content elements
 */
array_insert($GLOBALS['TL_CTE']['media'], sizeof($GLOBALS['TL_CTE']['media']), array
(
    'GPFlexibleImage' => 'greenpixelbox\flexibleimage\ContentGPFlexibleImage'
));

?>