@extends('regulators.layout')

@section('content')
    <div class="container">
        <div class="row">
            <a href="{!!URL::to('/regulators/edit/'.$regulator[0]['id'])!!}" class="fa fa-edit btn btn-danger">
                &nbsp;РЕДАКТИРАЙ!
            </a>
            {{--<a href="{!!URL::to('/regulators/substances/'.$regulator[0]['id'])!!}" class="fa fa-edit btn btn-primary">--}}
                {{--&nbsp;ДОБАВИ А. В-ВО!--}}
            {{--</a>--}}
            <a href="{!!URL::to('/regulators/dose/'.$regulator[0]['id'])!!}" class="fa fa-edit btn btn-success">
                &nbsp;ДОБАВИ ДОЗА!
            </a>
            <a style="float: right" href="{!!URL::to('/regulators/deactivate/'.$regulator[0]['id'])!!}" class="fa fa-cut btn btn-danger">
                &nbsp;Деактивирай!
            </a>
        </div>
        <hr/>
        <div class="row">
            <h3>{{$regulator[0]['name']}}</h3>
            <p>Фирма Производител: {{$regulator[0]['firmName']}}</p>
            <p>Формулация: {{$regulator[0]['type']}}</p>
            <p>Активно в-во: {{$regulator[0]['substance']}}</p>
            @foreach($regulator[0]['pestsubstanse'] as $substance)
                <p>Активно в-во: {{$substance['quantity']}}
                    <a href="{!!URL::to('/substances/'.$substance['substance_id'])!!}" >{{$substance['name']}}</a>
                    {{$substance['quantityAfter']}} -

                    <a href="{!!URL::to('/regulators/substances_edit/'.$substance['id'].'/'.$substance['pesticides_id'])!!}">Edit</a>
                </p>
            @endforeach
            <p>{{$regulator[0]['permission']}}</p>
            <p>Валидно до: {{$regulator[0]['valid']}}</p>
            <p>{{$regulator[0]['dateOrder']}}</p>
            <p>Категория на употреба: {{$regulator[0]['category']}}</p>
            <p>Забележка след категорията: {{$regulator[0]['categoryNote']}}</p>
            <p>ЛД: {{$regulator[0]['lethal']}}</p>
            <p>Забележка: {{$regulator[0]['period']}}</p>
            <p>Description: {{$regulator[0]['pestDescription']}}</p>
            <p>Доза min: {{$regulator[0]['min']}} / Доза max: {{$regulator[0]['max']}} - {{$regulator[0]['measure']}} ({{$regulator[0]['measureId']}} )</p>
        </div>
        <div class="row">
            <p style="font-weight: bold">Забележка:</p>
            <p>{!! $regulator[0]['totalNoteAfterDose'] !!}</p>
        </div>
        <?php
//            var_dump($regulator[0]['doses']);
//            var_dump($regulator[0]['id']);
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
                    @foreach($regulator[0]['doses'] as $dose)
                        <tr>
                            <td>
                                <a href="{!!URL::to('/regulators/deactivate_one_dose/'.$dose['id'].'/'.$dose['pesticides_id'])!!}" class="btn btn-danger"><i class="fas fa-cut"></i></a>
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
                                <?php
                                    if(strlen($dose['application']) > 0) {
                                        ?>
                                            <br/><span class="bold">{!! $dose['application'] !!}</span>
                                        <?php
                                    }
                                ?>
                            </td>
                            <td class="dose">
                                <?php
                                if(strlen($dose['doseNote']) > 0) {
                                    ?>
                                        @if($dose['measureId'] === 6)
                                            {!! $dose['dose'] !!}<br/>
                                            <span class="bold">{{$dose['doseNote']}}</span>
                                        @else
                                            {!! $dose['dose'] !!}} {{$dose['measure']}}<br/>
                                            <span class="bold">{{$dose['doseNote']}}</span>
                                        @endif
                                    <?php
                                } else {
                                    ?>
                                        @if($dose['measureId'] === 6)
                                            {!! $dose['dose'] !!} {{$dose['secondDose']}}
                                        @else
                                            {!! $dose['dose'] !!} {{$dose['measure']}} {{$dose['secondDose']}}
                                        @endif

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
                                    <a href="{!!URL::to('/regulators/dose_edit/'.$dose['id'].'/'.$dose['pesticides_id'])!!}" class="btn btn-primary"><i class="far fa-edit"></i></a>
                                @endif
                            </td>
                            <td>
                                @if($dose['isActive'] === 0)
                                    <a href="{!!URL::to('/regulators/dose_crop/'.$regulator[0]['id'].'/'.$dose['id'])!!}" class="btn btn-success">Crops</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection