<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class PriceController extends Controller {

public static function ethPrice() {
    $data = json_decode(file_get_contents('https://min-api.cryptocompare.com/data/price?fsym=ETH&tsyms=USD'),true)['USD'];
    return $data;
    


}

}