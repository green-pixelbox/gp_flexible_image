<?php

namespace greenpixelbox\flexibleimage;


/**
 * Front end content element "image".
 *
 * @author Leo Feyer <https://github.com/leofeyer>
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
		$GLOBALS['TL_CSS'][] = 'system/modules/gp_flexible_image/assets/css/flexible_image.css|static';
//		$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/gp-flexible-image/assets/js/effects.js';
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
