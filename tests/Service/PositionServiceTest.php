<?php

namespace App\Tests\Service;

use App\Service\PositionService;
use App\Service\StorageAdapter;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class PositionServiceTest extends TestCase
{
    private PositionService $service;

    private MockObject $storageAdapterMock;

    public function setUp()
    {
        parent::setUp();
        $this->storageAdapterMock = $this->createMock(StorageAdapter::class);
        $this->service = new PositionService($this->storageAdapterMock);
    }

    public function testShouldReturnListWhenCountryProvided(): void {
        $result = $this->service->findBy('country', 'IE');
        self::assertIsArray($result);
    }
}
