<?php
namespace App\Medix;

use GuzzleHttp\Psr7\Request;

class Client
{
    const MEDIX_API_URL     = 'http://staging.api.dev.medix.ph/v1/';
    const MEDIX_CLIENT_ID   = 'pedix';
    const MEDIX_SECRET      = 'dOpOogNqpYkCbOybsflA';
    const MEDIX_TENANT      = 'dev';

    protected $client;

    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client([
            'base_uri'  => Client::MEDIX_API_URL
        ]);
    }

    public function auth($data)
    {
        // Api Credentials
        $data['client_id']      = Client::MEDIX_CLIENT_ID;
        $data['client_secret']  = Client::MEDIX_SECRET;
        $data['grant_type']     = 'password';

        $auth = $this->post('auth', $data);
        return $auth;
    }

    public function get($resource)
    {
        return $this->request('GET', $resource);
    }

    public function post($resource, $data = [])
    {
        return $this->request('POST', $resource, $data);
    }

    public function put($resource, $data = [])
    {
        return $this->request('PUT', $resource, $data);
    }
    public function status()
    {
        $result = json_decode($response->getStatus());
        return result;
    }

    public function request($method, $resource, $data = [])
    {
        $url = Client::MEDIX_API_URL . $resource;

        $headers = [
            'X-Tenant'  => Client::MEDIX_TENANT
        ];

        if (\Session::has('token')) {
            $headers['Authorization'] = 'Bearer '.\Session::get('token');
        }

        $request = new Request($method, $url, $headers);
        $response = $this->client->send($request, ['json' => $data]);
        $result = json_decode($response->getBody());
        return $result;
    }
}