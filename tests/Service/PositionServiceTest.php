<?php

namespace App\Tests\Service;

use App\Entity\Position;
use App\Service\PositionService;
use PHPUnit\Framework\TestCase;

class PositionServiceTest extends TestCase
{
    private PositionService $service;

    public function setUp()
    {
        parent::setUp();
        $this->service = new PositionService();
    }

    public function testShouldRetrievePositionByIdWhenExists()
    {
        $position = $this->service->retrievePositionById(1);
        self::assertInstanceOf(Position::class, $position);
    }

}
