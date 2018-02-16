<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function show()
    {
        $query = request('q');

        $orders =  Order::search($query)->paginate(20);

        return view("orders.index", compact('orders'));
    }
}
