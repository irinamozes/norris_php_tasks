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
                        @foreach ($orders as $ord)
                            <tr>
                              <td>
                                  <form action="/goods/ogoods/{{$ord->id}}" method="get">

                                      <input type="submit" value="Раскрыть список товаров">
                                  </form>
                              </td>

                                <td align="left" >№ заказа {{$ord->id}} </td>
                                <td align="right" >*** дата заказа {{$ord->created_at}} </td>

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
