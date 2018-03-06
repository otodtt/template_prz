@extends('substances.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="row">
                <a href="/substances">А. ВЕЩЕСТВА</a>

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
                {!! Form::open(['url'=>'substances/store', 'method'=>'POST', 'id'=>'form', 'class'=>'form-horizontal']) !!}
                <fieldset>
                    <legend>ДОБАВЯНЕ НА АКТИВНО ВЕЩЕСТВО</legend>
                    <div class="form-group">
                        <div class="col-lg-8">
                            <div class="col-lg-12">
                                <label for="name" class="control-label">Име</label>
                                {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'име', 'id'=>'name' ]) !!}
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="col-lg-12">
                                <p>Използва ли се в други продукти?</p>
                                НЕ {{ Form::radio('moreUses', 0, true) }}
                                ДА {{ Form::radio('moreUses', 1) }}
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