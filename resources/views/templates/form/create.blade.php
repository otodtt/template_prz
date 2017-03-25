@extends('layouts.form')

@section('content')
    <div class="container">
        <div class="row">
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
                {{--<form class="form-horizontal">--}}
                {!! Form::open(['url'=>'template-practices/store', 'method'=>'POST', 'id'=>'form', 'class'=>'form-horizontal']) !!}
                    <fieldset>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Група - Зърненожитни</label>
                            <div class="col-lg-10">
                                <div class="radio">
                                    <label>
                                        {!! Form::radio('group_id', 1, true) !!}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select" class="col-lg-2 control-label">Зърненожитни</label>
                            <div class="col-lg-10">
                                {!! Form::select('culture_id',
                                   array(1 =>'Пшеница'),
                                   null,['id' => 'culture_id', 'class'=>'form-control'])
                               !!}
                                {{--{!! Form::select('culture_id',--}}
                                    {{--array('' => 'Избери!', 1 =>'Пшеница',2 => 'Ечемик', 3 => 'Овес',--}}
                                    {{--4 => 'Ръж', 5 => 'Царевица'),--}}
                                    {{--null,['id' => 'culture_id', 'class'=>'form-control'])--}}
                                {{--!!}--}}

                                <br>
                            </div>
                        </div>
                        <legend>Legend</legend>
                        <div class="form-group">
                            <label for="link_id" class="col-lg-2 control-label">За линк към вредител</label>
                            <div class="col-lg-10">
                                {!! Form::text('link_id', null, ['class'=>'form-control', 'placeholder'=>'link_id', 'id'=>'link_id' ]) !!}
                                {{--<input type="text" class="form-control" id="link_id" placeholder="link_id" name="link_id">--}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-lg-2 control-label">Име на български</label>
                            <div class="col-lg-10">
                                {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Име на български', 'id'=>'name' ]) !!}
                                {{--<input type="text" class="form-control" id="name" placeholder="Име на български" name="name">--}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="full_name" class="col-lg-2 control-label">Целия линк</label>
                            <div class="col-lg-10">
                                {!! Form::text('full_name', null, ['class'=>'form-control', 'placeholder'=>'Целия линк', 'id'=>'full_name' ]) !!}
                                {{--<input type="text" class="form-control" id="full_name" placeholder="Целия линк" name="full_name">--}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="text" class="col-lg-2 control-label">Текст за Вредителя</label>
                            <div class="col-lg-10">
                                {!! Form::textarea('text', null, ['class'=>'form-control', 'id'=>'text', 'rows'=>10 ]) !!}
                                {{--<textarea class="form-control" rows="10" id="text" name="text"></textarea>--}}
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