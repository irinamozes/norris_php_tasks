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
                    <a href="/goods/create" class="btn">Создать товар в категории</a>
                </div>
                <div class="panel-body">
                    <table>
                    @foreach ($allgoods as $good)
                      <tr>

                            <td align="center">{{$good->goodname}}</td>

                        <td>
														<a href="/goods/edit/{{$good->id}}" class="btn"> Редактировать карточку </a>
												</td>
												<td>
														<form action="" method="post">
																{{csrf_field()}}
																<!--{{method_field('DELETE')}}-->
																<input type="submit" value="Удалить" disabled="">

									          </form>
                        </td>
                     </tr>

										@endforeach
                    </table>
										<div>
	                      <a href="/categories" class="btn">Назад </a>
	                  </div>

								</div>
            </div>
        </div>
    </div>
</div>
@endsection
