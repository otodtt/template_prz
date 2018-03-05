@extends('layouts.form')

@section('content')
    <div class="container">
        <div class="row">
            <a href="/">Начало</a>
            <a href="/manufacturers">ПРОИЗВИДИТЕЛИ</a>

        </div>
        <h3>{{ $firms[0]['id']}} - {{ $firms[0]['name']}} - {{ $firms[0]['country']}}</h3>
        <div class="row">
            <h4 class="bold">Акарициди</h4>
            <ol>
                @foreach($firms[0]['acaricides'] as $acaricides)
                    <li>{{$acaricides['name']}} - {{$acaricides['id']}}</li>
                @endforeach
            </ol>
        </div>
    </div>
@endsection