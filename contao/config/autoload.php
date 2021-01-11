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
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'greenpixelbox\flexibleimage',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Elements
	'greenpixelbox\flexibleimage\ContentGPFlexibleImage' => 'system/modules/gp_flexible_image/elements/ContentGPFlexibleImage.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_flexible_image' => 'system/modules/gp_flexible_image/templates/elements',
));
