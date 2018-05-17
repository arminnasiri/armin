<?php

namespace App\Http\Controllers;

use App\Modules\News\Img;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('news.create');
    }


    /**
     * success response method.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $imageName = request()->file->getClientOriginalName();
        $img=new Img();
        request()->file->move(public_path('upload'), $imageName);
       $img->news_id=$id;
       $img->img_path=$imageName;
       $img->save ();
        return response()->json(['uploaded' => '/upload/'.$imageName]);
    }
}
