<?php

// get the currency from session and put default as sar currency
if (!function_exists('getCurrency')) {
    function getCurrency()
    {
       return  session('currency', 'sar');
    }
}

// calculate the currencies from sar and from dollar
if (!function_exists('calcPriceWithCurrentCurrency')) {
    function calcPriceWithCurrentCurrency(float $price) : float
    {
        if(getCurrency() == 'sar'){
            return $price;
        }
        return round($price/3.75,3);
    }
}

// to put the symbols on the blades
if (!function_exists('getSymbolCurrency')) {
    function getSymbolCurrency()
    {
        return getCurrency() == 'sar' ? '﷼‎' : '$';
    }
}
