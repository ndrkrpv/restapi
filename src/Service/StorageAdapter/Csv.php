<?php

namespace App\Service\StorageAdapter;

use App\Service\StorageAdapter;
use Symfony\Component\Serializer\Encoder\DecoderInterface;

class Csv implements StorageAdapter
{
    private DecoderInterface $decoder;

    private $data = [];

    public function __construct(DecoderInterface $decoder, string $filePath)
    {
        $this->decoder = $decoder;
        $this->data = $this->decoder->decode(file_get_contents($filePath), 'csv');
    }

    public function find(int $id)
    {
        if (isset($this->data[$id - 1])) {
            return $this->data[$id -1];
        }
        return [];
    }

}