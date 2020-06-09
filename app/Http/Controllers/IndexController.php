<?php

namespace App\Http\Controllers;

use ShopExpress\ApiClient\ApiClient;
use ShopExpress\ApiClient\Exception\NetworkException;
use ShopExpress\ApiClient\Exception\RequestException;
use ShopExpress\ApiClient\Response\ApiResponse;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public $ApiClient;
    public function __construct()
    {
        $this->ApiClient = new ApiClient(
            'lNwzuV_Gb',
            'admin',
            'http://newshop.kupikupi.org/adm/api/'
        );
    }

    public function index()
    {
        $orders = $this->ApiClient->get("orders", ['start' => 0, 'limit' => 10]);
        return view("index", ["orders" => $orders->orders]);
    }
    public function api(Request $request)
    {
        $page=$request->input('page', 0);
        if($page<0) return response()->json([],500);

        $orders = $this->ApiClient->get("orders", ['start' => $page*10, 'limit' => 10]);
        return response()->json($orders->orders);
    }
}
