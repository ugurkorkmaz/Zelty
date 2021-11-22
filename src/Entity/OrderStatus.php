<?php 
namespace UgurKorkmaz\Zelty\Entity;

use UgurKorkmaz\Zelty\Exceptions\EntityException;
use UgurKorkmaz\Zelty\Interfaces\EntityInterface;

class OrderStatus implements EntityInterface
{
    public function toArray(): array
    {
        return [];
    }
}