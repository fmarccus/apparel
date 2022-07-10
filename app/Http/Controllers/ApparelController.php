<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apparel;
use App\Models\Cart;
use App\Models\Dashboard;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;



class ApparelController extends Controller
{
    //GET USER LIST
    public function users()
    {
        if (Auth::user()->userType == 0 && Auth::user()->email_verified_at != NULL) {
            $search = request()->query('search');
            if ($search) {
                $users = User::where('userType', 'LIKE', "%{$search}%")
                    ->orWhere('name', 'LIKE', "%{$search}%")
                    ->orWhere('email', 'LIKE', "%{$search}%")
                    ->orWhere('email_verified_at', 'LIKE', "%{$search}%")
                    ->paginate(20);
            } else {
                $users = DB::table('users')->orderBy('created_at', 'asc')->paginate('20');
            }
            return view('users.index', compact('users'));
        } else {
            return redirect('login');
        }
    }
    // SORT BY TYPE
    public function sort_type(Request $request)
    {
        if (Auth::user()->userType == 0 && Auth::user()->email_verified_at != NULL) {
            $cheapest_apparel = DB::table('dashboards')->min('retailPrice');
            $expensive_apparel = DB::table('dashboards')->max('retailPrice');
            $category = $request->category;
            $apparels = Apparel::where('type', $category)
                ->paginate(1000);
            return view('apparels.index', compact('apparels', 'cheapest_apparel', 'expensive_apparel'));
        } else {
            return redirect('login');
        }
    }
    //SORT BY PRICE
    public function sort_price(Request $request)
    {
        if (Auth::user()->userType == 0 && Auth::user()->email_verified_at != NULL) {
            $cheapest_apparel = DB::table('dashboards')->min('retailPrice');
            $expensive_apparel = DB::table('dashboards')->max('retailPrice');
            $price = $request->price;
            // $apparels = Apparel::where('retailPrice', $price)
            //     ->paginate(1000);
            $apparels = DB::table('apparels')->where('retailPrice', '<=', $price)->orderBy('retailPrice', 'desc')->paginate(1000);
            return view('apparels.index', compact('apparels', 'cheapest_apparel', 'expensive_apparel'));
        } else {
            return redirect('login');
        }
    }
    //GET APPAREL LIST
    public function index()
    {
        if (Auth::user()->userType == 0 && Auth::user()->email_verified_at != NULL) {
            $cheapest_apparel = DB::table('dashboards')->min('retailPrice');
            $expensive_apparel = DB::table('dashboards')->max('retailPrice');
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
            return view('apparels.index', compact('apparels','cheapest_apparel','expensive_apparel'));
        } else {
            return redirect('login');
        }
    }
    //CREATE APPAREL PAGE
    public function create()
    {
        if (Auth::user()->userType == 0 && Auth::user()->email_verified_at != NULL) {
            return view('apparels.create');
        } else {
            return redirect('login');
        }
    }
    //SAVE APPAREL
    public function store(Request $request)
    {
        if (Auth::user()->userType == 0 && Auth::user()->email_verified_at != NULL) {
            $request->validate([
                'name' => 'required|max:255',
                'sku' => 'required|unique:apparels|max:12',
                'quantity' => 'required|numeric|min:1|max:99999',
                'purchasePrice' => 'required|numeric|min:1',
                'retailPrice' => 'required|numeric|min:1',
                'color' => 'required|max:55',
                'style' => 'required|max:55',
                'type' => 'required|max:55',
                'file' => 'required|image|mimes:jpeg,jpg,png,gif|max:4096'
            ], []);

            $apparel = new Apparel();
            $apparel->name = $request->name;
            $apparel->sku = $request->sku;
            $apparel->quantity = $request->quantity;
            $apparel->purchasePrice = $request->purchasePrice;
            $apparel->retailPrice = $request->retailPrice;
            $apparel->color = $request->color;
            $apparel->style = $request->style;
            $apparel->type = $request->type;

            $image = $request->file('file');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);

            $apparel->image = $imageName;
            $apparel->save();
            return back()->with('success', '');
        } else {
            return redirect('login');
        }
    }
    //EDIT PAGE APPAREL
    public function edit(Request $request, $id)
    {
        if (Auth::user()->userType == 0 && Auth::user()->email_verified_at != NULL) {
            $apparel = Apparel::find($id);
            return view('apparels.edit', compact('apparel'));
        } else {
            return redirect('login');
        }
    }
    //UPDATE APPAREL
    public function update(Request $request, $id)
    {
        if (Auth::user()->userType == 0 && Auth::user()->email_verified_at != NULL) {
            $request->validate([
                'name' => 'required|max:255',
                'sku' => "required|max:12|unique:apparels,sku,$id",
                'quantity' => 'required|numeric|min:1|max:99999',
                'purchasePrice' => 'required|numeric|min:1',
                'retailPrice' => 'required|numeric|min:1',
                'color' => 'required|max:55',
                'style' => 'required|max:55',
                'type' => 'required|max:55',
                'file' => 'required|image|mimes:jpeg,jpg,png,gif|max:4096'
            ], []);

            $apparel = Apparel::find($id);
            $apparel->name = $request->name;
            $apparel->sku = $request->sku;
            $apparel->quantity = $request->quantity;
            $apparel->purchasePrice = $request->purchasePrice;
            $apparel->retailPrice = $request->retailPrice;
            $apparel->color = $request->color;
            $apparel->style = $request->style;
            $apparel->type = $request->type;

            $image = $request->file('file');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);

            $apparel->image = $imageName;
            $apparel->save();
            return back()->with('updated', '');
        } else {
            return redirect('login');
        }
    }
    //DELETE APPAREL
    public function destroy($id)
    {
        if (Auth::user()->userType == 0 && Auth::user()->email_verified_at != NULL) {
            $apparel = Apparel::find($id);
            $directory = 'images/' . $apparel->image;
            if (File::exists($directory)) {
                File::delete($directory);
            }
            $apparel->delete();
            return redirect()->to('/apparels')->with('deleted', '');
        } else {
            return redirect('login');
        }
    }
    //GET ORDERS LIST
    public function orders()
    {
        if (Auth::user()->userType == 0 && Auth::user()->email_verified_at != NULL) {
            $search = request()->query('search');
            if ($search) {
                $orders = Cart::where('id', 'LIKE', "%{$search}%")
                    ->orWhere('user_id', 'LIKE', "%{$search}%")
                    ->orWhere('item_id', 'LIKE', "%{$search}%")
                    ->orWhere('item_name', 'LIKE', "%{$search}%")
                    ->orWhere('item_status', 'LIKE', "%{$search}%")
                    ->orWhere('updated_at', 'LIKE', "%{$search}%")
                    ->paginate(20);
            } else {
                $orders = DB::table('carts')->orderBy('created_at', 'asc')->paginate('20');
            }
            return view('apparels.orders', compact('orders'));
        } else {
            return redirect('login');
        }
    }
    //GET ORDER DETAILS
    public function order_details($id)
    {
        if (Auth::user()->userType == 0 && Auth::user()->email_verified_at != NULL) {
            $order = Cart::find($id);
            return view('apparels.order_details', compact('order'));
        } else {
            return redirect('login');
        }
    }
    //CHANGE ORDER STATUS
    public function change_order_status(Request $request, $id)
    {
        if (Auth::user()->userType == 0 && Auth::user()->email_verified_at != NULL) {
            $request->validate([
                'item_status' => 'required|in:Pending,For delivery,Completed'
            ], []);

            $order = Cart::find($id);
            //get id of the apparel for inventory tracking
            $apparel_id = Crypt::decrypt($request->item_id);
            //get item quantity
            $apparel_item_qty = Crypt::decrypt($request->item_qty);
            //get item status
            $order->item_status = $request->item_status;


            if ($request->item_status == "For delivery") {
                $order->save();
                return back()->with('updated', '');
            } elseif ($request->item_status == "Completed") {
                //decrease item in inventory
                DB::table('apparels')->where('id', $apparel_id)->decrement('quantity', $apparel_item_qty);
                // DB::table('carts')
                $order->save();
                return back()->with('updated', '');
            } else {
                $order->save();
                return back()->with('updated', '');
            }
        } else {
            return redirect('login');
        }
    }
    // SERVER SIDE DASHBOARD FOR ANALYTICS
    public function basic_data()
    {
        //users
        $users = DB::table('users')->count();
        $verified_users = DB::table('users')->where('email_verified_at', '!=', 'NULL')->count();
        $unverified_users = DB::table('users')->where('email_verified_at', '=', NULL)->count();
        $server_accounts = DB::table('users')->where('userType', '=', 0)->count();
        //basic
        $unique_apparels = DB::table('dashboards')->count();
        $quantity_apparels = DB::table('dashboards')->sum('quantity');
        $cheapest_apparel = DB::table('dashboards')->min('retailPrice');
        $expensive_apparel = DB::table('dashboards')->max('retailPrice');
        //categorical
        $bodycon = DB::table('dashboards')->where('type', '=', 'Bodycon')->count();
        $cami = DB::table('dashboards')->where('type', '=', 'Cami')->count();
        $graphic = DB::table('dashboards')->where('type', '=', 'Graphic')->count();
        $polo = DB::table('dashboards')->where('type', '=', 'Polo')->count();
        $romper = DB::table('dashboards')->where('type', '=', 'Romper')->count();
        $shirt = DB::table('dashboards')->where('type', '=', 'Shirt')->count();
        $tee = DB::table('dashboards')->where('type', '=', 'Tee')->count();
        $tiedye = DB::table('dashboards')->where('type', '=', 'Tie dye')->count();
        $top = DB::table('dashboards')->where('type', '=', 'Top')->count();
        //expenses / sales
        $expenditures = Dashboard::sum(DB::raw('purchasePrice * quantity'));
        $gross_sales = Dashboard::sum(DB::raw('retailPrice * quantity'));
        $profit = $gross_sales - $expenditures;
        //orders
        $pending_orders = DB::table('carts')->where('item_status', '=', 'Pending')->count();
        $for_delivery_orders = DB::table('carts')->where('item_status', '=', 'For delivery')->count();
        $completed_orders = DB::table('carts')->where('item_status', '=', 'Completed')->count();

        return view('dashboards.index', compact(
            'users',
            'verified_users',
            'unverified_users',
            'server_accounts',
            'unique_apparels',
            'quantity_apparels',
            'cheapest_apparel',
            'expensive_apparel',
            'bodycon',
            'cami',
            'graphic',
            'polo',
            'romper',
            'shirt',
            'tee',
            'tiedye',
            'top',
        ));
    }
}
