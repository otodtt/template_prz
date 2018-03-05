@extends('layouts.cultures')

@section('content')
    <ul class="nav navbar-nav">
        <li><a href="{!!URL::to('/fungicides')!!}">Фунгициди</a></li><br/>
        <li><a href="{!!URL::to('/insecticides')!!}">Инсектициди</a></li><br/>
        <li><a href="{!!URL::to('/acaricides')!!}">Акарициди</a></li><br/>
        <li><a href="{!!URL::to('/nematicides')!!}">Нематоциди</a></li><br/>
        <li><a href="{!!URL::to('/regulation')!!}">Регламент II</a></li><br/>
        <li><a href="{!!URL::to('/rodenticides')!!}">Родентициди</a></li><br/>
        <li><a href="{!!URL::to('/limacides')!!}">Лимациди</a></li><br/>
        <li><a href="{!!URL::to('/repellents')!!}">Репеленти</a></li><br/>
        <li><a href="{!!URL::to('/pheromones')!!}">Феромони</a></li><br/>
        <li><a href="{!!URL::to('/herbicides')!!}">Хербициди</a></li><br/>
        <li><a href="{!!URL::to('/desiccants')!!}">Десиканти</a></li><br/>
        <li><a href="{!!URL::to('/acaricides')!!}">Акарициди</a></li><br/>
        <li><a href="{!!URL::to('/regulators')!!}">Растежни регулатори</a></li>

    </ul>
@endsection