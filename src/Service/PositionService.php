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
        return new Position(
           1,
           "Senior PHP Developer",
           "Senior",
           "DE",
           "Berlin",
           747500,
           "SVU",
           "PHP, Symfony, REST, Unit-testing, Behat, SOLID, Docker, AWS",
           "100-500",
           "Automotive"
        );
    }
}