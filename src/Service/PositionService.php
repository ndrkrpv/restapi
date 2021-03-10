<?php


namespace App\Service;


use App\Entity\Position;

class PositionService
{
    private StorageAdapter $storageAdapter;

    public function __construct(StorageAdapter $storageAdapter) {
        $this->storageAdapter = $storageAdapter;
    }

    /**
     * @param int $id
     * @return Position
     * @throws \Exception
     */
    public function findById(int $id): Position {
        $result = $this->storageAdapter->find($id);
        if (!$result) {
            throw new \Exception("Position with id $id was not found");
        }

        return $this->mapRowToPosition($result);
    }

    private function mapRowToPosition(array $row) {
        return Position::fromState($row);
    }
}