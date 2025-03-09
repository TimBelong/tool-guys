<?php

namespace App\Http\Controllers;

use App\Repositories\CategoriesRepository;
use App\Repositories\InventoryRepository;
use App\Services\ProductsService;
use App\Services\RentsService;

class HomeController extends Controller
{
    public function index(CategoriesRepository $categoriesRepository)
    {
        $categories = $categoriesRepository->getParentCategories();

        return view('home/index', compact('categories'));
    }

    public function indexFive(InventoryRepository $inventoryRepository, ProductsService $marketService)
    {
        $latestInventories = $inventoryRepository->getLatestInventories(6);
        $topInventories = $inventoryRepository->getTopRentedInventories(5);

        return view('home/index', compact('latestInventories', 'topInventories'));
    }

    public function allCategory()
    {
        return view('home/allCategory');
    }

    public function category()
    {
        return view('home/category');
    }

    public function externalProducts()
    {
        return view('home/externalProducts');
    }

    public function outOfStockProducts()
    {
        return view('home/outOfStockProducts');
    }

    public function shopFiveColumn()
    {
        return view('home/shopFiveColumn');
    }

    public function simpleProducts()
    {
        return view('home/simpleProducts');
    }

    public function thankYou()
    {
        return view('home/thankYou');
    }

    public function wishlist()
    {
        return view('home/wishlist');
    }

    public function login()
    {
        return view('home/login');
    }
}
