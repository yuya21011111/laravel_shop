<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Stock;
use App\Models\PrimaryCategory;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
 public function __construct()
    {
        $this->middleware('auth:users');

        $this->middleware(function ($request, $next) {
            $id = $request->route()->parameter('item');
            if(!is_null($id)) {
                $itemId = Product::availableItems()->where('products.id', $id)->exists();
                if(!$itemId) {
                    abort(404);
                }
            }
           return $next($request);
        });
    }

    public function index(Request $request) {
        
        $categories = PrimaryCategory::with('secondary')
        ->get();

        $products = Product::availableItems()
        ->selectCategory($request->category ?? '0')
        ->searchKeyword($request->keyword)
        ->sortOrder($request->sort)
        ->paginate($request->pagination ?? '10');
        
        return view('user.index',compact('products','categories'));
    }

    public function show($id) {
        $product = Product::findOrFail($id);
        $quantity = Stock::where('product_id', $product->id)
        ->sum('quantity');

        // いたずら防止で10より大きい場合は10で固定とする
        if($quantity > 10) {
            $quantity = 10;
        }

        return view('user.show',compact('product','quantity'));

    }
}
