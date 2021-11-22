<?php

namespace UgurKorkmaz\Zelty\Interfaces;

/**
 * RequestInterface
 * @author Uğur Korkmaz <korkmaz.uu@gmail.com>
 * @package UgurKorkmaz\Zelty
 * @version 1.0.0
 * @docs https://ugurkorkmaz.github.io/zelty
 */

interface RequestInterface
{
    public const URL = "https://api.zelty.fr/";
    public const VERSION = "2.5";
    public const ENDPOINT =
    [
        'catalog'     => '/catalog',
        'restaurants' => '/restaurants',
        'customers'   => '/customers',
        'orders'      => '/orders',
        'coupons'     => '/coupons',
    ];
    public const FIELD = '';
    
    /**
     * Zelty API Access Token
     * @param string $token
     */
    public function setToken(string $token);

    /**
     * Merge Url
     * @param string $endpoint
     * @param string $field
     * @param string $version
     * @return string
     */
    public function mergeUrl(string $endpoint, string $field = null, string $version = null);

    /**
     * Get Request
     * @param string $endpoint
     * @param string $field
     * @param string $version
     * @return string
     */
    public function get(string $endpoint, string $field = null): array;

    /**
     * Post Request
     * @param string $endpoint
     * @param string $field
     * @param string $version
     * @return string
     */
    public function set(string $endpoint, string $field = null, array $data): array;
}
