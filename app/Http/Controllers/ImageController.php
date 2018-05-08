<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['showuser']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::orderBy('created_at', 'desc')->paginate(9);
        return view('gallery.index')->with('images', $images);
    }

    public function showuser()
    {
        if (\Request::is('en/*')) { 
            app()->setlocale('en');
        }
        else if (\Request::is('it/*')) {
            app()->setlocale('it');
        }
        else {
            app()->setlocale('bg');
        }
        
        $images = Image::orderBy('created_at', 'desc')->paginate(9);
        return view('pages.gallery')->with('images', $images);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'gallery_image' => 'image|required|max:1999'
        ]);

        // Handle file upload
        if($request->hasFile('gallery_image')){
            // Get filename with the extension
            $fileNameWithExt = $request->file('gallery_image')->getClientOriginalName();
            // get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // get just extension
            $extension = $request->file('gallery_image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('gallery_image')->storeAs('public/gallery_images', $fileNameToStore);
        }

        $image = new Image;
        $image->gallery_image = $fileNameToStore;
        $image->title = $request->input('title');
        $image->save();
        return redirect('/gallery')->with('success', 'Снимката е добавена.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $image = Image::find($id);
        return view('gallery.edit')->with('image', $image);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'gallery_image' => 'image|required|max:1999'
        ]);

        // Handle file upload
        if($request->hasFile('gallery_image')){
            // Get filename with the extension
            $fileNameWithExt = $request->file('gallery_image')->getClientOriginalName();
            // get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // get just extension
            $extension = $request->file('gallery_image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('gallery_image')->storeAs('public/gallery_images', $fileNameToStore);
        }

        $image = Image::find($id);
       
        $image->title = $request->input('title');
        if ($request->hasFile('gallery_image')) {
            $image->gallery_image = $fileNameToStore;
        }
        $image->save();
        return redirect('/gallery')->with('success', 'Снимката е редактирана.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Image::find($id);
        $image->delete();
        return redirect('/gallery')->with('success', 'Снимката е изтрита.');
    }
}
