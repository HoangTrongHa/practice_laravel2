<?php

namespace App\Http\Controllers;

use App\news;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view("form");
    }
    public function show()
    {
        return view("notification");
    }
    public function save(Request $request)
    {
        $news = new news;
        $news->name = $request->name;
        $news->email = $request->email;
        $news->telephone = $request->telephone;
        $news->feedback	 = $request->feedback;
        $news->save();
        return redirect()->action('StudentController@show');
    }
}
