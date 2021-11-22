<?php

namespace UgurKorkmaz\Zelty\Interfaces;

interface ZeltyInterface
{
    /**
     * Zelty API Access Token
     * @param string $token
     * @return $this
     */
    public function setToken(string $token);

    /**
     * Zelty API Catalog
     * @param string $fields
     * @param array $params
     * @return array
     * @throws ZeltyException
     */
    public function catalog(string $field = null, array $params = null);
    /**
     * Zelty API Resturant
     * @param string $fields
     * @param array $params
     * @return array
     * @throws ZeltyException
     */
    public function restaurants(string $field = null,array $params = null);
    /**
     * Zelty API Customers
     * @param string $fields
     * @param array $params
     * @return array
     * @throws ZeltyException
     */
    public function customers(string $field = null,array $params = null);
    /**
     * Zelty API Orders
     * @param string $fields
     * @param array $params
     * @return array
     * @throws ZeltyException
     */
    public function orders(string $field = null,array $params = null);
    /**
     * Zelty API Cupons
     * @param string $fields
     * @param array $params
     * @return array
     * @throws ZeltyException
     */
    public function coupons(string $field = null,array $params = null);
}
