<?php

/*
 * This file is part of the PrinceXMLPhp.
 *
 * (c) Gridonic <hello@gridonic.ch>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PrinceXMLPhp\Tests;

use PrinceXMLPhp\Prince;

class PrinceTest extends \PHPUnit_Framework_TestCase
{
    private $prince;

    public function setUp()
    {
        $this->prince = new Prince();
    }

    public function testInstance()
    {
        return true;
    }
}