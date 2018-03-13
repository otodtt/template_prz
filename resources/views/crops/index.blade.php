@extends('crops.layout')

@section('content')
    <div class="container">
        <div class="row">
           <h4>Зърненожитни</h4>
           <table class="table">
               @foreach($cultures as $culture)
                    @if($culture->group_id == 1)
                        <tr>
                            <td>{{$culture->id}}</td>
                            <td>{{$culture ->name}}</td>
                            <td>{{$culture ->latin_name}}</td>
                            <td>
                                <a href="{!!URL::to('/crops/edit/'.$culture->id)!!}" class="fa fa-edit btn btn-primary">
                                    &nbsp;Редактирай!
                                </a>
                            </td>
                            <td>
                                <a href="{!!URL::to('/crops/show/'.$culture->id)!!}" class="fa fa-edit btn btn-success">
                                    &nbsp;ВИЖ КУЛТУРАТА!
                                </a>
                            </td>
                        </tr>
                    @endif
                @endforeach
           </table>
        </div>
        <div class="row">
            <h4>Бобови</h4>
            <table class="table">
                @foreach($cultures as $culture)
                    @if($culture->group_id == 2)
                        <tr>
                            <td>{{$culture->id}}</td>
                            <td>{{$culture ->name}}</td>
                            <td>{{$culture ->latin_name}}</td>
                            <td>
                                <a href="{!!URL::to('/crops/edit/'.$culture->id)!!}" class="fa fa-edit btn btn-primary">
                                    &nbsp;Редактирай!
                                </a>
                            </td>
                            <td>
                                <a href="{!!URL::to('/crops/show/'.$culture->id)!!}" class="fa fa-edit btn btn-success">
                                    &nbsp;ВИЖ КУЛТУРАТА!
                                </a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </table>
        </div>
        <div class="row">
            <h4>Технически</h4>
            <table class="table">
                @foreach($cultures as $culture)
                    @if($culture->group_id == 3)
                        <tr>
                            <td>{{$culture->id}}</td>
                            <td>{{$culture ->name}}</td>
                            <td>{{$culture ->latin_name}}</td>
                            <td>
                                <a href="{!!URL::to('/crops/edit/'.$culture->id)!!}" class="fa fa-edit btn btn-primary">
                                    &nbsp;Редактирай!
                                </a>
                            </td>
                            <td>
                                <a href="{!!URL::to('/crops/show/'.$culture->id)!!}" class="fa fa-edit btn btn-success">
                                    &nbsp;ВИЖ КУЛТУРАТА!
                                </a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </table>
        </div>
        <div class="row">
            <h4>Зеленчуци</h4>
            <table class="table">
                @foreach($cultures as $culture)
                    @if($culture->group_id == 4)
                        <tr>
                            <td>{{$culture->id}}</td>
                            <td>{{$culture ->name}}</td>
                            <td>{{$culture ->latin_name}}</td>
                            <td>
                                <a href="{!!URL::to('/crops/edit/'.$culture->id)!!}" class="fa fa-edit btn btn-primary">
                                    &nbsp;Редактирай!
                                </a>
                            </td>
                            <td>
                                <a href="{!!URL::to('/crops/show/'.$culture->id)!!}" class="fa fa-edit btn btn-success">
                                    &nbsp;ВИЖ КУЛТУРАТА!
                                </a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </table>
        </div>
        <div class="row">
            <h4>Листни зеленчуци</h4>
            <table class="table">
                @foreach($cultures as $culture)
                    @if($culture->group_id == 5)
                        <tr>
                            <td>{{$culture->id}}</td>
                            <td>{{$culture ->name}}</td>
                            <td>{{$culture ->latin_name}}</td>
                            <td>
                                <a href="{!!URL::to('/crops/edit/'.$culture->id)!!}" class="fa fa-edit btn btn-primary">
                                    &nbsp;Редактирай!
                                </a>
                            </td>
                            <td>
                                <a href="{!!URL::to('/crops/show/'.$culture->id)!!}" class="fa fa-edit btn btn-success">
                                    &nbsp;ВИЖ КУЛТУРАТА!
                                </a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </table>
        </div>
        <div class="row">
            <h4>Зелеви култури</h4>
            <table class="table">
                @foreach($cultures as $culture)
                    @if($culture->group_id == 6)
                        <tr>
                            <td>{{$culture->id}}</td>
                            <td>{{$culture ->name}}</td>
                            <td>{{$culture ->latin_name}}</td>
                            <td>
                                <a href="{!!URL::to('/crops/edit/'.$culture->id)!!}" class="fa fa-edit btn btn-primary">
                                    &nbsp;Редактирай!
                                </a>
                            </td>
                            <td>
                                <a href="{!!URL::to('/crops/show/'.$culture->id)!!}" class="fa fa-edit btn btn-success">
                                    &nbsp;ВИЖ КУЛТУРАТА!
                                </a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </table>
        </div>
        <div class="row">
            <h4>Тиквови култури</h4>
            <table class="table">
                @foreach($cultures as $culture)
                    @if($culture->group_id == 7)
                        <tr>
                            <td>{{$culture->id}}</td>
                            <td>{{$culture ->name}}</td>
                            <td>{{$culture ->latin_name}}</td>
                            <td>
                                <a href="{!!URL::to('/crops/edit/'.$culture->id)!!}" class="fa fa-edit btn btn-primary">
                                    &nbsp;Редактирай!
                                </a>
                            </td>
                            <td>
                                <a href="{!!URL::to('/crops/show/'.$culture->id)!!}" class="fa fa-edit btn btn-success">
                                    &nbsp;ВИЖ КУЛТУРАТА!
                                </a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </table>
        </div>
        <div class="row">
            <h4>Лукови култури</h4>
            <table class="table">
                @foreach($cultures as $culture)
                    @if($culture->group_id == 8)
                        <tr>
                            <td>{{$culture->id}}</td>
                            <td>{{$culture ->name}}</td>
                            <td>{{$culture ->latin_name}}</td>
                            <td>
                                <a href="{!!URL::to('/crops/edit/'.$culture->id)!!}" class="fa fa-edit btn btn-primary">
                                    &nbsp;Редактирай!
                                </a>
                            </td>
                            <td>
                                <a href="{!!URL::to('/crops/show/'.$culture->id)!!}" class="fa fa-edit btn btn-success">
                                    &nbsp;ВИЖ КУЛТУРАТА!
                                </a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </table>
        </div>
        <div class="row">
            <h4>Овощни</h4>
            <table class="table">
                @foreach($cultures as $culture)
                    @if($culture->group_id == 9)
                        <tr>
                            <td>{{$culture->id}}</td>
                            <td>{{$culture ->name}}</td>
                            <td>{{$culture ->latin_name}}</td>
                            <td>
                                <a href="{!!URL::to('/crops/edit/'.$culture->id)!!}" class="fa fa-edit btn btn-primary">
                                    &nbsp;Редактирай!
                                </a>
                            </td>
                            <td>
                                <a href="{!!URL::to('/crops/show/'.$culture->id)!!}" class="fa fa-edit btn btn-success">
                                    &nbsp;ВИЖ КУЛТУРАТА!
                                </a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </table>
        </div>
        <div class="row">
            <h4>Ягодоплодни</h4>
            <table class="table">
                @foreach($cultures as $culture)
                    @if($culture->group_id == 10)
                        <tr>
                            <td>{{$culture->id}}</td>
                            <td>{{$culture ->name}}</td>
                            <td>{{$culture ->latin_name}}</td>
                            <td>
                                <a href="{!!URL::to('/crops/edit/'.$culture->id)!!}" class="fa fa-edit btn btn-primary">
                                    &nbsp;Редактирай!
                                </a>
                            </td>
                            <td>
                                <a href="{!!URL::to('/crops/show/'.$culture->id)!!}" class="fa fa-edit btn btn-success">
                                    &nbsp;ВИЖ КУЛТУРАТА!
                                </a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </table>
        </div>
        <div class="row">
            <h4>Лозя</h4>
            <table class="table">
                @foreach($cultures as $culture)
                    @if($culture->group_id == 11)
                        <tr>
                            <td>{{$culture->id}}</td>
                            <td>{{$culture ->name}}</td>
                            <td>{{$culture ->latin_name}}</td>
                            <td>
                                <a href="{!!URL::to('/crops/edit/'.$culture->id)!!}" class="fa fa-edit btn btn-primary">
                                    &nbsp;Редактирай!
                                </a>
                            </td>
                            <td>
                                <a href="{!!URL::to('/crops/show/'.$culture->id)!!}" class="fa fa-edit btn btn-success">
                                    &nbsp;ВИЖ КУЛТУРАТА!
                                </a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </table>
        </div>
        <div class="row">
            <h4>Етерично-Маслени</h4>
            <table class="table">
                @foreach($cultures as $culture)
                    @if($culture->group_id == 12)
                        <tr>
                            <td>{{$culture->id}}</td>
                            <td>{{$culture ->name}}</td>
                            <td>{{$culture ->latin_name}}</td>
                            <td>
                                <a href="{!!URL::to('/crops/edit/'.$culture->id)!!}" class="fa fa-edit btn btn-primary">
                                    &nbsp;Редактирай!
                                </a>
                            </td>
                            <td>
                                <a href="{!!URL::to('/crops/show/'.$culture->id)!!}" class="fa fa-edit btn btn-success">
                                    &nbsp;ВИЖ КУЛТУРАТА!
                                </a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </table>
        </div>
        <div class="row">
            <h4>Украсни и Горски видове</h4>
            <table class="table">
                @foreach($cultures as $culture)
                    @if($culture->group_id == 13)
                        <tr>
                            <td>{{$culture->id}}</td>
                            <td>{{$culture ->name}}</td>
                            <td>{{$culture ->latin_name}}</td>
                            <td>
                                <a href="{!!URL::to('/crops/edit/'.$culture->id)!!}" class="fa fa-edit btn btn-primary">
                                    &nbsp;Редактирай!
                                </a>
                            </td>
                            <td>
                                <a href="{!!URL::to('/crops/show/'.$culture->id)!!}" class="fa fa-edit btn btn-success">
                                    &nbsp;ВИЖ КУЛТУРАТА!
                                </a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </table>
        </div>
        <div class="row">
            <h4>Цитросови</h4>
            <table class="table">
                @foreach($cultures as $culture)
                    @if($culture->group_id == 14)
                        <tr>
                            <td>{{$culture->id}}</td>
                            <td>{{$culture ->name}}</td>
                            <td>{{$culture ->latin_name}}</td>
                            <td>
                                <a href="{!!URL::to('/crops/edit/'.$culture->id)!!}" class="fa fa-edit btn btn-primary">
                                    &nbsp;Редактирай!
                                </a>
                            </td>
                            <td>
                                <a href="{!!URL::to('/crops/show/'.$culture->id)!!}" class="fa fa-edit btn btn-success">
                                    &nbsp;ВИЖ КУЛТУРАТА!
                                </a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </table>
        </div>
    </div>
@endsection