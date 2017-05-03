<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use League\Flysystem\Exception;


class CatController extends Controller
{
  public function index()
  {

      $user = Auth::user();

      if ($user->admin ) {
          //редактировать
      } else {
        //только просмотр и корзина
      }

      $categories = Category::all();
      $data['categories'] = $categories;
      return view('categories.index', $data);
  }

  public function listgoods()
  {
      return view('categories.listgoods');
  }

  public function create()
  {
      return view('categories.create');
  }

  public function store(Request $request)
  {
      $this->validate($request, [
         'name' => 'required|min:5',
         'catcharact' => 'required|min:10',
      ]);
      $cat = new Category();
      $cat->name = $request->name;
      $cat->catcharact = $request->catcharact;
      $cat->save();

      return redirect('/categories');
  }

  public function edit($cat_id)
  {
      try {
          $cat = Category::findOrFail($cat_id);
      } catch (Exception $e) {
          return abort(404);
      }

      $data['cat'] = $cat;
      return view('categories.edit', $data);
  }

  public function update(Request $request, $cat_id)
  {
      $this->validate($request, [
          'name' => 'required|min:5',
          'catcharact' => 'required|min:10',
      ]);
      try {
          $cat = Category::findOrFail($cat_id);
      }
      catch (Exception $e) {
          return abort(404);
      }
      $cat->name = $request->name;
      $cat->catcharact = $request->catcharact;
      $cat->save();

      return redirect('/categories/edit/'.$cat_id);
  }

  public function destroy($cat_id)
  {
      try {
          Category::destroy($cat_id);
      } catch (Exception $e) {
          return abort(404);
      }

      return redirect('/categories');
  }


}
