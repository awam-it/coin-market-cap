<?php

function coin_market_cup_shortcode( $atts ){

    $atts = shortcode_atts(
        array(
            'api_key' => '',
            'coins' => '',
        ), $atts
    );

$api_key = $atts['api_key'];

$cmc = new CoinMarketCap($api_key);

$coins = array($atts['coins']);

$data = $cmc->get_cryptocurrency_data($coins);

if($data){

    $output = '<div class="CoinMarketCap">';

    foreach($data["data"] as $coin){
        $price = "$". price_formating($coin["quote"]["USD"]["price"]);
        $output .= $coin["name"]." (<i>".$coin["symbol"]."</i>): ";
        $output .= "<b>".$price."</b><br>";
    }
    
    $output = '</div>';
}
   return $output;
  
}
add_shortcode('CoinMarketCap', 'coin_market_cup_shortcode');
