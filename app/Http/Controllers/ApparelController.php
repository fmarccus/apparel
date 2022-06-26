<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apparel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class ApparelController extends Controller
{
    public function index()
    {
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
    }
    public function create()
    {
        return view('apparels.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'sku' => 'required',
            'quantity' => 'required',
            'purchasePrice' => 'required',
            'retailPrice' => 'required',
            'color' => 'required',
            'style' => 'required',
            'type' => 'required',
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
    }
    public function edit(Request $request, $id)
    {
        $apparel = Apparel::find($id);
        return view('apparels.edit', compact('apparel'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'sku' => 'required',
            'quantity' => 'required',
            'purchasePrice' => 'required',
            'retailPrice' => 'required',
            'color' => 'required',
            'style' => 'required',
            'type' => 'required',
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
    }
    public function destroy($id)
    {
        $apparel = Apparel::find($id);
        $directory = 'images/' . $apparel->image;
        if (File::exists($directory)) {
            File::delete($directory);
        }
        $apparel->delete();
        return redirect()->to('/apparels')->with('deleted', '');
    }
}
