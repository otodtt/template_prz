@extends('substances.layout')

@section('content')
    <div class="container">
        <div class="row">
            <a href="/">Начало</a>
            <a href="/substances">Активни Вещества</a>

        </div>
        <h3>{{ $substances[0]['id']}} - {{ $substances[0]['name']}} - {{ $substances[0]['moreUses']}}</h3>
        <a href="{!!URL::to('/substances/add/'.$substances[0]['id'])!!}" class="fa fa-edit btn btn-primary">
            &nbsp;Добави Продукт!
        </a>
        <hr/>
        <div class="row">
            <ol>
                @foreach($substances[0]['products'] as $products)
                    <li>
                        <?php
                            if($products['idPest'] == 1) {
                                $type = 'Акарицид';
                            }
                        ?>
                        <a href="{!!URL::to('/acaricides/'.$products['idPest'])!!}">{{$products['name']}}</a>
                         - {{$products['id']}} - {{$type}}
                         - Фирма
                        <a href="{!!URL::to('/manufacturers/'.$products['firmId'])!!}">{{$products['firm']}}</a>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
@endsection