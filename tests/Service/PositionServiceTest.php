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
        $this->storageAdapterMock->expects(self::once())->method('findBy')->willReturn(
           [
               3 => [
                   "ID" => "3",
                   "Job title" => "Junior PHP Developer",
                   "Seniority level" => "Junior",
                   "Country" => "IE",
                   "City" => "Dublin",
                   "Salary" => "517500",
                   "Currency" => "SVU",
                   "Required skills" => "PHP, HTML, LAMP, CSS, SQL",
                   "Company size" => "100-500",
                   "Company domain" => "Communication"
               ]
           ]
        );
        $result = $this->service->findBy("Country", "IE");
        self::assertIsArray($result);
        self::assertCount(1, $result);
    }
}
