<?php


namespace App\Service;


use App\Entity\Position;

class PositionService
{
    /**
     * @param int $id
     * @return Position
     */
    public function retrievePositionById(int $id) {
        return new Position();
    }

}