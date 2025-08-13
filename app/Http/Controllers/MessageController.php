<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    // Simpan pesan dari form publik
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Message::create($request->only('name','email','phone','subject','message'));

        return back()->with('success', 'Pesan berhasil dikirim!');
    }

    // Tampilkan pesan di admin
    public function index()
    {
        $messages = Message::latest()->paginate(10);
        return view('back_site.messages.index', compact('messages'));
    }

    public function destroy($id)
    {
        Message::findOrFail($id)->delete();
        return back()->with('success', 'Pesan berhasil dihapus.');
    }

    public function destroyAll()
    {
        Message::truncate();
        return back()->with('success', 'Semua pesan berhasil dihapus.');
    }

}
