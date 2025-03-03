<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Inventory;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function account()
    {
        return view('shop/account');
    }

    public function cart()
    {
        return view('shop/cart');
    }

    public function checkOut()
    {
        return view('shop/checkOut');
    }

    public function fullWidthShop()
    {
        return view('shop/fullWidthShop');
    }

    public function productDetails(int $id)
    {
        $product = Inventory::findOrFail($id);
        $rents = $product->rents()->get(['id', 'time_start', 'time_end']);

        return view('shop.productDetails', compact('product', 'rents'));
    }


    public function productDetails2()
    {
        return view('shop/productDetails2');
    }

    public function shop()
    {
        return view('shop/shop');
    }

    public function sidebarLeft()
    {
        return view('shop/sidebarLeft');
    }

    public function sidebarRight()
    {
        return view('shop/sidebarRight');
    }

    public function variableProducts()
    {
        return view('shop/variableProducts');
    }

    public function groupedProducts(?string $category = null)
    {
        $categoryModel = Categories::where('title', $category)->first();

        if (!$categoryModel) {
            abort(404);
        }

        $products = Inventory::where('category_id', $categoryModel->id)->paginate(12);
        $totalCount = Inventory::where('category_id', $categoryModel->id)->count(); // Общее количество товаров

        return view('shop.sidebarLeft', compact('products', 'category', 'totalCount'));
    }
}
