<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shop;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:owners');

        $this->middleware(function ($request, $next) {
            $id = $request->route()->parameter('shop');
            if(!is_null($id)) {
                $shopsOwnerId = Shop::findOrFail($id)->owner->id;
                $shopId = (int)$shopsOwnerId; // 文字を数値に変換
                $ownerId = Auth::id();
                if($shopId !== $ownerId) {
                    abort(404);
                }
            }
           return $next($request);
        });
        
    }

    public function index()
    {
        // $ownerId = Auth::id();
        $shops = Shop::where('owner_id',Auth::id())->get();

        return view('owner.shops.index',compact('shops'));
    }

    public function edit($id)
    {
       dd(Shop::findOrFail($id));
    }

    public function update(Request $request, $id)
    {

    }
}
