<?php

namespace App\Tests\Service;

use App\Entity\Position;
use App\Service\PositionService;
use PHPUnit\Framework\TestCase;

class PositionServiceTest extends TestCase
{
    public function testShouldRetrievePositionByIdWhenExists()
    {
        $service = new PositionService();
        self::assertInstanceOf(Position::class, $service->retrievePositionById(1));
    }

}
