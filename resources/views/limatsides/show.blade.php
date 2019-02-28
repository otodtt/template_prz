@extends('limatsides.layout')

@section('content')
    <div class="container">
        <div class="row">
            <a href="{!!URL::to('/limatsides/edit/'.$limatside[0]['id'])!!}" class="fa fa-edit btn btn-danger">
                &nbsp;РЕДАКТИРАЙ!
            </a>
            <a href="{!!URL::to('/limatsides/substances/'.$limatside[0]['id'])!!}" class="fa fa-edit btn btn-primary">
                &nbsp;ДОБАВИ А. В-ВО!
            </a>
            <a href="{!!URL::to('/limatsides/dose/'.$limatside[0]['id'])!!}" class="fa fa-edit btn btn-success">
                &nbsp;ДОБАВИ ДОЗА!
            </a>
            <a style="float: right" href="{!!URL::to('/limatsides/deactivate/'.$limatside[0]['id'])!!}" class="fa fa-cut btn btn-danger">
                &nbsp;Деактивирай!
            </a>
        </div>
        <hr/>
        <div class="row">
            @if($limatside[0]['secondName'] === null)
                <h3>{{$limatside[0]['name']}}</h3>
            @elseif($limatside[0]['secondName'] !== null)
                <h3>{{$limatside[0]['name']}} ({{$limatside[0]['secondName']}})</h3>
            @endif
            <p>Фирма Производител: {{$limatside[0]['firmName']}}</p>
            <p>Формулация: {{$limatside[0]['type']}}</p>
            <p>Активно в-во: {{$limatside[0]['substance']}}</p>
            @foreach($limatside[0]['pestsubstanse'] as $substance)
                <p>Активно в-во: {{$substance['quantity']}}
                    <a href="{!!URL::to('/substances/'.$substance['substance_id'])!!}" >{{$substance['name']}}</a>
                    {{$substance['quantityAfter']}} -

                    <a href="{!!URL::to('/limatsides/substances_edit/'.$substance['id'].'/'.$substance['pesticides_id'])!!}">Edit</a>
                </p>
            @endforeach
            <p>{{$limatside[0]['permission']}}</p>
            <p>Валидно до: {{$limatside[0]['valid']}}</p>
            <p>{{$limatside[0]['dateOrder']}}</p>
            <p>Категория на употреба: {{$limatside[0]['category']}}</p>
            <p>Забележка след категорията: {{$limatside[0]['categoryNote']}}</p>
            <p>ЛД: {{$limatside[0]['lethal']}}</p>
            <p>Забележка: {{$limatside[0]['period']}}</p>
            <p>Description: {{$limatside[0]['pestDescription']}}</p>
            <p>Доза min: {{$limatside[0]['min']}} / Доза max: {{$limatside[0]['max']}} - {{$limatside[0]['measure']}} ({{$limatside[0]['measureId']}} )</p>
        </div>
        <div class="row">
            <p style="font-weight: bold">Забележка:</p>
            <p>{!! $limatside[0]['totalNoteAfterDose'] !!}</p>
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
                    @foreach($limatside[0]['doses'] as $dose)
                        <tr>
                            <td>
                                <a href="{!!URL::to('/limatsides/deactivate_one_dose/'.$dose['id'].'/'.$dose['pesticides_id'])!!}" class="btn btn-danger"><i class="fas fa-cut"></i></a>
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
                                    <a href="{!!URL::to('/limatsides/dose_edit/'.$dose['id'].'/'.$dose['pesticides_id'])!!}" class="btn btn-primary"><i class="far fa-edit"></i></a>
                                @endif
                            </td>
                            <td>
                                @if($dose['isActive'] === 0)
                                    <a href="{!!URL::to('/limatsides/dose_crop/'.$limatside[0]['id'].'/'.$dose['id'])!!}" class="btn btn-success">Crops</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection