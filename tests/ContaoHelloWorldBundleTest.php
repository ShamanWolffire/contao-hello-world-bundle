<?php

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace ShamanWolffire\HelloWorlddBundle\Tests;

use ShamanWolffire\HelloWorlddBundle\ContaoHelloWorlddBundle;
use PHPUnit\Framework\TestCase;

class ContaoSkeletonBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new HelloWorlddBundle();

        $this->assertInstanceOf('ShamanWolffire\HelloWorlddBundle\ContaoHelloWorlddBundle', $bundle);
    }
}
