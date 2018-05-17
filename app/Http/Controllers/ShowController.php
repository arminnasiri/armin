<?php

namespace App\Http\Controllers;

use App\Modules\News\News;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    /**
     * @param $id
     */
    public function show ($id)
    {
        $sh=News::find($id);
        if($sh) {
            return view ('Show.single' , compact ('sh'));
        }
        else
        {
            return view('Show.404');
        }
    }

    /**
     * @param Request $request
     * @param $newid
     */
    public function insert (Request $request, $newid)
    {
           $news=News::find($newid);
           $news->comment()->create([

           ]);
    }
}
