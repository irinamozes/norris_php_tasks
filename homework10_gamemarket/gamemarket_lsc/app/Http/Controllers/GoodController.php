<?php

namespace App\Http\Controllers;
use App\User;
use App\Allgood;
use App\allgood_order;
use App\Category;
use App\Order;
use App\Good;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use League\Flysystem\Exception;

use DB;
use App\Http\Controllers\Controller;



class GoodController extends Controller
{


  public function create()
  {
    $user = Auth::user();
    $id = Auth::id();
    $admin =  User::find($id)->admin;
      return view('goods.create');
  }

  public function store(Request $request)
  {

      $this->validate($request, [
         'goodname' => 'required|min:5',
         'description' => 'required|min:10',
      ]);
      $good = new Allgood();
      $good->goodname = $request->goodname;
      $good->description = $request->description;
      $good->image = $request->image;
      $good->category_id = session('catid');
      $good->save();

      //return redirect()->back();
      $redir = '/categories/listgoods/' .session('catid');
      return redirect($redir);
  }

  public function edit($good_id)
  {
     $user = Auth::user();
     $id = Auth::id();
     $admin =  User::find($id)->admin;

      try {
        $good = Allgood::findOrFail($good_id);
      } catch (Exception $e) {
          return abort(404);
      }

      $data['good'] = $good;
      //session(['catname' => $cat_name]);
      //session(['catid' => $cat_id]);

      if ($admin == null or $admin == 0) {
          //только просмотр и корзина

        return view('goods.editv', $data);

      } else {


        return view('goods.edit', $data);

      }


      //return view('goods.edit', $data);
  }

  public function update(Request $request, $good_id)
  {
      $this->validate($request, [
          'goodname' => 'required|min:5',
          'description' => 'required|min:10',
      ]);
      try {
          $good = Allgood::findOrFail($good_id);
      }
      catch (Exception $e) {
          return abort(404);
      }
      $good->goodname = $request->goodname;
      $good->description = $request->description;
      if ($request->image) {
        $good->image = $request->image;

      }
          
      $good->category_id = session('catid');
      $good->save();

      //return redirect('/categories');
      $redir = '/categories/listgoods/' .session('catid');
      return redirect($redir);
  }



  public function add(Request $request, $good_id)
  {

      $user = Auth::user();
      $id = Auth::id();

      $good = new Good();
      $good->goodname = $request->goodname;
      //dd($request->goodname);
      //dd($good_id);
      $good->allgood_id = $good_id;
      $good->user_id = $id;
      $good->save();

      //return redirect()->back();
      //$redir = '/goods/editv/' .$good_id;
      $redir = '/categories/listgoodsv/' .session('catid');
      return redirect($redir);
  }



  public function cart()
  {

      $user = Auth::user();
      $id = Auth::id();
      $admin =  User::find($id)->admin;

      //$admin = Auth::admin();
      //echo $id ."<br>";
      //echo $admin ."<br>";
      //dd($admin);

        $goods = Good::where('user_id', '=', $id)->get();

        if (count($goods) == 0) {


           $mess = ' ***  '.'В корзине нет товаров';
           return redirect()->back()->with('message', $mess);

         }

        $data['goods'] = $goods;
        //dd($data['categories']);
        return view('goods.cart', $data);

    }

    public function destroy($goo_id)
    {
        try {
            Good::destroy($goo_id);
        } catch (Exception $e) {
            return abort(404);
        }

        return redirect('/goods/cart');
    }

    public function ord()
    {

      $user = Auth::user();
      $id = Auth::id();

      $goods = Good::where('user_id', '=', $id)->get();

      if (count($goods) == 0) {


         $mess = ' ***  '.'В корзине нет товаров';
         return redirect()->back()->with('message', $mess);

       }

       $order = new Order();
       $order->user_id = $id;
       $order->save();

       $order_id = $order->id;

       foreach ($goods as $goo) {

         $g_o = new allgood_order();
         $g_o->allgood_id =  $goo->allgood_id;
         $g_o->goodname =  $goo->goodname;
         $g_o->order_id =  $order_id;
         $g_o->save();

       }

        $g_d = Good::where('user_id', '=', $id)->delete();

        return redirect('/goods/cart');

    }

    public function listorders() {

      $user = Auth::user();
      $id = Auth::id();

      $orders = Order::where('user_id', '=', $id)->get();

      if (count($orders) == 0) {


         $mess = ' ***  '.'У пользователя  нет оформленных заказов';
         return redirect()->back()->with('message', $mess);

       }

       $data['orders'] = $orders;
       //dd($data['categories']);
       return view('goods.listorders', $data);

    }

}
