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
                        <a href="/categories/create" class="btn">Создать категорию</a>
                    </div>
                    <div class="panel-body">
                        <table>
                        @foreach ($categories as $cat)
                            <tr>
                              <td>
                                  <form action="/categories/listgoods/{{$cat->id, $cat->name}}" method="get">

                                      <input type="submit" value="Раскрыть список товаров">
                                  </form>
                              </td>

                                <td align="center">{{$cat->name}}</td>
                                <td>
                                    <a href="/categories/edit/{{$cat->id}}" class="btn"> Редактировать категорию </a>
                                </td>
                                <td>
                                    <form action="/categories/destroy/{{$cat->id}}" method="post">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <input type="submit" value="Удалить">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
