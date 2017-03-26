@extends('layouts.form')

@section('content')
    <div class="container">
        <div class="row">
            <a href="/">Начало</a>
            <a href="/template-practices">ТЕМПЛЕТ-НАЧАЛО</a>

        </div>
        <a href="culture/create">ДОБАВИ КУЛТУРА</a>

        @foreach($cultures as $culture)
            <ul>
                <li>
                        <?php
                        if($culture->group_id == 1){
                            $group = 'Зърненожитни';
                        }
                        if($culture->group_id == 2){
                            $group = 'Бобови';
                        }
                        if($culture->group_id == 3){
                            $group = 'Технически';
                        }
                        if($culture->group_id == 4){
                            $group = 'Зеленчуци';
                        }
                        if($culture->group_id == 5){
                            $group = 'Зеленчуци в съоражения';
                        }
                        if($culture->group_id == 6){
                            $group = 'Овощни';
                        }
                        if($culture->group_id == 7){
                            $group = 'Ягодоплодни';
                        }
                        if($culture->group_id == 8){
                            $group = 'Лоза';
                        }
                        ?>
                    <div class="col-lg-3">{{$group}}</div>
                    <div class="col-lg-3">{{$culture -> name}}</div>
                    <div class="col-lg-3">{{$culture -> latin_name}}</div>
                    <a href="{!!URL::to('/culture/edit/'.$culture->id)!!}" class="fa fa-edit btn btn-primary">
                        &nbsp;Редактирай!
                    </a>
                </li>
            </ul>
        @endforeach
    </div>
@endsection