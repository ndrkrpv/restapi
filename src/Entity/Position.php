<?php


namespace App\Entity;


class Position
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

    public static function fromState(array $state) {
        return new self(
            $state["ID"],
            $state["Job title"],
            $state["Seniority level"],
            $state["Country"],
            $state["City"],
            $state["Salary"],
            $state["Currency"],
            $state["Required skills"],
            $state["Company size"],
            $state["Company domain"],
        );
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getJobTitle(): string
    {
        return $this->jobTitle;
    }

    /**
     * @return string
     */
    public function getSeniorityLevel(): string
    {
        return $this->seniorityLevel;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @return int
     */
    public function getSalary(): int
    {
        return $this->salary;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @return string
     */
    public function getRequiredSkills(): string
    {
        return $this->requiredSkills;
    }

    /**
     * @return string
     */
    public function getCompanySize(): string
    {
        return $this->companySize;
    }

    /**
     * @return string
     */
    public function getCompanyDomain(): string
    {
        return $this->companyDomain;
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