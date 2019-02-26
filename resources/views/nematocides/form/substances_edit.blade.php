@extends('substances.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="row">
                <a href="{!!URL::to('/nematocides/'.$nematocide->id)!!}"><- {{$nematocide->name}}</a>
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
                {!! Form::model($subs, ['url'=>'nematocides/subs_update/'.$subs[0]['id'].'/'.$subs[0]['pesticides_id'] , 'method'=>'POST', 'id'=>'form', 'class'=>'form-horizontal']) !!}
                <fieldset>
                    <legend style="color: blue">РЕДАКТИРАНЕ НА АКТИВНО ВЕЩЕСТВО КЪМ {{$nematocide->name}}</legend>
                    <div class="form-group">
                        <div class="col-lg-3">
                            <div class="col-lg-12">
                                <label for="quantity" class="control-label">Количество %</label>
                                {!! Form::text('quantity', $subs[0]['quantity'], ['class'=>'form-control', 'placeholder'=>'Количество %', 'id'=>'quantity' ]) !!}
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="col-lg-12">
                                <label for="substance_id" class="control-label">Име на А. ВЕЩЕСТВО</label>
                                {{--                                {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'име', 'id'=>'name' ]) !!}--}}
                                <select name="substance_id[]" class="form-control">
                                    <?php
                                    foreach($substances as $value=>$name) {
                                        if ($value === $subs[0]['substance_id']) {
                                            echo '<option value="'.$value.', '.$name.'" selected >'.$name.'</option>';
                                        } else {
                                            echo '<option value="'.$value.', '.$name.'" >'.$name.'</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="col-lg-12">
                                <label for="quantityAfter" class="control-label">Количество %</label>
                                {!! Form::text('quantityAfter', $subs[0]['quantityAfter'], ['class'=>'form-control', 'placeholder'=>'Количество %', 'id'=>'quantityAfter' ]) !!}
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