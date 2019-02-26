@extends('nematocides.layout')

@section('content')
    <div class="container">
        <div class="row">
            <a href="{!!URL::to('/nematocides/'.$nematocide->id)!!}"><- {{$nematocide->name}}</a>
        </div>
        <div class="row" style="text-align: center; color: green">
            <h4>ДОБАВЯНЕ НА ДОЗИ ЗА КУЛТУРИ ОТ ПРЗ  {{$nematocide->name}}</h4>
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
            {!! Form::open(['url'=>'nematocides/crop_dose_store/'.$nematocide->id.'/'.$doses[0]['id'] , 'method'=>'POST', 'id'=>'form', 'class'=>'form-horizontal']) !!}
            <fieldset>
                <legend style="color: green"></legend>
                <div class="form-group">
                    <div class="col-lg-12">
                        <p style="color: red; font-weight: bold">ВНИМАНИЕ</p>
                        <p>Тряба да се избера една от следните култури/ култура</p>
                    </div>
                </div>
                <hr style="border: 0.5px solid black"/>
                <div class="form-group">
                    <div class="col-lg-6">
                        <p style="font-weight: bold">{{ $doses[0]['crop'] }}</p>
                        <p style="font-weight: bold">{{ $doses[0]['id'] }}</p>
                    </div>
                    <div class="col-lg-6">
                        <select class="form-control m-bot15" name="crop_id">
                            {{--@if($crops->count() > 0)--}}
                            <option value="">Избери</option>
                            @foreach($crops as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                            @endForeach
                        </select>
                    </div>
                </div>

                <hr style="border: 0.5px solid black"/>
                <div class="form-group">
                    <div class="col-lg-8">
                        <div class="col-lg-12">
                            <label for="note" class="control-label">Добави ако има уточнение след името т.н/ (винени сортове)</label>
                            {!! Form::text('note', null, ['class'=>'form-control', 'placeholder'=>' уточнение след името', 'id'=>'note' ]) !!}
                            {{--&lt;span class="latin_name"&gt;&lt;/span&gt;--}}
                        </div>
                    </div>
                </div>
                <hr style="border: 0.5px solid black"/>


                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <a href="{!!URL::to('/acaricides/'.$nematocide->id)!!}" class="btn btn-success">Назат</a>
                        <button type="submit" class="btn btn-primary">ДОБАВИ</button>
                    </div>
                </div>
            </fieldset>
            {!! Form::close() !!}
        </div>
    </div>
@endsection