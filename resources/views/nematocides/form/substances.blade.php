@extends('nematocides.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="row">
                <a href="{!!URL::to('/nematocides/'.$nematocides->id)!!}"><- {{$nematocides->name}}</a>
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
                {!! Form::open(['url'=>'nematocides/subs_add/'.$nematocides->id , 'method'=>'POST', 'id'=>'form', 'class'=>'form-horizontal']) !!}
                <fieldset>
                    <legend style="color: blue">ДОБАВЯНЕ НА АКТИВНО ВЕЩЕСТВО КЪМ {{$nematocides->name}}</legend>
                    <div class="form-group">
                        <div class="col-lg-3">
                            <div class="col-lg-12">
                                <label for="quantity" class="control-label">Количество %</label>
                                {!! Form::text('quantity', null, ['class'=>'form-control', 'placeholder'=>'Количество %', 'id'=>'quantity' ]) !!}
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="col-lg-12">
                                <label for="substance_id" class="control-label">Име на А. ВЕЩЕСТВО</label>
{{--                                {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'име', 'id'=>'name' ]) !!}--}}
                                <select name="substance_id[]" class="form-control">
                                    <option value="" >Избери</option>
                                    <?php
                                    foreach($substances as $value=>$name) {
                                        echo '<option value="'.$value.', '.$name.'" >'.$name.'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="col-lg-12">
                                <label for="quantityAfter" class="control-label">Количество %</label>
                                {!! Form::text('quantityAfter', null, ['class'=>'form-control', 'placeholder'=>'Количество %', 'id'=>'quantityAfter' ]) !!}
                            </div>
                        </div>
                    </div>
                    <hr/>

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