@extends('layouts.app')
@section('content')
@if(Session::has('message'))
		{{Session::get('message')}}
@endif
<?php

$cat_id = session('catid');
$cat_name = session('catname');
//$imgurl = '/gamemagaz/app/img/cover/'. $good->image;
$imgurl = asset('images/' .$good->image);
//$imgurl = $good->image;
//dd(__DIR__);
//dd($imgurl)
//game-1.jpg
?>

<img src= "<?php echo $imgurl ?>" height = 120>

<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Просматриваем товар в категории {{$cat_name}}</div>
                    <div>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </div>

                    <div class="panel-body">
                        <form action="/goods/add/{{$good->id}}" method="post">
                            {{csrf_field()}}
                            <label for="" class="input-group">
                                название:
                              <input type="text" name="goodname" value="{{$good->goodname}}" hidden="true">

                                <input type="text" name="goodname" value="{{$good->goodname}}" disabled="">

                            <label for="" class="input-group">
                                Описание

                            <textarea name="description" id="" cols="30" rows="10" disabled="">{{$good->description}}</textarea>
                            </label>

                            <input type="submit" class="btn" value="Добавить в корзину">
                        </form>
                        <div>

                            <a href="<?php echo '/categories/listgoodsv/' .$cat_id ?>" class="btn">Назад </a>
                        </div>
                    </div>
                </div>
            </div>


@endsection
