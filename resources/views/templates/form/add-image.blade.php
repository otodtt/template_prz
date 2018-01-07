@extends('layouts.form')

@section('content')
    <div class="container">
        <div class="row">
            <div class="row">
                <a href="/">Начало</a>
                <a href="/template-practices/show-culture">НЕПРИЯТЕЛИ</a>

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
                <?php
                    // var_dump($practices->id)
//                    'url'=>'pharmacies/store-add/'.$pharmacy->id , 'method'=>'PUT', 'id'=>'form'
                ?>
                {!! Form::model($practices, ['url'=>'template-practices/store_image/'.$practices->id, 'method'=>'POST', 'id'=>'form', 'class'=>'form-horizontal']) !!}
                <fieldset>
                    <legend>ДОБАВЯНЕ НА СНИМКИ {{$practices->name}}</legend>

                    <div class="row" style="border: 1px solid black">
                        <div class="col-md-5" style="border: 1px solid blue; margin: 5px">
                            <h4>Гляма Снимка 1</h4>
                            <div class="form-group">
                                <label for="imgPath" class="col-lg-2 control-label">Link</label>
                                <div class="col-lg-10">
                                    {!! Form::text('imgPath', null, ['class'=>'form-control', 'placeholder'=>'Линк', 'id'=>'imgPath' ]) !!}
                                </div>
                                <label for="imgTitle" class="col-lg-2 control-label">Title</label>
                                <div class="col-lg-10">
                                    {!! Form::text('imgTitle', null, ['class'=>'form-control', 'placeholder'=>'Title', 'id'=>'imgTitle' ]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" style="border: 1px solid blue; margin: 5px; float: right">
                            <h4>Малка Снимка 1</h4>
                            <div class="form-group">
                                <label for="thumbPath" class="col-lg-2 control-label">Link SM</label>
                                <div class="col-lg-10">
                                    {!! Form::text('thumbPath', null, ['class'=>'form-control', 'placeholder'=>'Линк', 'id'=>'thumbPath' ]) !!}
                                </div>
                                <label for="thumbAlt" class="col-lg-2 control-label">Alt SM</label>
                                <div class="col-lg-10">
                                    {!! Form::text('thumbAlt', null, ['class'=>'form-control', 'placeholder'=>'Alt', 'id'=>'thumbAlt' ]) !!}
                                </div>
                                <label for="thumbTitle" class="col-lg-2 control-label">Title SM</label>
                                <div class="col-lg-10">
                                    {!! Form::text('thumbTitle', null, ['class'=>'form-control', 'placeholder'=>'Title', 'id'=>'thumbTitle' ]) !!}
                                </div>
                                <label for="bgName" class="col-lg-2 control-label">Име</label>
                                <div class="col-lg-10">
                                    {!! Form::text('bgName', null, ['class'=>'form-control', 'placeholder'=>'Име', 'id'=>'bgName' ]) !!}
                                </div>
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