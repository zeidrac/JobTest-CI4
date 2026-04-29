<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function index(): string
    {
        return view('shop');
    }


    public function product(): string
    {
        return view('product');
    }
}
    // public function product($type)
    // {
    //     echo '<h2> This is a product: ' .$type.' </h2>';
    // }

// public function product($type)
// {
//     return "Product type is: " . $type;
// }

// }
