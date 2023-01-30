<?php

    function price_formating($price) {
       
        $symbols_count = 2;
        if ($price < 10) {
            $symbols_count = 4;
        }

        $price_formating = number_format((float)$price, $symbols_count, '.', ' ');

        if (substr($price_formating, -1) == '0') {
             $price_formating = rtrim($price_formating, '0');
        }
        return $price_formating;
    }
