<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;

class OrdersController extends Controller
{
    protected $filters = ['id', 'color', 'battery', 'quantity', 'price', 'firstname', 'lastname', 'email', 'city', 'address', 'postalcode', 'phonenumber', 'created_at'];

    public function index()
    {  
        if(! $this->hasAFilter()) {
            $orders = Order::latest()->paginate(20);
            return view("orders.index", compact('orders'));
        }
        $orders = $this->filteredOrders();
        
        return view("orders.index", compact('orders'));        
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'quantity' => 'required',
            'color' => 'required',
            'battery' => 'required',
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|max:255',
            'city' => 'required|max:255',
            'address' => 'required|max:255',
            'postalcode' => 'required|max:20',
            'phonenumber' => 'required|max:20',
        ]);

        $request["price"] = $request["quantity"] * 469;

        if ($request["battery"] == "32") {
            $request["price"] = $request["quantity"] * 359;
        }

        $order = Order::create([
            "quantity" => $request["quantity"],
            "color" => $request["color"],
            "battery" => $request["battery"],
            "price" => $request["price"],
            "firstname" => $request["firstname"],
            "lastname" => $request["lastname"],
            "email" => $request["email"],
            "city" => $request["city"],
            "address" => $request["address"],
            "postalcode" => $request["postalcode"],
            "phonenumber" => $request["phonenumber"],
        ]);

        return redirect('/orders');
    }

    protected function hasAFilter()
    {
        return (in_array(key(request()->query()), $this->filters));
    }

    protected function filteredOrders()
    {
        $filter = key(request()->query());

         if(request($filter) == 1) {
            $orders = Order::orderBy($filter, 'desc')->paginate(20);
        } 

        if(request($filter) == 0) {
            $orders = Order::orderBy($filter, 'asc')->paginate(20);
        }

        $orders->appends($filter, request($filter));

        return $orders;
    }
}
