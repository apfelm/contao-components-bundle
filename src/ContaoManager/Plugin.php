<?php

declare(strict_types=1);

/*
 * This file is part of ContaoComponentsBundle.
 *
 * (c) Michael Apfelthaler
 *
 * @license LGPL-3.0-or-later
 */

namespace Apfl\ContaoComponentsBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Apfl\ContaoComponentsBundle\ContaoComponentsBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoComponentsBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}