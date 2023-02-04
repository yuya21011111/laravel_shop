<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shop;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use InterventionImage;

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
        $shop = Shop::findOrFail($id);
        return view('owner.shops.edit', compact('shop'));
    }

    public function update(Request $request, $id)
    {
         $imageFile = $request->image;
         if(!is_null($imageFile) && $imageFile->isValid()) {
             //リサイズなし
            //  Storage::putFile('public/shops', $imageFile);

            // リサイズあり
            $fileName = uniqid(rand().'_');
            $extension = $imageFile->extension();
            $fileNameToStore = $fileName . '.' . $extension;
            $resizedImage = InterventionImage::make($imageFile)->resize(1920, 1080)->encode();
            // 画像ファイル確認
            // dd($imageFile,$resizedImage);

            Storage::put('public/shops/' . $fileNameToStore, $resizedImage);
         }

         return redirect()->route('owner.shops.index');
    }
}
