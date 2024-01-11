<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Drink;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        $query = Menu::latest();
        if ($request->has('search')) {
            $query->where('nama_makanan', 'like', '%' . $request->input('search') . '%')
                ->orWhere('keterangan', 'like', '%' . $request->input('search') . '%');
        }
        $menus = $query->paginate(6)->withQueryString();
        return view('home', compact('menus'));
    }

    public function menuMakanan()
    {
        $menus = Menu::all();
        return view('menu_makanan', ['menus' => $menus]);
    }

    public function menuMinuman()
    {
        $drinks = Drink::all();
        return view('menu_minuman', ['drinks' => $drinks]);
    }

    public function orderForm()
    {
        $menus = Menu::all();
        $drinks = Drink::all();

        return view('order-form', compact('menus', 'drinks'));
    }

    public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'id_pelanggan' => ['required', 'string', 'max:255', Rule::unique('orders', 'id_pelanggan')],
        'nama_pelanggan' => 'required|string|max:255',
        'menu_makanan' => 'required|exists:menus,id_makanan',
        'menu_minuman' => 'required|exists:drinks,id_minuman',
    ]);

    if ($validator->fails()) {
        return redirect('/order/form')
            ->withErrors($validator)
            ->withInput();
    }

    // Explicitly set a value for 'menu_makanan' based on the form input
    
    $order = new Order();
    $order->id_pelanggan = $request->id_pelanggan;
    $order->nama_pelanggan = $request->nama_pelanggan;
    $order->menu_makanan = $request->menu_makanan;
    $order->menu_minuman = $request->menu_minuman;
    $order->save();

    return redirect('/orders')->with('success', 'Order placed successfully!');
}
    public function showOrders()
    {
        $orders = Order::all();
        return view('orders', compact('orders'));
    }
}
