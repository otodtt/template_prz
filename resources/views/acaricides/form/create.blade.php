@extends('layouts.form')

@section('content')
    <div class="container">
        <div class="row">
            <div class="row">
                <a href="/">Начало</a>
                <a href="/acaricides">АКАРИЦИДИ</a>

            </div>
            <div class="col-lg-12">
                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error  }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {!! Form::open(['url'=>'acaricides/store', 'method'=>'POST', 'id'=>'form', 'class'=>'form-horizontal']) !!}
                <fieldset>
                    <legend>ДОБАВЯНЕ НА АКАРИЦИД</legend>
                    <div class="form-group">
                        <div class="col-lg-8">
                            <div class="col-lg-12">
                                <label for="name" class="control-label">Име на продукта</label>
                                {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'име на продукта', 'id'=>'name' ]) !!}
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="col-lg-12">
                                <label for="type" class="control-label">Формулация</label>
                                {!! Form::text('type', null, ['class'=>'form-control', 'placeholder'=>'EK, SL', 'id'=>'type' ]) !!}
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="col-lg-6">
                                <label for="moreNames" class="control-label">Име в колоната</label>
                                {!! Form::text('moreNames', null, ['class'=>'form-control', 'placeholder'=>'Име в колоната', 'id'=>'moreNames' ]) !!}
                            </div>
                            <div class="col-lg-6">
                                <label for="secondName" class="control-label">Второ име</label>
                                {!! Form::text('secondName', null, ['class'=>'form-control', 'placeholder'=>'Второ име', 'id'=>'secondName' ]) !!}
                            </div>
                        </div>
                    </div>

                    <hr style="border: 0.5px solid black"/>
                    <div class="form-group">
                        <div class="col-lg-6">
                            <label for="select" class="control-label">Избери Фирма</label>
{{--                            {!! Form::select('manufacturersId', $firms, null,['id' =>'manufacturersId', 'class' =>'localsID form-control']) !!}--}}
                            <select name="manufacturersId[]" class="form-control">
                                <option value="" >Избери</option>
                                <?php
                                    foreach($firms as $value=>$name) {
                                        echo '<option value="'.$value.', '.$name.'" >'.$name.'</option>';
                                    }
                                ?>
                            </select>

                        </div>
                        {{--<div class="col-lg-6">--}}
                            {{--<label for="firmName" class="control-label">ИМЕ Фирма Производител</label>--}}
                            {{--{!! Form::text('firmName', null, ['class'=>'form-control', 'placeholder'=>'ИМЕ Фирма', 'id'=>'firmName' ]) !!}--}}
                        {{--</div>--}}
                    </div>

                    <hr style="border: 0.5px solid black"/>


                    <div class="form-group">
                        <div class="col-lg-4">
                            <label for="permission" class="control-label">Разрешение</label>
                            {!! Form::text('permission', null, ['class'=>'form-control', 'placeholder'=>'Разрешение', 'id'=>'permission' ]) !!}
                        </div>
                        <div class="col-lg-4">
                            <label for="valid" class="control-label">Валидно до:</label>
                            {!! Form::text('valid', null, ['class'=>'form-control', 'placeholder'=>'Валидно до', 'id'=>'valid' ]) !!}
                        </div>
                        <div class="col-lg-4">
                            <label for="dateOrder" class="control-label">Заповед</label>
                            {!! Form::text('dateOrder', null, ['class'=>'form-control', 'placeholder'=>'Заповед', 'id'=>'dateOrder' ]) !!}
                        </div>
                        <div class="col-lg-12">
                            <label for="period" class="control-label">Гратисен период </label>
                            {!! Form::text('period', null, ['class'=>'form-control', 'placeholder'=>'Гратисен период или друго', 'id'=>'period' ]) !!}
                        </div>
                    </div>
                    <hr style="border: 0.5px solid black"/>

                    <div class="form-group">
                        <div class="col-lg-12">
                            <label for="substance" class="control-label">Активно вещество</label>
                            {!! Form::text('substance', null, ['class'=>'form-control', 'placeholder'=>'Активно вещество', 'id'=>'substance' ]) !!}
                        </div>
                    </div>
                    <hr style="border: 0.5px solid black"/>

                    <div class="form-group">
                        <div class="col-lg-4">
                            <label for="lethal" class="control-label">Летална доза</label>
                            {!! Form::text('lethal', null, ['class'=>'form-control', 'placeholder'=>'Летална доза', 'id'=>'lethal' ]) !!}
                        </div>
                        <div class="col-lg-4">
                            <label for="category" class="control-label">Категория за употреба</label>
{{--                            {!! Form::text('category', null, ['class'=>'form-control', 'placeholder'=>'Категория за употреба', 'id'=>'category' ]) !!}--}}
                            {!! Form::select('category',
                                array('' => 'Избери!', 1 =>'Първа професионална',2 => 'Втора професионална', 3 => 'непрофесионална',),
                                null,['id' => 'category', 'class'=>'form-control'])
                            !!}
                        </div>
                    </div>







                    {{--<div class="form-group">--}}
                        {{--<label for="select" class="col-lg-2 control-label">Култура</label>--}}
                        {{--<div class="col-lg-10">--}}
                            {{--{!! Form::select('cultureId',--}}
                               {{--array(34 =>'Лоза'),--}}
                               {{--null,['id' => 'cultureId', 'class'=>'form-control'])--}}
                           {{--!!}--}}
                            {{--{!! Form::select('culture_id',--}}
                            {{--array('' => 'Избери!', 1 =>'Пшеница',2 => 'Ечемик', 3 => 'Овес',--}}
                            {{--4 => 'Ръж', 5 => 'Царевица'),--}}
                            {{--null,['id' => 'culture_id', 'class'=>'form-control'])--}}
                            {{--!!}--}}

                            {{--<br>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--<label for="linkId" class="col-lg-2 control-label">За линк към вредител</label>--}}
                        {{--<div class="col-lg-10">--}}
                            {{--{!! Form::text('linkId', null, ['class'=>'form-control', 'placeholder'=>'linkId', 'id'=>'linkId' ]) !!}--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="name" class="col-lg-2 control-label">Име на български</label>--}}
                        {{--<div class="col-lg-10">--}}
                            {{--{!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Име на български', 'id'=>'name' ]) !!}--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="fullName" class="col-lg-2 control-label">Целия линк</label>--}}
                        {{--<div class="col-lg-10">--}}
                            {{--{!! Form::text('fullName', null, ['class'=>'form-control', 'placeholder'=>'Целия линк', 'id'=>'fullName' ]) !!}--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="text" class="col-lg-2 control-label">Текст за Вредителя</label>--}}
                        {{--<div class="col-lg-10">--}}
                            {{--{!! Form::textarea('text', null, ['class'=>'form-control', 'id'=>'text', 'rows'=>10 ]) !!}--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--<label for="tablePiv" class="col-lg-2 control-label">Таблица ПИВ</label>--}}
                        {{--<div class="col-lg-10">--}}
                            {{--{!! Form::textarea('tablePiv', null, ['class'=>'form-control', 'id'=>'tablePiv', 'rows'=>10 ]) !!}--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
                {!! Form::close() !!}
            </div>
        </div>
    </div>


@endsection