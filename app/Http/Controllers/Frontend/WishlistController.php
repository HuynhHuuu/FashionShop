<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index()
    {
        $categories = Category::where('status','0')->get();
        $wishlist = Wishlist::where('user_id', Auth::id())->get();
        return view('frontend.wishlist', compact('wishlist','categories'));
    }

    public function add(Request $request)
    {
        $product_id = $request->input('product_id');

        if(Auth::check())
        {
            $prod_id = $request->input('product_id');
            $prod_check = Product::where('id',$product_id)->first();

            if($prod_check)
            {
                if(Wishlist::where('prod_id', $product_id)->where('user_id', Auth::id())->exists())
                {
                    return response()->json(['status' => $prod_check->name."Already Added to wishlist"]);
                }
                else
                {
                    if (Product::find($prod_id)) {
                        $wish = new Wishlist();
                        $wish->prod_id = $prod_id;
                        $wish->user_id = Auth::id();
                        $wish->save();
                        return response()->json(['status' => "Product Added to Wishlist"]);
                    } else {
                        return response()->json(['status' => "Product doesn't exist"]);
                    }
                }
            }
        }
        else
        {
            return response()->json(['status'=> "Login to Continue"]);
        }
    }

    public function deleteitem(Request $request)
    {
        if(Auth::check())
        {
            $prod_id = $request->input('prod_id');
            if(Wishlist::where('prod_id', $prod_id)->where('user_id', Auth::id())->exists())
            {
                $wish = Wishlist::where('prod_id',$prod_id)->where('user_id', Auth::id())->first();
                $wish->delete();
                return response()->json(['status' => "Item Deleted Successfully"]);
            }
        }
        else
        {
            return  response()->json(['status' => "Login to Coutinue"]);
        }
    }

    public function wishlistcount()
    {
        $wishcount = Wishlist::where('user_id', Auth::id())->count();
        return response()->json(['count'=> $wishcount]);
    }
}
