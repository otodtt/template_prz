@extends('acaricides.layout')

@section('content')
    <div class="container">
        <div class="row">
            <a href="{!!URL::to('/acaricides/edit/'.$acaricides->id)!!}" class="fa fa-edit btn btn-danger">
                &nbsp;РЕДАКТИРАЙ!
            </a>
            <a href="{!!URL::to('/acaricides/')!!}" class="fa fa-edit btn btn-primary">
                &nbsp;ДОБАВИ А. В-ВО!
            </a>
            <a href="{!!URL::to('/acaricides/')!!}" class="fa fa-edit btn btn-success">
                &nbsp;ДОБАВИ ДОЗА!
            </a>
        </div>
        <hr/>
        <div class="row">
            <h3>{{$acaricides->name}}</h3>
            <p>Фирма Производител: {{$acaricides->firmName}}</p>
            <p>Формулация: {{$acaricides->type}}</p>
            <p>Активно в-во: {{$acaricides->substance}}</p>
            <p>{{$acaricides->permission}}</p>
            <p>Валидно до: {{$acaricides->valid}}</p>
            <p>{{$acaricides->dateOrder}}</p>
            <p>Категория на употреба: {{$acaricides->category}}</p>
            <p>ЛД: {{$acaricides->lethal}}</p>
            <p>Забележка: {{$acaricides->period}}</p>
        </div>
    </div>
@endsection