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
        <div class="row">
            @if(count($nematocides) > 0)
                <h4 class="bold">Нематоциди</h4>
                <ol>
                    @foreach($nematocides as $products)
                        <li>{{$products['name']}} - {{$products['id']}} - {{$products['pesticide']}}</li>
                    @endforeach
                </ol>
            @endif
        </div>

        <div class="row">
            @if(count($rodenticides) > 0)
                <h4 class="bold">Родентоциди</h4>
                <ol>
                    @foreach($rodenticides as $products)
                        <li>{{$products['name']}} - {{$products['id']}} - {{$products['pesticide']}}</li>
                    @endforeach
                </ol>
            @endif
        </div>

        <div class="row">
            @if(count($limatsides) > 0)
                <h4 class="bold">Лимациди</h4>
                <ol>
                    @foreach($limatsides as $products)
                        <li>{{$products['name']}} - {{$products['id']}} - {{$products['pesticide']}}</li>
                    @endforeach
                </ol>
            @endif
        </div>

        <div class="row">
            @if(count($repellents) > 0)
                <h4 class="bold">Репеленти</h4>
                <ol>
                    @foreach($repellents as $products)
                        <li>{{$products['name']}} - {{$products['id']}} - {{$products['pesticide']}}</li>
                    @endforeach
                </ol>
            @endif
        </div>

        <div class="row">
            @if(count($pheromones) > 0)
                <h4 class="bold">Феромони</h4>
                <ol>
                    @foreach($pheromones as $products)
                        <li>{{$products['name']}} - {{$products['id']}} - {{$products['pesticide']}}</li>
                    @endforeach
                </ol>
            @endif
        </div>

        <div class="row">
            @if(count($desiccants) > 0)
                <h4 class="bold">Десиканти</h4>
                <ol>
                    @foreach($desiccants as $products)
                        <li>{{$products['name']}} - {{$products['id']}} - {{$products['pesticide']}}</li>
                    @endforeach
                </ol>
            @endif
        </div>

        <div class="row">
            @if(count($regulators) > 0)
                <h4 class="bold">Р. Регулатори</h4>
                <ol>
                    @foreach($regulators as $products)
                        <li>{{$products['name']}} - {{$products['id']}} - {{$products['pesticide']}}</li>
                    @endforeach
                </ol>
            @endif
        </div>
    </div>
@endsection