@extends('parallel.layout')

@section('content')
    <a href="{!!URL::to('/parallel')!!}" class="fa fa-edit btn btn-primary">
        &nbsp;АКТИВНИ!
    </a>
    <hr/>
    <table  id="exampleTable" class="table" >
        <thead>
        <tr >
            <th>ID</th>
            <th>Притежател на Разрешението</th>
            <th>Продукт</th>
            <th>Вид</th>
            {{--<th>А. вещество</th>--}}
            <th>Референтен продукт</th>
            <th>Производител</th>
            <th>№ на удостов.</th>
            <th>№ за паралелна търговия</th>
            <th>Валидност</th>
            {{--<th>бележки</th>--}}
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($parallels as $parallel)
            <tr>
                <td>{{$parallel->id}}</td>
                <td>{{$parallel -> owner}}</td>
                <td>{{$parallel -> product}}</td>
                <td>{{$parallel -> typeId}}</td>
                {{--<td>{{$parallel -> substances}}</td>--}}
                <td>
                    <a href="/">{{$parallel -> referenceProduct}}</a>
                </td>
                <td>{{$parallel -> manufacturer}}</td>
                <td>{{$parallel -> validReferenceProduct}}</td>
                <td>{{$parallel -> parallelTrade}}</td>
                <td>{{$parallel -> validParallelTrade}}</td>
                {{--<td>{{$parallel -> note}}</td>--}}
                <td>
                    <a href="{!!URL::to('/parallel/edit/'.$parallel->id)!!}" class="fa fa-edit btn btn-primary">
                        &nbsp;EDIT!
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{--@endforeach--}}
@endsection