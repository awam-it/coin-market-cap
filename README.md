# WP Plugin Coin Market Cup API

How to use:
- Use shortcode with attributes inside content part <code>[CoinMarketCap api_key='<YOUR_API_KEY>' coins='<LIST_OF_COINS>'];</code>
- Use <em>do_shortcode</em> inside backend<br> 
<code>$shortcode = "[CoinMarketCap api_key='<YOUR_API_KEY>' coins='<LIST_OF_COINS>']";<br> 
echo do_shortcode( $shortcode );</code>

Example:
- <code>[CoinMarketCap api_key='d587eaa2-374f-404a-88ac-a70a6337a5b1' coins='BTC,ETH,XRP']</code>