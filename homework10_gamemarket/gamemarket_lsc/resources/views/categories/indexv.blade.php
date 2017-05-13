@extends('layouts.app')
@section('content')
@if(Session::has('message'))
		{{Session::get('message')}}
@endif
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Категории</div>

										<div>
												<a href="/goods/cart" class="btn">Просмотреть корзину и оформить заказ  </a>

												<a href="/goods/listorders" class="btn">Список заказов пользователя</a>

										</div>


										<div class="panel-body">
                        <table>
                        @foreach ($categories as $cat)
                            <tr>
                              <td>
                                  <form action="/categories/listgoodsv/{{$cat->id}}" method="get">

                                      <input type="submit" value="Раскрыть список товаров">
                                  </form>
                              </td>

                                <td align="center">{{$cat->name}}</td>


                            </tr>
                        @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
