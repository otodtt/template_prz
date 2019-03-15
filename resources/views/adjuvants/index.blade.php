@extends('adjuvants.layout')

@section('content')
    <table  id="exampleTable" class="table" >
        <thead>
            <tr >
                <th>Актив</th>
                <th>ID</th>
                <th>Търговско име</th>
                <th>Притежател</th>
                <th>Тип ф-я</th>
                <th>Начин на действие</th>
                <th>Култури</th>
                <th>Доза на приложение</th>
                <th>Употреба с други</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach($adjuvants as $parallel)
            <tr>
                @if($parallel->isActive === 0)
                    <td style="color: green">ДА</td>
                @else
                    <td style="color: red">НЕ</td>
                @endif
                <td>{{$parallel->id}}</td>
                <td>{!! $parallel -> name !!}</td>
                <td>{{$parallel -> owner}}</td>
                <td>{{$parallel -> type}}</td>
                <td>{!! $parallel -> action !!}</td>
                <td>{!! $parallel -> crops !!}</td>
                <td>{!! $parallel -> dose !!}</td>
                <td>
                    {!! $parallel -> application !!}
                    <br/>
                    <span style="font-style: italic; font-weight: bolder;" >{!! $parallel -> noteApplication !!}</span>
                </td>
                <td>
                    <a href="{!!URL::to('/adjuvants/edit/'.$parallel->id)!!}" class="fa fa-edit btn btn-primary">
                        &nbsp;EDIT!
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{--@endforeach--}}
@endsection