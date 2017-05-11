@extends('layouts.app')
@section('content')
@if(Session::has('message'))
		{{Session::get('message')}}
@endif

<?php

$cat_id = session('catid');
$cat_name = session('catname');

?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Список товаров для категории {{$cat_name}}  </div>
                <div>
                    <a href="/goods/cart" class="btn">Просмотреть корзину и оформить заказ  </a>

										<a href="/goods/listorders" class="btn">Список заказов пользователя</a>


                </div>
                <div class="panel-body">
                    <table>
                    @foreach ($allgoods as $good)
                      <tr>

                            <td align="center">{{$good->goodname}}</td>

                        <td>
														<a href="/goods/editv/{{$good->id}}" class="btn"> Посмотреть и добавить в корзину </a>
												</td>

                     </tr>

										@endforeach
                    </table>
										<div>
	                      <a href="/categories/indexv/" class="btn">Назад </a>
	                  </div>

								</div>
            </div>
        </div>
    </div>
</div>
@endsection
