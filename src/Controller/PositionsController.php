<?php

namespace App\Controller;

use App\Entity\Position;
use App\Service\PositionService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class PositionsController
{
    private PositionService $positionService;

    public function __construct(PositionService $positionService) {
        $this->positionService = $positionService;
    }

    public function positionsAction(int $id): JsonResponse
    {
        $position = $this->positionService->findById($id);

        if (!$position) {
            return new JsonResponse(['errorMessage' => 'Position was not found'], Response::HTTP_NOT_FOUND);
        }
        return new JsonResponse($position->toArray(), Response::HTTP_OK);
    }

    public function positionsByCountryAction(string $country): JsonResponse {
        $positions = $this->positionService->findBy('Country', $country);
        $positions = array_map(function(Position $position) {
            return $position->toArray();
        }, $positions);
        return new JsonResponse($positions, Response::HTTP_OK);
    }

}