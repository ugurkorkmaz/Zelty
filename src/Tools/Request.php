<?php

namespace UgurKorkmaz\Zelty\Tools;

use UgurKorkmaz\Zelty\Interfaces\RequestInterface;
use UgurKorkmaz\Zelty\Exceptions\RequestException;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpClient\Exception\ClientException;

/**
 * @package UgurKorkmaz\Zelty
 * @author Uğur Korkmaz <korkmaz.uu@gmail.com>
 * @docs https://ugurkorkmaz.github.io/zelty
 */
class Request implements RequestInterface
{
    private $token = null;
    private $client = null;

    public function __construct()
    {
        $this->client = HttpClient::create();
        return $this;
    }
    public function setToken(string $token)
    {
        $this->token = $token;
        return $this;
    }
    public function get(string $endpoint, string $field = null, string $version = null): array
    {
        $result = [];

        try {
            $url = $this->mergeUrl($endpoint, $field, $version);
            $response = $this->client->request('GET', $url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token
                ]
            ]);
            $result['status'] = true;
            $result['message'] = $response->getStatusCode();
            $result['data'] = $response->toArray();
        } catch (RequestException $e) {
            $result['status'] = false;
            $result['message'] = $e->getMessage();
        } catch (ClientException $e) {
            $result['status'] = false;
            $result['message'] = $e->getMessage();
            $result['data'] = $e->getResponse()->getContent();
        } finally {

            return $result;
        }
    }
    public function set(string $endpoint, string $field = null, array $data): array
    {
        $result = [];
        $url = $this->mergeUrl($endpoint, $field);
        try {
            $response = $this->client->request('POST', $url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token
                ],
                'body' => $data
            ]);
            $result['status'] = true;
            $result['message'] = $response->getStatusCode();
            $result['data'] = $response->toArray();
        } catch (RequestException $e) {
            $result['status'] = false;
            $result['message'] = $e->getMessage();
        } catch (ClientException $e) {
            $result['status'] = false;
            $result['message'] = $e->getMessage();
            $result['data'] = $response;
        } finally {

            return $result;
        }
       return $result;
    }
    public function mergeUrl(string $endpoint, string $field = null, string $version = null)
    {
        $url = self::URL;
        $version = $version ?? self::VERSION;
        if (empty(self::ENDPOINT[$endpoint])) {
            throw new RequestException("Endpoint is not found");
            return false;
        }
        $endpoint = self::ENDPOINT[$endpoint];
        $field = $field ?? self::FIELD;
        return sprintf("%s%s%s%s", $url, $version, $endpoint, $field);
    }
}
