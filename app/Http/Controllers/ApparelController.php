<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apparel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;



class ApparelController extends Controller
{

    public function index()
    {
        if (Auth::user()->userType == 0 && Auth::user()->email_verified_at != NULL) {
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
            return view('apparels.index', compact('apparels'));
        } else {
            return redirect('login');
        }
    }
    public function create()
    {
        if (Auth::user()->userType == 0 && Auth::user()->email_verified_at != NULL) {
            return view('apparels.create');
        } else {
            return redirect('login');
        }
    }
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
    public function edit(Request $request, $id)
    {
        if (Auth::user()->userType == 0 && Auth::user()->email_verified_at != NULL) {
            $apparel = Apparel::find($id);
            return view('apparels.edit', compact('apparel'));
        } else {
            return redirect('login');
        }
    }
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
}
