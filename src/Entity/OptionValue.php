<?php 
namespace UgurKorkmaz\Zelty\Entity;

use UgurKorkmaz\Zelty\Exceptions\EntityException;
use UgurKorkmaz\Zelty\Interfaces\EntityInterface;

class OptionValue implements EntityInterface
{
    public function toArray(): array
    {
        return [];
    }
}