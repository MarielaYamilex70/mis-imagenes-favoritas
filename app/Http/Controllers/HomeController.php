<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $datos['images'] = Image::where('user_id', auth()->user()->id)->paginate(5);
        return view('images.index', $datos);

    }
}
