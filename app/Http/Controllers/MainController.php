<?php

namespace App\Http\Controllers;

use App\Modules\News\News;
use Illuminate\Http\Request;

class MainController extends Controller
{
  public function storeItem(Request $request)
{

    $data = new News();
    return $data;
    $data->title = $request->name;
    $data->abstr = $request->abstr;
    $data->body = $request->body;
    if(!$request->stet)
    {
        $data->post='post';
    }
    else
    {
        $data->post='draft';
    }
    $data->save ();

    return $data;

}
    public function deleteItem(Request $request) {

        $data = News::find ( $request->id )->delete ();

    }
    public function readItems() {

        $data=News::all ();
        return $data;
    }
}
