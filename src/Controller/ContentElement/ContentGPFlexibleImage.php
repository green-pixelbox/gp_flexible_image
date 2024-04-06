<?php

namespace GreenPixelbox\GpFlexibleImage\Controller\ContentElement;

use Contao\ContentElement;
use Contao\System;

/**
 * Contao Open Source CMS
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package    flexibleImage Bundle 2.0.0
 * @copyright  Peter Friedhoff 2024
 * @author     Peter Friedhoff <info@green-pixelbox.de>
 * @license    LGPL-3.0+
 */
class ContentGPFlexibleImage extends ContentElement
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_flexible_image';

	/**
	 *
	 *
	 * @return string
	 */
	public function generate()
	{
        $assetsDir = 'bundles/greenpixelboxflexibleimage';
        // Backend User Frontend User abfragen anstatt TL_USER
        if (System::getContainer()->get('contao.routing.scope_matcher')
            ->isBackendRequest(System::getContainer()->get('request_stack')->getCurrentRequest() ?? Request::create(''))
        ){
            // ist Backend User, mache ....
        }else{
            $GLOBALS['TL_CSS'][] = $assetsDir . '/css/flexible_image.css|static';
        }

		return parent::generate();
	}

	/**
	 * Generate the content element
	 */
	protected function compile()
	{
	}
}
