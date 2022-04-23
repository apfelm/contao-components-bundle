<?php

declare(strict_types=1);

/*
 * This file is part of ContaoComponentsBundle.
 *
 * (c) Michael Apfelthaler
 *
 * @license LGPL-3.0-or-later
 */

namespace Apfl\ContaoComponentsBundle\Tests;

use Apfl\ContaoComponentsBundle\ContaoComponentsBundle;
use PHPUnit\Framework\TestCase;

class ContaoComponentsBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoComponentsBundle();

        $this->assertInstanceOf('Apfl\ContaoComponentsBundle\ContaoComponentsBundle', $bundle);
    }
}