@extends('acaricides.layout')

@section('content')
    <div class="container">
        <div class="row">
            <a href="{!!URL::to('/acaricides/edit/'.$acaricide[0]['id'])!!}" class="fa fa-edit btn btn-danger">
                &nbsp;РЕДАКТИРАЙ!
            </a>
            <a href="{!!URL::to('/acaricides/substances/'.$acaricide[0]['id'])!!}" class="fa fa-edit btn btn-primary">
                &nbsp;ДОБАВИ А. В-ВО!
            </a>
            <a href="{!!URL::to('/acaricides/dose/'.$acaricide[0]['id'])!!}" class="fa fa-edit btn btn-success">
                &nbsp;ДОБАВИ ДОЗА!
            </a>
        </div>
        <hr/>
        <div class="row">
            <h3>{{$acaricide[0]['name']}}</h3>
            <p>Фирма Производител: {{$acaricide[0]['firmName']}}</p>
            <p>Формулация: {{$acaricide[0]['type']}}</p>
            <p>Активно в-во: {{$acaricide[0]['substance']}}</p>
            @foreach($acaricide[0]['pestsubstanse'] as $substance)
                <p>Активно в-во: {{$substance['quantity']}}
                    <a href="{!!URL::to('/substances/'.$substance['substanceId'])!!}" >{{$substance['name']}}</a>
                    {{$substance['quantityAfter']}}
                </p>
            @endforeach
            <p>{{$acaricide[0]['permission']}}</p>
            <p>Валидно до: {{$acaricide[0]['valid']}}</p>
            <p>{{$acaricide[0]['dateOrder']}}</p>
            <p>Категория на употреба: {{$acaricide[0]['category']}}</p>
            <p>ЛД: {{$acaricide[0]['lethal']}}</p>
            <p>Забележка: {{$acaricide[0]['period']}}</p>
        </div>
        <div class="row">
            <table style="width: 100%">
                <thead>
                    <tr>
                        <th>Култура</th>
                        <th>Вредител</th>
                        <th>Доза</th>
                        <th>Дни</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($acaricide[0]['doses'] as $dose)
                        <tr>
                            <td>{{$dose['crop']}}</td>
                            <td>{!! $dose['disease'] !!}</td>
                            <td>{{$dose['dose']}} {{$dose['measure']}}</td>
                            <td>{{$dose['quarantine']}}</td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection