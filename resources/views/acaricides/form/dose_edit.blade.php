@extends('substances.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="row">
                <a href="{!!URL::to('/acaricides/'.$acaricides->id)!!}"><- {{$acaricides->name}}</a>
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
                {!! Form::model($dose[0], ['url'=>'acaricides/dose_update/'.$dose[0]['id'].'/'.$dose[0]['pesticides_id'] , 'method'=>'POST', 'id'=>'form', 'class'=>'form-horizontal']) !!}
                <fieldset>
                    <legend style="color: green">РЕДАКТИРАНЕ НА ДОЗА КЪМ {{$acaricides->name}}</legend>
                    <div class="form-group">
                        <div class="col-lg-3">
                            <div class="col-lg-12">
                                <label for="dose" class="control-label">Доза</label>
                                {!! Form::text('dose', null, ['class'=>'form-control', 'placeholder'=>'Доза', 'id'=>'dose' ]) !!}
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="col-lg-12">
                                <label for="measure" class="control-label">Мерна Единица</label><br/>
                                <?php
                                if($dose[0]['measureId'] == 1) {
                                    $value1 = '1, мл/дка';
                                    $value2 = '2, г/дка';
                                    $value3 = '3, %';

                                    $select1 = 'checked="checked"';
                                    $select2 = '';
                                    $select3 = '';
                                }
                                if($dose[0]['measureId'] == 2) {
                                    $value1 = '1, мл/дка';
                                    $value2 = '2, г/дка';
                                    $value3 = '3, %';

                                    $select1 = '';
                                    $select2 = 'checked="checked"';
                                    $select3 = '';
                                }

                                if($dose[0]['measureId'] == 3) {
                                    $value1 = '1, мл/дка';
                                    $value2 = '2, г/дка';
                                    $value3 = '3, %';

                                    $select1 = '';
                                    $select2 = '';
                                    $select3 = 'checked="checked"';
                                }
//                                var_dump($select3);
                                ?>
                                {{ Form::label('measure', 'мл/дка') }}
{{--                                {{ Form::radio('measure', '1, мл/дка' ) }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--}}
{{--                                {{ Form::radio('measure', $value1, $select1 ) }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--}}
                                <input {{$select1}} name="measure" type="radio" value="{{$value1}}" id="measure" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                {{ Form::label('measure', 'г/дка') }}
{{--                                {{ Form::radio('measure', '2, г/дка' ) }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--}}
{{--                                {{ Form::radio('measure', $value2, $select2 ) }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--}}
                                <input {{$select2}} name="measure" type="radio" value="{{$value2}}" id="measure" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                {{ Form::label('measure', '%') }}
{{--                                {{ Form::radio('measure', '3, %' ) }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--}}
{{--                                {{ Form::radio('measure', $value3, $select3 ) }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--}}
                                <input {{$select3}} name="measure" type="radio" value="{{$value3}}" id="measure" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="col-lg-12">
                                <label for="secondDose" class="control-label">Втора Доза</label>
                                {!! Form::text('secondDose', null, ['class'=>'form-control', 'placeholder'=>'Втора Доза ако има', 'id'=>'secondDose' ]) !!}
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="col-lg-12">
                                <label for="doseNote" class="control-label">Бележка в дозата</label>
                                {!! Form::text('doseNote', null, ['class'=>'form-control', 'placeholder'=>'Бележка в дозата', 'id'=>'doseNote' ]) !!}
                            </div>
                        </div>
                    </div>
                    <hr style="border: 0.5px solid black"/>
                    <div class="form-group">
                        <div class="col-lg-6">
                            <div class="col-lg-12">
                                <label for="note" class="control-label">Бележка преди дозата</label>
                                {!! Form::text('note', null, ['class'=>'form-control', 'placeholder'=>'Бележка ако има', 'id'=>'note' ]) !!}
                            </div>
                        </div>
                    </div>
                    <hr style="border: 0.5px solid black"/>
                    <div class="form-group">
                        <div class="col-lg-5">
                            <div class="col-lg-12">
                                <label for="crop" class="control-label">КУЛТУРА</label>
                                {!! Form::text('crop', null, ['class'=>'form-control', 'placeholder'=>'Култура при която се прилага', 'id'=>'crop' ]) !!}
                                &lt;span class="latin_name"&gt;&lt;/span&gt;
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="col-lg-12">
                                <label for="disease" class="control-label">ВРЕДИТЕЛИ</label>
                                {!! Form::textarea('disease', null, ['class'=>'form-control', 'id'=>'disease' ]) !!}
                            </div>
                        </div>
                    </div>
                    <hr style="border: 0.5px solid black"/>
                    <div class="form-group">
                        <div class="col-lg-6">
                            <div class="col-lg-12">
                                <label for="afterNote" class="control-label">Бележка след дозата</label>
                                {!! Form::text('afterNote', null, ['class'=>'form-control', 'placeholder'=>'Бележка след дозата', 'id'=>'afterNote' ]) !!}
                            </div>
                        </div>
                    </div>
                    <hr style="border: 0.5px solid black"/>
                    <div class="form-group">
                        <div class="col-lg-6">
                            <div class="col-lg-12">
                                <label for="quarantine" class="control-label">Карантинен период</label>
                                {!! Form::text('quarantine', null, ['class'=>'form-control', 'placeholder'=>'Карантинен период', 'id'=>'quarantine' ]) !!}
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="col-lg-12">
                                <label for="quantityAfter" class="control-label">КАЛКУЛАТОР</label><br/>
                                {{ Form::label('isCalc', 'HE') }}
                                {{ Form::radio('isCalc', 0, true ) }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                {{ Form::label('isCalc', 'DA') }}
                                {{ Form::radio('isCalc', 1 ) }}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <div class="col-lg-12">
                                <label for="application" class="control-label">Приложение</label>
                                {!! Form::textarea('application', null, ['class'=>'form-control', 'id'=>'application' ]) !!}
                            </div>
                        </div>
                    </div>


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