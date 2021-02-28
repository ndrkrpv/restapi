<?php

namespace App\Entity\Dto;

use App\Entity\Position;

class PositionDto
{
    private int $id;
    private string $jobTitle;
    private string $seniorityLevel;
    private string $country;
    private string $city;
    private int $salary;
    private string $currency;
    private string $requiredSkills;
    private string $companySize;
    private string $companyDomain;

    public function __construct(
        $id,
        $jobTitle,
        $seniorityLevel,
        $country,
        $city,
        $salary,
        $currency,
        $requiredSkills,
        $companySize,
        $companyDomain
    ) {
        $this->id = $id;
        $this->jobTitle = $jobTitle;
        $this->seniorityLevel = $seniorityLevel;
        $this->country = $country;
        $this->city = $city;
        $this->salary = $salary;
        $this->currency = $currency;
        $this->requiredSkills = $requiredSkills;
        $this->companySize = $companySize;
        $this->companyDomain = $companyDomain;
    }

    public static function fromEntity(Position $position) {
        return new PositionDto(
            $position->getId(),
            $position->getJobTitle(),
            $position->getSeniorityLevel(),
            $position->getCountry(),
            $position->getCity(),
            $position->getSalary(),
            $position->getCurrency(),
            $position->getRequiredSkills(),
            $position->getCompanySize(),
            $position->getCompanyDomain()
        );
    }

    public function toArray() {
        $vars = get_object_vars($this);
        $array = [];
        foreach ($vars as $key => $value) {
            $array[ltrim($key, '_')] = $value;
        }

        return $array;
    }

}