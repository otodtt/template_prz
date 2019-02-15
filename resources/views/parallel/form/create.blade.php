@extends('parallel.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="row">
                <a href="/parallel">ВСИЧКИ ПАРАЛЕЛНА ТЪРГОВИЯ</a>

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
                {!! Form::open(['url'=>'parallel/store', 'method'=>'POST', 'id'=>'form', 'class'=>'form-horizontal']) !!}
                <fieldset>
                    <legend>ДОБАВЯНЕ НА ПРОДУКТ ЗА ПАРАЛЕЛНА ТЪРГОВИЯ</legend>
                    <div class="form-group">
                        <div class="col-lg-12" style="margin-bottom: 20px">
                            <div class="col-lg-12">
                                <label for="owner" class="control-label">Притежател на Разрешението</label>
                                {!! Form::text('owner', null, ['class'=>'form-control', 'placeholder'=>'Притежател на Разрешението', 'id'=>'owner' ]) !!}
                            </div>
                        </div>
                        <br/><br/>
                        <hr style="border: 0.5px solid black"/>

                        <div class="col-lg-12">
                            <div class="col-lg-6">
                                <label for="product" class="control-label">Продукт</label>
                                {!! Form::text('product', null, ['class'=>'form-control', 'placeholder'=>'Продукт', 'id'=>'product' ]) !!}
                            </div>
                            <div class="col-lg-6">
                                <label for="substances" class="control-label">Активно вещество</label>
                                {!! Form::text('substances', null, ['class'=>'form-control', 'placeholder'=>'Активно вещество', 'id'=>'substances' ]) !!}
                            </div>
                        </div>
                    </div>

                    <hr style="border: 0.5px solid black"/>

                    <div class="form-group">
                        <div class="col-lg-4">
                            <label for="referenceProduct" class="control-label">Референтен продукт</label>
                            {!! Form::text('referenceProduct', null, ['class'=>'form-control', 'placeholder'=>'Референтен продукт', 'id'=>'referenceProduct' ]) !!}
                        </div>
                        <div class="col-lg-4">
                            <label for="manufacturer" class="control-label">Производител</label>
                            {!! Form::text('manufacturer', null, ['class'=>'form-control', 'placeholder'=>'Производител', 'id'=>'manufacturer' ]) !!}
                        </div>
                        <div class="col-lg-4">
                            <label for="validReferenceProduct" class="control-label">№ на удостов. и валидност</label>
                            {!! Form::text('validReferenceProduct', null, ['class'=>'form-control', 'placeholder'=>'№ на удостов. и валидност на референтния продукт', 'id'=>'validReferenceProduct' ]) !!}
                        </div>
                    </div>
                    <hr style="border: 0.5px solid black"/>

                    <div class="form-group">
                        <div class="col-lg-6">
                            <label for="referenceProduct" class="control-label">№ на удостов. за паралелна търговия</label>
                            {!! Form::text('parallelTrade', null, ['class'=>'form-control', 'placeholder'=>'№ на удостов. за паралелна търговия', 'id'=>'parallelTrade' ]) !!}
                        </div>
                        <div class="col-lg-6">
                            <label for="validParallelTrade" class="control-label">Валидност на удостов. за паралелна търговия</label>
                            {!! Form::text('validParallelTrade', null, ['class'=>'form-control', 'placeholder'=>'Валидност на удостов. за паралелна търговия', 'id'=>'validParallelTrade' ]) !!}
                        </div>
                    </div>
                    <hr style="border: 0.5px solid black"/>


                    <div class="form-group">
                        <div class="col-lg-4">
                            <label for="link" class="control-label">Линк към ПРЗ-то</label>
                            {!! Form::text('link', null, ['class'=>'form-control', 'placeholder'=>'Линк към ПРЗ-то', 'id'=>'link' ]) !!}
                        </div>
                        <div class="col-lg-4">
                            <label for="typeId" class="control-label">Вид на ПРЗ-то</label>
                            <select name="typeId" id="typeId">
                                <option value="" >Избери</option>
                                <option value="1 | fungicide" >Фунгицид</option>
                                <option value="2 | insecticide" >Инсектицид</option>
                                <option value="3 | acaricide" >Акарицид</option>
                                <option value="4 | nematocide" >Нематоцид</option>
                                <option value="5 | rodenticide" >Родентицид</option>
                                <option value="6 | limatside" >Лимацид</option>
                                <option value="7 | repellent" >Репелент</option>
                                <option value="8 | pheromone" >Феромон</option>
                                <option value="9 | herbicide" >Хербицид</option>
                                <option value="10 | desiccant" >Десикант</option>
                                <option value="11 | regulators" >Растежен регулатор</option>
                            </select>
                            {{--{!! Form::select('typeId',--}}
                                {{--array('' => 'Избери!',--}}
                                    {{--1 => 'Фунгицид',--}}
                                    {{--2 => 'Инсектицид',--}}
                                    {{--3 => 'Акарицид',--}}
                                    {{--4 => 'Нематоцид',--}}
                                    {{--5 => 'Родентицид',--}}
                                    {{--6 => 'Лимацид',--}}
                                    {{--7 => 'Репелент',--}}
                                    {{--8 => 'Феромон',--}}
                                    {{--9 => 'Хербицид',--}}
                                    {{--10 => 'Десикант',--}}
                                    {{--11 => 'Растежни регулатори',--}}
                                {{--),--}}
                                {{--null,['id' => 'typeId', 'class'=>'form-control'])--}}
                            {{--!!}--}}
                        </div>
                        <div class="col-lg-4">
                            <label for="isActive" class="control-label">АКТИВНА</label><br/>
                            {{ Form::label('isActive', 'ДА') }}
                            {{ Form::radio('isActive', 0, true ) }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            {{ Form::label('isActive', 'HE') }}
                            {{ Form::radio('isActive', 1 ) }}
                        </div>
                    </div>

                    <hr style="border: 0.5px solid black"/>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <label for="note" class="control-label">Допълнителни бележки</label>
                            {!! Form::textarea('note', null, ['class'=>'form-control', 'id'=>'note' ]) !!}
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