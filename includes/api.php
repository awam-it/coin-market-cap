<?php

class CoinMarketCap {
    private $api_key;

    public function __construct($api_key) {
        $this->api_key = $api_key;
    }

    public function get_cryptocurrency_data($symbols) {
        $url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/quotes/latest';

        $query = array(
            'symbol' => implode(',', $symbols),
            'convert' => 'USD'
        );

        $query_to_string = http_build_query($query);
        $url .= '?'.$query_to_string;

        $headers = array(
            'Accepts: application/json',
            'X-CMC_PRO_API_KEY' => $this->api_key
        );

        $args = array(
            'headers' => $headers,
        );

        $response = wp_remote_get($url, $args);

        if (is_wp_error($response)) {
            return $response->get_error_message();
        }

        $data = json_decode(wp_remote_retrieve_body($response), true);
        return $data;
    }
}
