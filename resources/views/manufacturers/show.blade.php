@extends('manufacturers.layout')

@section('content')
    <div class="container">
        <div class="row">
            <a href="/manufacturers">ПРОИЗВИДИТЕЛИ</a>

        </div>
        <h3>{{ $firms->id}} - {{ $firms->name}} - {{ $firms->country}}</h3>
        <div class="row">
            @if(count($acaricides) > 0)
                <h4 class="bold">Акарициди</h4>
                <ol>
                    @foreach($acaricides as $products)
                        <li>{{$products['name']}} - {{$products['id']}} - {{$products['pesticide']}}</li>
                    @endforeach
                </ol>
            @endif
        </div>
    </div>
@endsection