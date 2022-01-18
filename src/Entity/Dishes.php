<?php 
namespace UgurKorkmaz\Zelty\Entity;

use UgurKorkmaz\Zelty\Exceptions\EntityException;
use UgurKorkmaz\Zelty\Interfaces\EntityInterface;

class Dishes implements EntityInterface
{
    public function toArray(): array
    {
        return [];
    }
}