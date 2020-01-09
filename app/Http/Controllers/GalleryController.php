<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use Illuminate\Support\Facades\Redirect;

class GalleryController extends Controller
{
    public function index()
    {
         return view('portfolio.upload');
    }
    public function store(Request $request)
    {

        $this->validate($request, [
            'file' => 'required|mimes:jpg,jpeg,gif,png,bmp'
        ]);
        $file = $request->file('file');
        $name = time() . $file->getClientOriginalName();
        $file->move('uploads', $name);
        Gallery::create([
            'file'=>"/uploads/{$name}"

        ]);
        return "Images Envoyées !!";
    }

    public function show()
    {
        $galleries = Gallery::get();
        return view ('portfolio/album', compact('galleries'));
    }

    public function destroy($id)
    {
        Gallery::where('id',$id)->delete();

        return Redirect::to('gallery')->with('success','Product deleted successfully');
    }
}
