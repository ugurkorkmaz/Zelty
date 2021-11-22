<?php

namespace UgurKorkmaz\Zelty;

use UgurKorkmaz\Zelty\Tools\Request;
use UgurKorkmaz\Zelty\Interfaces\ZeltyInterface;

/**
 * Class Zelty
 * Zelty API Package
 * @package UgurKorkmaz\Zelty
 * @author  Ugur Korkmaz <korkmaz.uu@gmail.com>
 * @since   21/11/2021
 * @version 1.0.0
 * @license MIT
 * @link https://ugurkorkmaz.github.io/zelty
 * 
 */
class Zelty implements ZeltyInterface
{
    private $request;
    public function __construct()
    {
        $this->request = new Request();
    }
    public function setToken(string $token)
    {
        $this->request->setToken($token);
    }
    public function catalog(?string $field = null, ?array $params = null)
    {
        $endpoint = 'catalog';
        if ($params == null) {
            return $this->request->get($endpoint, $field, $params);
        }else {
            return $this->request->set($endpoint, $field, $params);
        }
    }
    public function restaurants(?string $field = null, ?array $params = null)
    {
        $endpoint = 'restaurants';
        if ($params == null) {
            return $this->request->get($endpoint, $field, $params);
        }else {
            return $this->request->set($endpoint, $field, $params);
        }
    }
    public function customers(?string $field = null, ?array $params = null)
    {
        $endpoint = 'customers';
        if ($params == null) {
            return $this->request->get($endpoint, $field, $params);
        }else {
            return $this->request->set($endpoint, $field, $params);
        }
    }
    public function orders(?string $field = null, ?array $params = null)
    {
        $endpoint = 'orders';
        if ($params == null) {
            return $this->request->get($endpoint, $field, $params);
        }else {
            return $this->request->set($endpoint, $field, $params);
        }
    }
    public function coupons(?string $field = null, ?array $params = null)
    {
        $endpoint = 'coupons';
        if ($params == null) {
            return $this->request->get($endpoint, $field, $params);
        }else {
            return $this->request->set($endpoint, $field, $params);
        }
    }
}
