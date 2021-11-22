<?php

namespace UgurKorkmaz\Zelty\Entity;

use UgurKorkmaz\Zelty\Exceptions\EntityException;
use UgurKorkmaz\Zelty\Interfaces\EntityInterface;

use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints\Email;

class User implements EntityInterface
{
    private array $user = [];
    private $validator;
    public function __construct()
    {
        $this->validator = Validation::createValidator();
    }
    public function setFristName(string $name)
    {
        $this->user['name'] = $name;
        return $this;
    }
    public function setLastName(string $lastName)
    {
        $this->user['fname'] = $lastName;
        return $this;
    }
    public function setMail(string $email)
    {   
        $this->user['email'] = $email;   
        return $this;
    }
    public function setPhone(string $phone)
    {
        $this->user['phone'] = $phone;
        return $this;
    }
    public function setCountryCode(string $countryCode)
    {
        $this->user['country_code'] = $countryCode;
        return $this;
    }
    public function setCustomData(array $customData)
    {
        foreach ($customData as $key => $value) {
            $this->user[$key] = $value;
        }
        return $this;
    }
    public function toArray(): array
    {
        return $this->user;
    }
}
