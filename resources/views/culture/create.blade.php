@extends('layouts.form')

@section('content')
    <div class="container">
        <div class="row">
            <div class="row">
                <a href="/">Начало</a>
                <a href="/template-practices">ТЕМПЛЕТ-НАЧАЛО</a>

            </div>
            <h2>Добавяне на Кутура</h2>
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
                {!! Form::open(['url'=>'culture/store', 'method'=>'POST', 'id'=>'form', 'class'=>'form-horizontal']) !!}
                <fieldset>
                    <legend>Legend</legend>

                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Група</label>
                        <div class="col-lg-10">
                            {!! Form::select('group_id',
                                array(4 =>'Зеленчуци'),
                                null,['id' => 'culture_id', 'class'=>'form-control'])
                            !!}
                            {{----}}
                            {{--{!! Form::select('group_id',--}}
                                {{--array('' => 'Избери!', 1 =>'Зърненожитни',2 => 'Бобови', 3 => 'Технически', 4 => 'Зеленчуци',--}}
                                {{--5 => 'Зеленчуци в съоражения', 6 => 'Овощни', 7 => 'Ягодоплодни', 8 => 'Лоза'),--}}
                                {{--null,['id' => 'culture_id', 'class'=>'form-control'])--}}
                            {{--!!}--}}

                            <br>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-lg-2 control-label">Име на български</label>
                        <div class="col-lg-10">
                            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Име на български', 'id'=>'name' ]) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="latin_name" class="col-lg-2 control-label">Име на Латински</label>
                        <div class="col-lg-10">
                            {!! Form::text('latin_name', null, ['class'=>'form-control', 'placeholder'=>'hordeum-vulgare', 'id'=>'latin_name' ]) !!}
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