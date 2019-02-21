@extends('substances.layout')

@section('content')
    <div class="container">
        <div class="row">
            <a href="/">Начало</a>
            <a href="/substances">Активни Вещества</a>

        </div>
        <h3>{{ $substances[0]['id']}} - {{ $substances[0]['name']}}</h3>
        {{--<a href="{!!URL::to('/substances/add/'.$substances[0]['id'])!!}" class="fa fa-edit btn btn-primary">--}}
            {{--&nbsp;Добави Продукт!--}}
        {{--</a>--}}
        <hr/>
        <div class="row">
            <ol>
                @foreach($substances[0]['products'] as $products)
                    <li>
                        <?php
//                            if($products['typePest'] == 1) {
//                                $type = 'Акарицид';
//                            }
                        ?>
                        <a href="{!!URL::to('/acaricides/'.$products['pesticides_id'])!!}">{{$products['pesticide_name']}}</a>
                         - {{$products['pesticides_id']}} - {{$products['pesticide_type']}}
                         - Фирма
                        <a href="{!!URL::to('/manufacturers/'.$products['manufacturersId'])!!}">{{$products['firmName']}}</a>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
@endsection