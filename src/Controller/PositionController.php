<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class PositionController
{
    public function positionsAction(int $id): JsonResponse
    {
        $position = [
            'id' => $id,
            'jobTitle' => 'Senior PHP Developer',
            'seniorityLevel' => 'Senior',
            'country' => 'DE',
            'city' => 'Berlin',
            'salary' => 747500,
            'currency' => 'SVU',
            'requiredSkills' => 'PHP, Symfony, REST, Unit-testing, Behat, SOLID, Docker, AWS',
            'companySize' => '100-500',
            'companyDomain' => 'Automotive'
        ];

        return new JsonResponse($position, Response::HTTP_OK);
    }

}