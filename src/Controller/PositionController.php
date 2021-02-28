<?php

namespace App\Controller;

use App\Entity\Dto\PositionDto;
use App\Service\PositionService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class PositionController
{
    private PositionService $positionService;

    public function __construct(PositionService $positionService) {
        $this->positionService = $positionService;
    }


    public function positionsAction(int $id): JsonResponse
    {
        $position = $this->positionService->retrievePositionById($id);
        $positionDto = PositionDto::fromEntity($position);

        return new JsonResponse($positionDto->toArray(), Response::HTTP_OK);
    }

}