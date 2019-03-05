@extends('pheromones.layout')

@section('content')
    <div class="container">
        <div class="row">
            <a href="{!!URL::to('/pheromones/edit/'.$pheromone[0]['id'])!!}" class="fa fa-edit btn btn-danger">
                &nbsp;РЕДАКТИРАЙ!
            </a>
            {{--<a href="{!!URL::to('/pheromones/substances/'.$pheromone[0]['id'])!!}" class="fa fa-edit btn btn-primary">--}}
                {{--&nbsp;ДОБАВИ А. В-ВО!--}}
            {{--</a>--}}
            <a href="{!!URL::to('/pheromones/dose/'.$pheromone[0]['id'])!!}" class="fa fa-edit btn btn-success">
                &nbsp;ДОБАВИ ДОЗА!
            </a>
            <a style="float: right" href="{!!URL::to('/pheromones/deactivate/'.$pheromone[0]['id'])!!}" class="fa fa-cut btn btn-danger">
                &nbsp;Деактивирай!
            </a>
        </div>
        <hr/>
        <div class="row">
            @if($pheromone[0]['secondName'] === null)
                <h3>{{$pheromone[0]['name']}}</h3>
            @elseif($pheromone[0]['secondName'] !== null)
                <h3>{{$pheromone[0]['name']}} ({{$pheromone[0]['secondName']}})</h3>
            @endif
            <p>Фирма Производител: {{$pheromone[0]['firmName']}}</p>
            <p>Формулация: {{$pheromone[0]['type']}}</p>
            <p>Активно в-во: {{$pheromone[0]['substance']}}</p>
            @foreach($pheromone[0]['pestsubstanse'] as $substance)
                <p>Активно в-во: {{$substance['quantity']}}
                    <a href="{!!URL::to('/substances/'.$substance['substance_id'])!!}" >{{$substance['name']}}</a>
                    {{$substance['quantityAfter']}} -

                    <a href="{!!URL::to('/pheromones/substances_edit/'.$substance['id'].'/'.$substance['pesticides_id'])!!}">Edit</a>
                </p>
            @endforeach
            <p>{{$pheromone[0]['permission']}}</p>
            <p>Валидно до: {{$pheromone[0]['valid']}}</p>
            <p>{{$pheromone[0]['dateOrder']}}</p>
            <p>Категория на употреба: {{$pheromone[0]['category']}}</p>
            <p>Забележка след категорията: {{$pheromone[0]['categoryNote']}}</p>
            <p>ЛД: {{$pheromone[0]['lethal']}}</p>
            <p>Забележка: {{$pheromone[0]['period']}}</p>
            <p>Description: {{$pheromone[0]['pestDescription']}}</p>
            <p>Доза min: {{$pheromone[0]['min']}} / Доза max: {{$pheromone[0]['max']}} - {{$pheromone[0]['measure']}} ({{$pheromone[0]['measureId']}} )</p>
        </div>
        <div class="row">
            <p style="font-weight: bold">Забележка:</p>
            <p>{!! $pheromone[0]['totalNoteAfterDose'] !!}</p>
        </div>
        <div class="row">
            <table class="table" style="width: 100%">
                <thead>
                    <tr>
                        <th></th>
                        <th>Актив</th>
                        <th>Култура</th>
                        <th>Вредител</th>
                        <th class="dose">Доза</th>
                        <th>Дни</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pheromone[0]['doses'] as $dose)
                        <tr>
                            <td>
                                <a href="{!!URL::to('/pheromones/deactivate_one_dose/'.$dose['id'].'/'.$dose['pesticides_id'])!!}" class="btn btn-danger"><i class="fas fa-cut"></i></a>
                            </td>
                            <td>
                                <?php
                                    if($dose['isActive'] == 0) {
                                        ?>
                                            <span class="bold green">ДА</span>
                                        <?php
                                    } else {
                                        ?>
                                            <span class="bold red">НЕ</span>
                                        <?php
                                    }
                                ?>
                            </td>
                            <td>{{$dose['crop']}}</td>
                            <td>
                                <?php
                                    if(strlen($dose['note']) > 0) {
                                        ?>
                                            <span class="bold underline">{{$dose['note']}}</span><br/>
                                        <?php
                                    }
                                ?>
                                {!! $dose['disease'] !!}
                                <?php
                                    if(strlen($dose['afterNote']) > 0) {
                                        ?>
                                            <br/><span class="bold">{!! $dose['afterNote'] !!}</span>
                                        <?php
                                    }
                                ?>
                            </td>
                            <td class="dose">
                                <?php
                                if(strlen($dose['doseNote']) > 0) {
                                    ?>
                                        {{$dose['dose']}} {{$dose['measure']}}<br/>
                                        <span class="bold">{{$dose['doseNote']}}</span>
                                    <?php
                                } else {
                                    ?>
                                        {{$dose['dose']}} {{$dose['measure']}} {{$dose['secondDose']}}
                                    <?php
                                }
                                ?>
                            </td>
                            <td>
                                <style>.ellipsis { text-overflow: ellipsis; }</style>
                                <p class="overflow ellipsis">{{$dose['quarantine']}}</p>
                            </td>
                            <td>
                                @if($dose['isActive'] === 0)
                                    <a href="{!!URL::to('/pheromones/dose_edit/'.$dose['id'].'/'.$dose['pesticides_id'])!!}" class="btn btn-primary"><i class="far fa-edit"></i></a>
                                @endif
                            </td>
                            <td>
                                @if($dose['isActive'] === 0)
                                    <a href="{!!URL::to('/pheromones/dose_crop/'.$pheromone[0]['id'].'/'.$dose['id'])!!}" class="btn btn-success">Crops</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection