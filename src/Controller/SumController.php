<?php

namespace App\Controller;

use App\Service\SumService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class SumController
{
    /**
     * @var SumService Simple service
     */
    private SumService $sumService;

    /**
     * SumController constructor.
     * @param SumService $sumService Simple service
     */
    public function __construct(SumService $sumService) {
        $this->sumService = $sumService;
    }

    /**
     * @param string $a First addendum
     * @param string $b Second addendum
     * @return JsonResponse Response
     */
    public function sumAction(string $a, string $b): JsonResponse
    {
        return new JsonResponse(['sum' => $this->sumService->makeSum($a, $b)], Response::HTTP_OK);
    }

}