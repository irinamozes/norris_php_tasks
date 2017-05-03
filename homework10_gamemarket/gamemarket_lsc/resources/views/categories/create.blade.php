@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Создаем категорию</div>
                    <div>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </div>
                    <div class="panel-body">
                        <form action="/categories/store" method="post">
                            {{csrf_field()}}
                            <label for="" class="input-group">
                                название:
                                <input type="text" name="name" value="{{old('name')}}">
                            </label>
                            <label for="" class="input-group">
                                характеристика

                            <input type="text" name="catcharact" value="{{old('catcharact')}}">
                            </label>
                            <input type="submit" class="btn" value="Отправить">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
