<?php

namespace App\Tests\Service;

use App\Service\SumService;
use PHPUnit\Framework\TestCase;

class SumServiceTest extends TestCase
{
    public function testMakeSum()
    {
        $service = new SumService();
        self::assertEquals(5, $service->makeSum(2, 3));
    }

}