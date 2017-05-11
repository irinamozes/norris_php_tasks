@extends('layouts.app')

@section('content')
@if(Session::has('message'))
		{{Session::get('message')}}
	@endif
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Заказы</div>

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
