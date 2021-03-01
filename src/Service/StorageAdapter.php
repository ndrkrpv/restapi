<?php

namespace App\Service;

interface StorageAdapter
{
    public function find(int $id);
}