<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function home() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

    public function handleContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        $log = "[" . now() . "] Họ tên: " . $validated['name'] .
            " | Email: " . $validated['email'] .
            " | Nội dung: " . $validated['message'] . PHP_EOL;

        file_put_contents(storage_path('logs/lien_he.txt'), $log, FILE_APPEND);

        return redirect('/contact')->with('success', 'Gửi liên hệ thành công!');
    }


}
