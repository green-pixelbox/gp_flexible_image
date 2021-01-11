<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2017 Leo Feyer
 *
 * @license LGPL-3.0+
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
