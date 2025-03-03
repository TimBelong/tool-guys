<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InventoryController extends Controller
{
    public function storeFavorite($inventoryId)
    {
        $user = Auth::user();

        if (!$user) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        if ($user->favorites()->where('inventory_id', $inventoryId)->exists()) {
            $user->favorites()->detach($inventoryId);

            return response()->json(['message' => 'Removed from favorites', 'status' => 'removed']);
        } else {
            $user->favorites()->attach($inventoryId);

            return response()->json(['message' => 'Added to favorites', 'status' => 'added']);
        }
    }

    public function removeFavorite($inventoryId)
    {
        $user = auth()->user();

        if (!$user) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $user->favorites()->detach($inventoryId);

        return response()->json(['message' => 'Removed from favorites']);
    }
}

