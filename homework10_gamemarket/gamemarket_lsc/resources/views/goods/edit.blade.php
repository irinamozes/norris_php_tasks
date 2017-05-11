@extends('layouts.app')
@section('content')
@if(Session::has('message'))
		{{Session::get('message')}}
@endif
<?php

$cat_id = session('catid');
$cat_name = session('catname');
//$imgurl = '/gamemagaz/app/img/cover/'. $good->image;
//$imgurl = $good->image;
//dd(__DIR__);
//dd($imgurl)
//game-1.jpg
$imgurl = asset('images/' .$good->image);
?>

<img src= "<?php echo $imgurl ?>" height = 120 >

<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Редактируем товар в категории {{$cat_name}}</div>
                    <div>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </div>

                    <div class="panel-body">
                        <form action="/goods/update/{{$good->id}}" method="post">
                            {{csrf_field()}}
                            <label for="" class="input-group">
                                название:
                                <input type="text" name="goodname" value="{{$good->goodname}}">

                            <label for="" class="input-group">
                                Описание

                            <!--<input type="text" name="catcharact" value="{{old('catcharact')}}">-->
                            <textarea name="description" id="" cols="30" rows="10">{{$good->description}}</textarea>
                            </label>


                            <label for="" class="input-group">
                                 Добавьте фотографию

                            <input type="hidden" name="MAX_FILE_SIZE" value="3145728" />
                            <input type="file" name="image" id="" value="{{$good->image}}"/>
                            </label>

                            <input type="submit" class="btn" value="Отправить">
                        </form>
                        <div>

                            <a href="<?php echo '/categories/listgoods/' .$cat_id ?>" class="btn">Назад </a>
                        </div>
                    </div>
                </div>
            </div>


@endsection
