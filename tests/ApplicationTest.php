<?php

namespace tests;

use \PHPUnit_Framework_TestCase;

use Framework\Application;

class ApplicationTest extends PHPUnit_Framework_TestCase
{
    public function testCreateApplicationShouldCreateInstanceOnlyOnce()
    {
        $application1 = Application::getInstance(array());
        $application2 = Application::getInstance(array());

        $this->assertSame($application1, $application2);
    }
}
