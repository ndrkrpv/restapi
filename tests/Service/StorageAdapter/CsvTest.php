<?php

namespace App\Tests\Service\StorageAdapter;

use App\Service\StorageAdapter\Csv;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Serializer\Encoder\CsvEncoder;

class CsvTest extends TestCase
{
    private Csv $service;

    public function setUp()
    {
        parent::setUp();
        $decoder = new CsvEncoder(); // TODO mock this
        $this->service = new Csv($decoder, 'positions.csv');
    }

    public function testShouldFindByIdWhenRowExists()
    {
        $result = $this->service->find(1);
        $this->assertSame([
            "ID" => "1",
            "Job title" => "Senior PHP Developer",
            "Seniority level" => "Senior",
            "Country" => "PT",
            "City" => "Lisbon",
            "Salary" => "747500",
            "Currency" => "SVU",
            "Required skills" => "PHP, REST, Symfony, Unit-testing, SOLID, Behat, Docker, AWS",
            "Company size" => "100-500",
            "Company domain" => "FinTech"
        ], $result);
    }

    public function testShouldFindByFieldValueWhenRowExists()
    {
        $result = $this->service->findBy('Country', 'IE');
        self::assertSame([
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
        ], $result);
    }


}
