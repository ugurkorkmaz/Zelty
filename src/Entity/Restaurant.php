<?php 
namespace UgurKorkmaz\Zelty\Entity;

use UgurKorkmaz\Zelty\Exceptions\EntityException;
use UgurKorkmaz\Zelty\Interfaces\EntityInterface;

class Restaurant implements EntityInterface
{
    public function toArray(): array
    {
        return [];
    }
}