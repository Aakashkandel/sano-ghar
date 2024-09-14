<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function dashboard()
    {
        $userCount = User::count();
        $productCount = Product::count();
        $orderCount = Order::count();
        $latestUsers = User::latest()->take(5)->get();
        $latestProducts = Product::latest()->take(5)->get();

        return view('dashboard', compact('userCount', 'productCount', 'orderCount', 'latestUsers', 'latestProducts'));

    }
}
