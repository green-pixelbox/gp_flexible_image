<?php

/**
 * @package    flexibleImage
 * @copyright  GREEN PIXELBOX 2024
 * @author     Peter Friedhoff <info@green-pixelbox.de>
 * @license    LGPL-3.0+
 */

namespace GreenPixelbox\GpFlexibleImage\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use GreenPixelbox\GpFlexibleImage\GreenpixelboxFlexibleImageBundle;

/**
 * Class Plugin.
 *
 * @package ContaoManager
 */
class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(GreenpixelboxFlexibleImageBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
        ];
    }
}
