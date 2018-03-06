@extends('substances.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="row">
                <a href="{!!URL::to('/substances/'.$substances->id)!!}"><- {{$substances->name}}</a>
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
                {!! Form::open(['url'=>'substances/store_add/'.$substances->id , 'method'=>'POST', 'id'=>'form', 'class'=>'form-horizontal']) !!}
                <fieldset>
                    <legend>ДОБАВЯНЕ НА АКТИВНО ВЕЩЕСТВО КЪМ {{$substances->name}}</legend>
                    <div class="form-group">
                        <div class="col-lg-8">
                            <div class="col-lg-12">
                                <label for="name" class="control-label">Име на Продукта</label>
                                {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'име', 'id'=>'name' ]) !!}
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="col-lg-12">
                                <label for="idPest" class="control-label">ID на Продукта</label>
                                {!! Form::text('idPest', null, ['class'=>'form-control', 'placeholder'=>'име', 'id'=>'idPest' ]) !!}
                            </div>
                        </div>
                    </div>
                    <hr/>
                    <div class="form-group">
                        <div class="col-lg-8">
                            <div class="col-lg-12">
                                <label for="firm" class="control-label">Име на Фирмата</label>
                                {!! Form::text('firm', null, ['class'=>'form-control', 'placeholder'=>'Име на Фирмата', 'id'=>'firm' ]) !!}
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="col-lg-12">
                                <label for="firmId" class="control-label">ID на Фирмата</label>
                                {!! Form::text('firmId', null, ['class'=>'form-control', 'placeholder'=>'ID на Фирмата', 'id'=>'firmId' ]) !!}
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