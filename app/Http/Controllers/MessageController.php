<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class MessageController extends Controller
{
    public function index()
    {
        if (Auth::user()->userType == 0 && Auth::user()->email_verified_at != NULL) {
            $search = request()->query('search');
            if ($search) {
                $messages = Message::where('name', 'LIKE', "%{$search}%")
                    ->orWhere('nature', 'LIKE', "%{$search}%")
                    ->orWhere('email', 'LIKE', "%{$search}%")
                    ->orWhere('message', 'LIKE', "%{$search}%")
                    ->paginate(20);
            } else {
                $messages = DB::table('messages')->orderBy('created_at', 'asc')->paginate('20');
            }
            return view('messages.index', compact('messages'));
        } else {
            return redirect('login');
        }
    }
    public function create()
    {
        $fill_name = Auth::user()->name;
        $fill_email = Auth::user()->email;
        $fill_contact = Auth::user()->contact;
        return view('messages.create', compact('fill_name', 'fill_email', 'fill_contact'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'max:255',
            'contact' => 'required|max:255',
            'nature' => 'required|max:255',
            'message' => 'required',
        ]);
        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->contact = $request->contact;
        $message->nature = $request->nature;
        $message->message = $request->message;
        $message->save();
        return back()->with('success', '');
    }
}
