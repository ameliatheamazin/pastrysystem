<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB; //to import the database 
use App\Models\Product;
use App\Models\Order;
use App\Models\User;

class OrderController extends Controller
{
    //to show all orders (only admin and staff can use, where user only show their own order)
    public function index(Request $request)
    {
        $orders = Order::with('orderlist')
            ->when($request->query('id'), function ($query) use ($request) {
                return $query->where('id', 'like', $request->query('id'));
            })
            ->when($request->query('user_id'), function ($query) use ($request) {
                return $query->where('user_id', $request->query('user_id'));
            })
            ->paginate(10);

        return view('admin.orders.list', ['orders' => $orders, 'request' => $request]);
    }

    //to show 1 order item (admin,staff,user can use)
    public function show($id)
    {
        $order = Order::find($id);
        $products = $order->orderlist()->get();
        if (!$order) throw new ModelNotFoundException;

        return view('admin.orders.show', ['order' => $order, 'products' => $products,]);
    }

    //to edit order (admin, staff can edit only)
    public function showEdit($id)
    {
        $order = Order::find($id);
        $products = $order->orderlist()->get();
        if (!$order) throw new ModelNotFoundException;

        return view('admin.orders.edit', ['order' => $order, 'products' => $products,]);
    }

    //to edit order (admin, staff can edit only)
    public function update(Request $request, $id)
    {
        $request->validate([
            'delivery_address' => ['required', 'regex:/([- ,\/0-9a-zA-Z]+)/', 'min:16'],
        ]);

        $order = Order::find($id);
        $order->delivery_address = $request->delivery_address;
        $order->status = $request->status;
        $order->save();

        return redirect("/admin/order")->with('message', 'Order ' . $id . ' has been updated succesfully');
    }
}