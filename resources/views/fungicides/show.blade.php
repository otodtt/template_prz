@extends('fungicides.layout')

@section('content')
    <div class="container">
        <div class="row">
            <a href="{!!URL::to('/fungicides/edit/'.$fungicide[0]['id'])!!}" class="fa fa-edit btn btn-danger">
                &nbsp;РЕДАКТИРАЙ!
            </a>
            <a href="{!!URL::to('/fungicides/substances/'.$fungicide[0]['id'])!!}" class="fa fa-edit btn btn-primary">
                &nbsp;ДОБАВИ А. В-ВО!
            </a>
            <a href="{!!URL::to('/fungicides/dose/'.$fungicide[0]['id'])!!}" class="fa fa-edit btn btn-success">
                &nbsp;ДОБАВИ ДОЗА!
            </a>
            <a style="float: right" href="{!!URL::to('/fungicides/deactivate/'.$fungicide[0]['id'])!!}" class="fa fa-cut btn btn-danger">
                &nbsp;Деактивирай!
            </a>
        </div>
        <hr/>
        <div class="row">
            <h3>{{$fungicide[0]['name']}}</h3>
            <p>Фирма Производител: {{$fungicide[0]['firmName']}}</p>
            <p>Формулация: {{$fungicide[0]['type']}}</p>
            <p>Активно в-во: {{$fungicide[0]['substance']}}</p>
            @foreach($fungicide[0]['pestsubstanse'] as $substance)
                <p>Активно в-во: {{$substance['quantity']}}
                    <a href="{!!URL::to('/substances/'.$substance['substance_id'])!!}" >{{$substance['name']}}</a>
                    {{$substance['quantityAfter']}} -

                    <a href="{!!URL::to('/fungicides/substances_edit/'.$substance['id'].'/'.$substance['pesticides_id'])!!}">Edit</a>
                </p>
            @endforeach
            <p>{{$fungicide[0]['permission']}}</p>
            <p>Валидно до: {{$fungicide[0]['valid']}}</p>
            <p>{{$fungicide[0]['dateOrder']}}</p>
            <p>Категория на употреба: {{$fungicide[0]['category']}}</p>
            <p>Забележка след категорията: {{$fungicide[0]['categoryNote']}}</p>
            <p>ЛД: {{$fungicide[0]['lethal']}}</p>
            <p>Забележка: {{$fungicide[0]['period']}}</p>
            <p>Description: {{$fungicide[0]['pestDescription']}}</p>
            <p>Доза min: {{$fungicide[0]['min']}} / Доза max: {{$fungicide[0]['max']}} - {{$fungicide[0]['measure']}} ({{$fungicide[0]['measureId']}} )</p>
        </div>
        <div class="row">
            <p style="font-weight: bold">Забележка:</p>
            <p>{!! $fungicide[0]['totalNoteAfterDose'] !!}</p>
        </div>
        <?php
//            var_dump($fungicide[0]['doses']);
//            var_dump($fungicide[0]['id']);
        ?>
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
                    @foreach($fungicide[0]['doses'] as $dose)
                        <tr>
                            <td>
                                <a href="{!!URL::to('/fungicides/deactivate_one_dose/'.$dose['id'].'/'.$dose['pesticides_id'])!!}" class="btn btn-danger"><i class="fas fa-cut"></i></a>
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
                                    if(strlen($dose['afterNote']) > 0) {
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
                                    <a href="{!!URL::to('/fungicides/dose_edit/'.$dose['id'].'/'.$dose['pesticides_id'])!!}" class="btn btn-primary"><i class="far fa-edit"></i></a>
                                @endif
                            </td>
                            <td>
                                @if($dose['isActive'] === 0)
                                    <a href="{!!URL::to('/fungicides/dose_crop/'.$fungicide[0]['id'].'/'.$dose['id'])!!}" class="btn btn-success">Crops</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection