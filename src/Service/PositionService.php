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

    public function findBy($field, $value): array {
        $result = [];
        $positions = $this->storageAdapter->findBy($field, $value);
        foreach ($positions as $row) {
            $result[] = $this->mapRowToPosition($row);
        }

        return $result;
    }

    private function mapRowToPosition(array $row): Position {
        return Position::fromState($row);
    }
}