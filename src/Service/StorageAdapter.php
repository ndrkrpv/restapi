<?php

namespace App\Service;

interface StorageAdapter
{
    public function find(int $id): array;
    public function findBy(string $field, string $value): array;
}