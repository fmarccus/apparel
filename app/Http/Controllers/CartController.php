<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Apparel;
use App\Models\Cart;
use Illuminate\Support\Facades\Crypt;



class CartController extends Controller
{
    public function index()
    {
        if (Auth::user()->userType == 1 && Auth::user()->email_verified_at != NULL) {
            $search = request()->query('search');
            if ($search) {
                $apparels = Apparel::where('name', 'LIKE', "%{$search}%")
                    ->orWhere('type', 'LIKE', "%{$search}%")
                    ->orWhere('style', 'LIKE', "%{$search}%")
                    ->orWhere('retailPrice', 'LIKE', "%{$search}%")
                    ->paginate(20);
            } else {
                $apparels = DB::table('apparels')->orderBy('created_at', 'asc')->paginate('20');
            }
            return view('shops.index', compact('apparels'));
        } else {
            return redirect('login');
        }
    }
    public function cart()
    {
        if (Auth::user()->userType = 1 && Auth::user()->email_verified_at != NULL) {
            $user_id = Auth::user()->id;
            $item_status_array = ["Pending", "For delivery"];
            $total_amount = DB::table('carts')->where('user_id', '=', $user_id)
                ->whereIn('item_status', $item_status_array)
                ->sum('item_total');
            $items = Cart::where('user_id', $user_id)->get();
            return view('shops.cart', compact('items', 'total_amount'));
        } else {
            return redirect('login');
        }
    }
    public function addtocart($id)
    {
        if (Auth::user()->userType == 1 && Auth::user()->email_verified_at != NULL) {
            $apparel = Apparel::find($id);
            $user_id = Auth::user()->id;

            return view('shops.addtocart', compact('apparel', 'user_id'));
        } else {
            return redirect('login');
        }
    }
    public function removefromcart($id)
    {
        if (Auth::user()->userType = "user" && Auth::user()->email_verified_at != NULL) {
            $item = Cart::find($id);
            $item->delete();
            return redirect()->to('/cart')->with('deleted', '');
        } else {
            return redirect('login');
        }
    }
    public function confirmitem(Request $request)
    {
        if (Auth::user()->userType = 1 && Auth::user()->email_verified_at != NULL) {
            $request->validate([
                'item_size' => 'required|in:S,M,L',
                'item_qty' => 'required|numeric|min:1|max:99'
            ], []);
            $cart = new Cart();
            $cart->user_id = Crypt::decrypt($request->user_id);
            $cart->item_id =  Crypt::decrypt($request->item_id);
            $cart->item_name = Crypt::decrypt($request->item_name);
            $cart->item_image = Crypt::decrypt($request->item_image);
            $cart->item_size = $request->item_size;
            $cart->item_price = Crypt::decrypt($request->item_price);
            $cart->item_qty = $request->item_qty;
            $cart->item_total = Crypt::decrypt($request->item_price) * $request->item_qty;
            $cart->save();
            return back()->with('success', '');
        } else {
            return redirect('login');
        }
    }
}



// if (Auth::user()->userType = "user" && Auth::user()->email_verified_at != NULL)
// {

// } else {
//     return redirect('login');
// }
