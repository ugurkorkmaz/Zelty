<?php 
namespace UgurKorkmaz\Zelty\Entity;

use UgurKorkmaz\Zelty\Exceptions\EntityException;
use UgurKorkmaz\Zelty\Interfaces\EntityInterface;

class MenuPart implements EntityInterface
{
    public function toArray(): array
    {
        return [];
    }
}