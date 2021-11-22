<?php 
namespace UgurKorkmaz\Zelty\Exceptions;

use Exception;

class EntityException extends Exception
{
    public function __construct($message = "", $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}