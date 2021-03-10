<?php

namespace App\Controller;

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
        $position = $this->positionService->findById($id);
        return new JsonResponse($position->toArray(), Response::HTTP_OK);
    }

}