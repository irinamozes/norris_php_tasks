@extends('layouts.app')

@section('content')
@if(Session::has('message'))
		{{Session::get('message')}}
	@endif
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                  <?php
									foreach ($allgood_orders as $allgo) {
										$x = 1;
										$orderid = $allgo->order_id;
										$orderdate = $allgo->created_at;
										if ($x == 1) {
											break;
										}

									}

									?>
                    <div class="panel-heading">Заказ №  {{$orderid}} *** Дата заказа {{$orderdate}}</div>

                    <div class="panel-body">
                        <table>
                        @foreach ($allgood_orders as $allgo)
                            <tr>

                                <td align="left" > {{$allgo->goodname}} </td>

                            </tr>
                        @endforeach

                        </table>
                        <div>
                            <a href="/goods/listorders" class="btn">Назад </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
