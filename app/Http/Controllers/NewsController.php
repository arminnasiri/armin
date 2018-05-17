<?php 

namespace App\Http\Controllers;
use App\Category;
use App\Modules\News\News;
use Illuminate\Http\Request;

class NewsController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Category[]|\Illuminate\Database\Eloquent\Collection
   */
  public function index()
  {

      $data=News::all ();
      return $data;
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
      $news=News::all();
   return view('news.create',compact('news'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
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

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Request $request)
  {
      $data = News::find ( $request->id )->delete ();
  }
  
}

?>