@extends('crops.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="row">
                <a href="{!!URL::to('/crops/show/'.$crops->id)!!}"><- {{$crops->name}}</a>
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
                {!! Form::model($desiccants, ['url'=>'crops/desiccants_update/'.$desiccants->id , 'method'=>'POST', 'id'=>'form', 'class'=>'form-horizontal']) !!}
                <fieldset>
                    <legend style="color: blue">РЕДАКТИРАНЕ НА ДЕСИКАНТ ЗА {{$crops->name}}</legend>
                    <div class="form-group">
                        <div class="col-lg-6">
                            <div class="col-lg-12">
                                <label for="product" class="control-label">Продикт Име</label>
                                {!! Form::text('product', null, ['class'=>'form-control', 'placeholder'=>'Продикт Име', 'id'=>'product' ]) !!}
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="col-lg-12">
                                <label for="productId" class="control-label">ИД на Продикт</label>
                                {!! Form::text('productId', null, ['class'=>'form-control', 'placeholder'=>'ИД на Продикт', 'id'=>'productId' ]) !!}
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="col-lg-12">
                                <label for="dose" class="control-label">Доза</label>
                                {!! Form::text('dose', null, ['class'=>'form-control', 'placeholder'=>'Доза', 'id'=>'dose' ]) !!}
                            </div>
                        </div>
                    </div>
                    <hr style="border: 0.5px solid black"/>
                    <div class="form-group">
                        <div class="col-lg-4">
                            <div class="col-lg-12">
                                <label for="note" class="control-label">Забележка</label>
                                {!! Form::text('note', null, ['class'=>'form-control', 'placeholder'=>'Забележка', 'id'=>'note' ]) !!}
                                <br/>
                                <br/>
                                <label for="minimumUse" class="control-label">Минимална Употреба</label>
                                {!! Form::text('minimumUse', null, ['class'=>'form-control', 'placeholder'=>'Минимална Употреба', 'id'=>'minimumUse' ]) !!}
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="col-lg-12">
                                <label for="disease" class="control-label">Употреба на Продикт</label>
                                {!! Form::textarea('disease', null, ['class'=>'form-control', 'id'=>'disease' ]) !!}
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="col-lg-12">
                                <label for="afterNote" class="control-label">Забележка след</label>
                                {!! Form::text('afterNote', null, ['class'=>'form-control', 'placeholder'=>'Забележка след дозата', 'id'=>'afterNote' ]) !!}
                                <br/>
                                &lt;span class="latin_name"&gt;&lt;/span&gt;
                            </div>
                        </div>
                    </div>
                    <hr style="border: 0.5px solid black"/>

                    <div class="form-group">
                        <div class="col-lg-3">
                            <div class="col-lg-12">
                                <label for="quarantine" class="control-label">Каранатина</label>
                                {!! Form::text('quarantine', null, ['class'=>'form-control', 'placeholder'=>'Каранатинен период', 'id'=>'quarantine' ]) !!}
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="col-lg-12">
                                <label for="category" class="control-label">Категория за употреба</label>
                                {!! Form::select('category',
                                    array('' => 'Избери!', 1 =>'Първа професионална', 2 => 'Втора професионална', 3 => 'Непрофесионална',),
                                    null,['id' => 'category', 'class'=>'form-control'])
                                !!}
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="col-lg-12">
                                <label for="practices" class="control-label">ДРЗП</label>
                                {!! Form::textarea('practices', null, ['class'=>'form-control', 'id'=>'practices' ]) !!}
                            </div>
                        </div>
                    </div>
                    <hr style="border: 0.5px solid black"/>
                    <div class="form-group">
                        <div class="col-lg-6">
                            <label for="isActive" class="control-label">АКТИВНА</label>
                            {{ Form::label('isActive', 'ДА') }}
                            {{ Form::radio('isActive', 0, true ) }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            {{ Form::label('isActive', 'HE') }}
                            {{ Form::radio('isActive', 1 ) }}
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