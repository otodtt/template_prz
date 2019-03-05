@extends('.pheromones.layout')

@section('content')
    <div class="container">
        <div class="row">
            <a href="{!!URL::to('/pheromones/'.$pheromone->id)!!}"><- {{$pheromone->name}}</a>
        </div>
        <div class="row" style="text-align: center; color: green">
            <h4>АКТИВИРАНЕ ИЛИ ДЕАКТИВИРАНЕ НА ДОЗА ОТ ПРЗ {{$pheromone->name}}</h4>
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
        </div>
        <div class="col-lg-12">
            <p class="bold">{{ $doses[0]['crop'] }}</p>
            <p > {{$pheromone->name}} - {{ $doses[0]['dose'] }} {{ $doses[0]['measure'] }}</p>
            <p >{!! $doses[0]['disease'] !!}</p>
        </div>
        <div class="col-lg-12" style="margin: 0 auto">
            {!! Form::model($doses[0], ['url'=>'pheromones/deactivate_one_store/'.$doses[0]['id'].'/'.$pheromone->id , 'method'=>'POST', 'id'=>'form', 'class'=>'form-horizontal']) !!}
            <fieldset style="align-content: center">
                <div class="col-lg-12" style="margin: 0 auto; text-align: center;">
                    <label for="isActive" class="control-label">АКТИВНА ДОЗА</label><br/>
                    {{ Form::label('isActive', 'ДА') }}
                    {{ Form::radio('isActive', 0 ) }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    {{ Form::label('isActive', 'HE') }}
                    {{ Form::radio('isActive', 1 ) }}
                </div>
                <div class="form-group">
                    <div class="col-lg-12" style="margin-top: 50px; text-align: center;">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </fieldset>
            {!! Form::close() !!}
        </div>
    </div>
@endsection