@extends('adjuvants.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="row">
                <a href="/adjuvants">АДЮВАНТИ</a>

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
                {!! Form::model($adjuvant, ['url'=>'adjuvants/update/'.$adjuvant['id'], 'method'=>'POST', 'id'=>'form', 'class'=>'form-horizontal']) !!}
                <fieldset>
                    <legend>РЕДАКТИРАНЕ НА АДЮВАНТ</legend>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <div class="col-lg-6">
                                <label for="name" class="control-label">Продукт</label>
                                {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Продукт', 'id'=>'name' ]) !!}
                            </div>
                            <div class="col-lg-6">
                                <label for="orderAdjuvant" class="control-label">Заповед №</label>
                                {!! Form::text('orderAdjuvant', null, ['class'=>'form-control', 'placeholder'=>'Заповед №', 'id'=>'orderAdjuvant' ]) !!}
                            </div>
                        </div>
                    </div>

                    <hr style="border: 0.5px solid black"/>

                    <div class="form-group">
                        <div class="col-lg-12" style="margin-bottom: 20px">
                            <div class="col-lg-8">
                                <label for="owner" class="control-label">Притежател на Разрешението</label>
                                {!! Form::text('owner', null, ['class'=>'form-control', 'placeholder'=>'Притежател на Разрешението', 'id'=>'owner' ]) !!}
                            </div>

                            <div class="col-lg-4">
                                <label for="type" class="control-label">Тип формулация</label>
                                {!! Form::text('type', null, ['class'=>'form-control', 'placeholder'=>'Тип формулация', 'id'=>'type' ]) !!}
                            </div>
                        </div>
                    </div>

                    <hr style="border: 0.5px solid black"/>

                    <div class="form-group">
                        <div class="col-lg-6">
                            <label for="action" class="control-label">Начин на действие</label>
                            {!! Form::textarea('action', null, ['class'=>'form-control', 'placeholder'=>'Начин на действие', 'id'=>'action' ]) !!}
                        </div>
                        <div class="col-lg-6">
                            <label for="crops" class="control-label">Култури</label>
                            {!! Form::textarea('crops', null, ['class'=>'form-control', 'placeholder'=>'Култури', 'id'=>'crops' ]) !!}
                        </div>
                    </div>
                    <hr style="border: 0.5px solid black"/>
                    &lt;br/&gt; &lt;span class="italic-bold"&gt;&lt;/span&gt;
                    <hr style="border: 0.5px solid black"/>

                    <div class="form-group">
                        <div class="col-lg-6">
                            <label for="dose" class="control-label">Доза на приложение</label>
                            {!! Form::textarea('dose', null, ['class'=>'form-control', 'placeholder'=>'Доза на приложение', 'id'=>'dose' ]) !!}
                        </div>
                        <div class="col-lg-6">
                            <label for="application" class="control-label">Употреба с други</label>
                            {!! Form::textarea('application', null, ['class'=>'form-control', 'placeholder'=>'Употреба с други', 'id'=>'application' ]) !!}
                        </div>
                    </div>
                    <hr style="border: 0.5px solid black"/>

                    <div class="form-group">
                        <div class="col-lg-6">
                            <label for="noteApplication" class="control-label">Забележка при употрбата</label>
                            {!! Form::text('noteApplication', null, ['class'=>'form-control', 'placeholder'=>'Забележка при употрбата', 'id'=>'noteApplication' ]) !!}
                        </div>
                        <div class="col-lg-6">
                            <label for="isActive" class="control-label">АКТИВНА</label><br/>
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