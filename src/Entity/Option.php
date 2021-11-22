<?php 
namespace UgurKorkmaz\Zelty\Entity;

use UgurKorkmaz\Zelty\Exceptions\EntityException;
use UgurKorkmaz\Zelty\Interfaces\EntityInterface;

class Option implements EntityInterface
{
    public function toArray(): array
    {
        return [];
    }
}