@extends('layouts.app')

@section('content')
@if(Session::has('message'))
		{{Session::get('message')}}
	@endif
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Товары в корзине </div>
                    <div>
                        <a href="/goods/ord" class="btn">Оформить заказ</a>
                    </div>
                    <div class="panel-body">
                        <table>
                        @foreach ($goods as $goo)
                            <tr>

                                <td align="center">{{$goo->goodname}}</td>

                                <td>
                                    <form action="/goods/destroy/{{$goo->id}}" method="post">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <input type="submit" value="Удалить">
                                    </form>
                                </td>
                            </tr>

                        @endforeach

                        </table>
                        <div>
                            <a href="/categories/listgoodsv/{{session('catid')}}" class="btn">Назад </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
