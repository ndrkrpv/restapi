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
     */
    public function findById(int $id): ?Position {
        $result = $this->storageAdapter->find($id);
        if (!$result) {
            return null;
        }

        return $this->mapRowToPosition($result);
    }

    private function mapRowToPosition(array $row) {
        return Position::fromState($row);
    }
}