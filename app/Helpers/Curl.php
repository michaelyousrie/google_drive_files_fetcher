<?php

namespace App\Helpers;

class Curl
{
    protected $ch;

    public function __construct()
    {
        $this->ch = curl_init();
    }

    public function __destruct()
    {
        curl_close($this->ch);
    }

    public function get(string $url, array $params = [])
    {
        curl_setopt($this->ch, CURLOPT_URL, $url);
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, http_build_query($params));
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec($this->ch);

        return json_decode($response, true);
    }
}
