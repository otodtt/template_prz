@extends('layouts.form')

@section('content')
    <div class="container">
        <div class="row">
            <div class="row">
                <a href="/">Начало</a>
                <a href="/manufacturers">ПРОИЗВОДИТЕЛИ</a>

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
                {!! Form::open(['url'=>'manufacturers/store', 'method'=>'POST', 'id'=>'form', 'class'=>'form-horizontal']) !!}
                <fieldset>
                    <legend>ДОБАВЯНЕ НА ПРОИЗВОДИТЕЛ</legend>
                    <div class="form-group">
                        <div class="col-lg-8">
                            <div class="col-lg-12">
                                <label for="name" class="control-label">Име</label>
                                {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'име', 'id'=>'name' ]) !!}
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="col-lg-12">
                                <label for="country" class="control-label">Страна</label>
                                {!! Form::text('country', null, ['class'=>'form-control', 'placeholder'=>'', 'id'=>'country' ]) !!}
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