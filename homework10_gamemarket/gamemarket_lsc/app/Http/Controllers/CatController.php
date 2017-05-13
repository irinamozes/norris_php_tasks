<?php

namespace App\Http\Controllers;
use App\User;
use App\Allgood;
use App\allgood_order;
use App\Category;
use App\Order;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use League\Flysystem\Exception;

use DB;
use App\Http\Controllers\Controller;

class CatController extends Controller
{
  public function index()
  {

      $user = Auth::user();
      $id = Auth::id();
      $admin =  User::find($id)->admin;


      if ($admin == null or $admin == 0) {
          //только просмотр и корзина
          $categories = Category::all();
          $data['categories'] = $categories;
          return view('categories.indexv', $data);
      } else {
        $categories = Category::all();
        $data['categories'] = $categories;

        return view('categories.index', $data);

      }
  }

  public function listgoods($cat_id)

  {

    $user = Auth::user();
    $id = Auth::id();
    $admin =  User::find($id)->admin;

    $catname = Category::find($cat_id);

    $allgoods = Allgood::where('category_id', '=', $cat_id)->get();

    $cat_name =  $catname->name;

    session(['catname' => $cat_name]);
    session(['catid' => $cat_id]);

    if (count($allgoods) == 0) {

       $mess = ' ***  '.'В категории '. $cat_name .' нет товаров';
       return redirect()->back()->with('message', $mess);

    }
    $data['allgoods'] = $allgoods->all();


    if ($admin == null or $admin == 0) {
      //только просмотр и корзина

      return view('categories.listgoodsv', $data);

    } else {


      return view('categories.listgoods', $data);

    }

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
    } catch (Exception $e) {
      return abort(404);
    }
    $cat->name = $request->name;
    $cat->catcharact = $request->catcharact;
    $cat->save();

    return redirect('/categories');
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
