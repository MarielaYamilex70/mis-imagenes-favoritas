<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['images'] = Image::where('user_id', auth()->user()->id)->paginate(5);
        return view('images.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $images = Image::all();
        return view('images.create', compact('images'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
             
        $request->validate([
            'title' => 'required',
            'file' => 'required|image'
         ]);
 
         $imagenes = $request->file('file')->store('public/imagenes');
         $url = Storage::url($imagenes);
 
        Image::create([
             'title' => $request->title,
             'user_id'=> auth()->user()->id,
             'url' => $url
         ]);
 
         return redirect('image');
    }

    /**
     * Display the specified resource.
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image $image)
    {
       
        $image=Image::findOrFail($image->id);
        return view('images.edit', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Image $image)
    {
        $request->validate([
            'title' => 'required',
            'file' => 'required|image'
        ]);

        $imagenes = $request->file('file')->store('public/imagenes');
        $url = Storage::url($imagenes);
        
        $image->title = $request->title;
        $image->url = $url;
        $image->save();
        
        return redirect('image');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image)
    {
        Image::destroy($image->id);
        return redirect('image');
    }
}
