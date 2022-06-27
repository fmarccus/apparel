<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Apparel;


class CartController extends Controller
{
    public function index()
    {
        if (Auth::user()->userType == "user" && Auth::user()->email_verified_at != NULL) {
            $search = request()->query('search');
            if ($search) {
                $apparels = Apparel::where('name', 'LIKE', "%{$search}%")
                    ->orWhere('sku', 'LIKE', "%{$search}%")
                    ->orWhere('type', 'LIKE', "%{$search}%")
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
    public function addtocart($id)
    {
        if (Auth::user()->userType == "user" && Auth::user()->email_verified_at != NULL) {
            $apparel = Apparel::find($id);
            return view('shops.addtocart', compact('apparel'));
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
