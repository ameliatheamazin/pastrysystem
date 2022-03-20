<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB; //to import the database 
use App\Models\Product;
use App\Models\Order;
use App\Models\User;

class AdminProductController extends Controller
{
    //to show all products (only admin and staff can use, where user only show their own products)
    public function index(Request $request)
    {
        $products = Product::with('orderlist')
            ->when($request->query('name'), function ($query) use ($request) {
                return $query->where('name', 'like', $request->query('name'));
            })
            ->when($request->query('description'), function ($query) use ($request) {
                return $query->where('description', $request->query('description'));
            })
            ->paginate(10);

        return view('admin/product/list', ['products' => $products, 'request' => $request]);
    }

    //to show 1 order item (admin,staff,user can use)
    public function show($id)
    {
        $product = Product::find($id);
        if (!$product) throw new ModelNotFoundException;

        return view('admin.product.show', ['product' => $product]);
    }

    //to edit order (admin, staff can edit only)
    public function showEdit($id)
    {
        $product = Product::find($id);
        if (!$product) throw new ModelNotFoundException;

        return view('admin.product.edit', ['product' => $product]);
    }

    //to edit order (admin)
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'regex:/([- ,\/0-9a-zA-Z]+)/'],
            'description' => ['required', 'regex:/([- ,\/0-9a-zA-Z]+)/'],
            'price' => ['required', 'regex:/^(\d+(,\d{1,2})?)?$/', 'min:1'],
            'image_file' => 'required | mimes:jpeg,jpg,png | max:2000',

        ]);
        $product = Product::find($id);
        if ($request->hasFile('image_file')) {
            $filename = $product->name;
            $filenameToStore = $filename . '.jpg';
            $path = $request->file('image_file')->storeAs('public/products', $filenameToStore);
        } else {
            $filenameToStore = 'noimage.jpg';
        }

        $product->image_file = $filenameToStore;
        $product->description = $request->description;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();

        return redirect("/admin/product")->with('message', 'Product ' . $id . ' has been updated succesfully');
    }

    public function destroy($id)
    {
        // if (Gate::allows('isAdmin')) {
        //     $pizza = Pizza::find($id);
        //     $pizza->delete();

        //     return redirect()->route('admin.pizza.index')
        //                     ->with('success','Pizza deleted successfully');
        // } else {
        //     return redirect()->route('admin.pizza.index')->with('unauthorized','Unauthorized Action');;
        // }

        $product = Product::find($id);
        $product->delete();

        return redirect("/admin/product")->with('message', 'Product deleted successfully');
    }

    //to add product (admin can edit only)
    public function showAdd()
    {
        return view("admin/product/add");
    }


    //to edit order (admin)
    public function add(Request $request)
    {
        $request->validate([
            'name' => ['required', 'regex:/([- ,\/0-9a-zA-Z]+)/'],
            'description' => ['required', 'regex:/([- ,\/0-9a-zA-Z]+)/'],
            'price' => ['required', 'regex:/^(\d+(,\d{1,2})?)?$/', 'min:1'],
            'image_file' => 'required | mimes:jpeg,jpg,png | max:2000',

        ]);
        $product = new Product;
        if ($request->hasFile('image_file')) {
            $filename = $product->name;
            $filenameToStore = $filename . '.jpg';
            $path = $request->file('image_file')->storeAs('public/products', $filenameToStore);
        } else {
            $filenameToStore = 'noimage.jpg';
        }

        $product->image_file = $filenameToStore;
        $product->description = $request->description;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();

        return redirect("/admin/product")->with('message', 'Product has been added succesfully');
    }
}