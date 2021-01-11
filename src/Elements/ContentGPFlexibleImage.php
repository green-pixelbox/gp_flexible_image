<?php

namespace greenpixelbox\flexibleimage;


/*
 * This file is part of gp_flexible_image.
 *
 * (c) Peter Friedhoff 2021 <info@green-pixelbox.de>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/green-pixelbox/gp_flexible_image
 */
class ContentGPFlexibleImage extends \ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_flexible_image';


	/**
	 * Return if the image does not exist
	 *
	 * @return string
	 */
	public function generate()
	{
		$GLOBALS['TL_CSS'][] = 'system/modules/gp_flexible_image/assets/css/frontend.css';
//		$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/gp_flexible_image/assets/js/effects.js';
		if ($this->singleSRC == '')
		{
			return '';
		}

		$objFile = \FilesModel::findByUuid($this->singleSRC);

		if ($objFile === null)
		{
			if (!\Validator::isUuid($this->singleSRC))
			{
				return '<p class="error">'.$GLOBALS['TL_LANG']['ERR']['version2format'].'</p>';
			}

			return '';
		}

		if (!is_file(TL_ROOT . '/' . $objFile->path))
		{
			return '';
		}

		$this->singleSRC = $objFile->path;

		return parent::generate();
	}


	/**
	 * Generate the content element
	 */
	protected function compile()
	{
		$this->addImageToTemplate($this->Template, $this->arrData);
	}
}
