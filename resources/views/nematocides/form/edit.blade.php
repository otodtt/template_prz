@extends('acaricides.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="row">
                <a href="{!!URL::to('/acaricides/'.$acaricides['id'])!!}" >НАЗАД</a>
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
                {!! Form::model($acaricides, ['url'=>'acaricides/update/'.$acaricides['id'], 'method'=>'POST', 'id'=>'form', 'class'=>'form-horizontal']) !!}
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
                                <?php
                                foreach($firms as $value=>$name) {
                                    if($acaricides['manufacturersId'] == $value) {
                                        echo '<option value="'.$value.', '.$name.'" selected>'.$name.'</option>';
                                    }
                                    else {
                                        echo '<option value="'.$value.', '.$name.'" >'.$name.'</option>';
                                    }
                                }
                                ?>
                            </select>

                        </div>
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
                        <div class="col-lg-2">
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
                        <div class="col-lg-6">
                            <label for="categoryNote" class="control-label">Забележка след категорията</label>
                            {!! Form::text('categoryNote', null, ['class'=>'form-control', 'placeholder'=>'Забележка след категорията', 'id'=>'categoryNote' ]) !!}
                        </div>
                    </div>
                    <hr style="border: 0.5px solid black"/>

                    <div class="form-group">
                        <div class="col-lg-3">
                            <label for="min" class="control-label">Минимална доза</label>
                            {!! Form::text('min', null, ['class'=>'form-control', 'placeholder'=>'Минимална доза', 'id'=>'min' ]) !!}
                        </div>
                        <div class="col-lg-3">
                            <label for="max" class="control-label">Максимална доза</label>
                            {!! Form::text('max', null, ['class'=>'form-control', 'placeholder'=>'Максимална доза', 'id'=>'max' ]) !!}
                        </div>
                        <div class="col-lg-6">
                            <div class="col-lg-12">
                                <label for="measure" class="control-label">Мерна Единица</label><br/>
                                {{--{{ Form::label('measure', 'мл/дка') }}--}}
                                {{--{{ Form::radio('measure', '1, мл/дка' ) }}&nbsp;&nbsp;&nbsp;&nbsp;--}}
                                {{--{{ Form::label('measure', 'г/дка') }}--}}
                                {{--{{ Form::radio('measure', '2, г/дка' ) }}&nbsp;&nbsp;&nbsp;&nbsp;--}}
                                {{--{{ Form::label('measure', '%') }}--}}
                                {{--{{ Form::radio('measure', '3, %' ) }}&nbsp;&nbsp;&nbsp;&nbsp;--}}
                                {{--{{ Form::label('measure', 'л/дка') }}--}}
                                {{--{{ Form::radio('measure', '4, л/дка' ) }}&nbsp;&nbsp;&nbsp;&nbsp;--}}
                                {{--{{ Form::label('measure', 'кг/дка') }}--}}
                                {{--{{ Form::radio('measure', '5, кг/дка' ) }}&nbsp;&nbsp;&nbsp;&nbsp;--}}
                                {{--<label for="measure" class="control-label">Мерна Единица</label><br/>--}}
                                <?php
//                                var_dump($acaricides['measureId']);
                                if($acaricides['measureId'] == 0) {
                                    $value1 = '1, мл/дка';
                                    $value2 = '2, г/дка';
                                    $value3 = '3, %';
                                    $value4 = '4, л/дка';
                                    $value5 = '5, кг/дка';

                                    $select1 = '';
                                    $select2 = '';
                                    $select3 = '';
                                    $select4 = '';
                                    $select5 = '';
                                }
                                if($acaricides['measureId'] == 1) {
                                    $value1 = '1, мл/дка';
                                    $value2 = '2, г/дка';
                                    $value3 = '3, %';
                                    $value4 = '4, л/дка';
                                    $value5 = '5, кг/дка';

                                    $select1 = 'checked="checked"';
                                    $select2 = '';
                                    $select3 = '';
                                    $select4 = '';
                                    $select5 = '';
                                }
                                if($acaricides['measureId'] == 2) {
                                    $value1 = '1, мл/дка';
                                    $value2 = '2, г/дка';
                                    $value3 = '3, %';
                                    $value4 = '4, л/дка';
                                    $value5 = '5, кг/дка';

                                    $select1 = '';
                                    $select2 = 'checked="checked"';
                                    $select3 = '';
                                    $select4 = '';
                                    $select5 = '';
                                }

                                if($acaricides['measureId'] == 3) {
                                    $value1 = '1, мл/дка';
                                    $value2 = '2, г/дка';
                                    $value3 = '3, %';
                                    $value4 = '4, л/дка';
                                    $value5 = '5, кг/дка';

                                    $select1 = '';
                                    $select2 = '';
                                    $select3 = 'checked="checked"';
                                    $select4 = '';
                                    $select5 = '';
                                }

                                if($acaricides['measureId'] == 4) {
                                    $value1 = '1, мл/дка';
                                    $value2 = '2, г/дка';
                                    $value3 = '3, %';
                                    $value4 = '4, л/дка';
                                    $value5 = '5, кг/дка';

                                    $select1 = '';
                                    $select2 = '';
                                    $select3 = '';
                                    $select4 = 'checked="checked"';
                                    $select5 = '';
                                }

                                if($acaricides['measureId'] == 5) {
                                    $value1 = '1, мл/дка';
                                    $value2 = '2, г/дка';
                                    $value3 = '3, %';
                                    $value4 = '4, л/дка';
                                    $value5 = '5, кг/дка';

                                    $select1 = '';
                                    $select2 = '';
                                    $select3 = '';
                                    $select4 = '';
                                    $select5 = 'checked="checked"';
                                }
//                                                                var_dump($acaricides['measureId']);
                                ?>
                                {{ Form::label('measure', 'мл/дка') }}
                                <input {{$select1}} name="measure" type="radio" value="{{$value1}}" id="measure" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                {{ Form::label('measure', 'г/дка') }}
                                <input {{$select2}} name="measure" type="radio" value="{{$value2}}" id="measure" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                {{ Form::label('measure', '%') }}
                                <input {{$select3}} name="measure" type="radio" value="{{$value3}}" id="measure" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                {{ Form::label('measure', 'л/дка') }}
                                <input {{$select4}} name="measure" type="radio" value="{{$value4}}" id="measure" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                {{ Form::label('measure', 'кг/дка') }}
                                <input {{$select5}} name="measure" type="radio" value="{{$value5}}" id="measure" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                        </div>
                    </div>

                    <hr style="border: 0.5px solid black"/>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <label for="pestDescription" class="control-label">ОПИСАНИЕ ЗА description</label>
                            {!! Form::textarea('pestDescription', null, ['class'=>'form-control', 'id'=>'pestDescription' ]) !!}
                        </div>
                    </div>
                    <hr style="border: 0.5px solid black"/>

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