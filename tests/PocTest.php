<?php

require_once __DIR__ . '/../src/Poc.php';

/**
 * Class PocTest
 */
class PocTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testCoverage1($value)
    {
        whatAmINotWorking($value);
    }

    /**
     * @dataProvider dataProvider
     */
    public function testCoverage2($value)
    {
        whatAmIWorking($value);
    }

    /**
     * @return array
     */
    public function dataProvider()
    {
        return [
            ['string'],
            [new \stdClass()],
            [123],
            [[]],
        ];
    }
}
