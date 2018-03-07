@extends('acaricides.layout')

@section('content')
    {{--@foreach($scaricides as $scar)--}}
        <table  id="example" class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ИМЕ ПРЗ</th>
                    <th>ФИРМА - ID</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $n = 1; ?>
                @foreach($acaricides as $acar)
                    <tr>
                        <td>{{$acar->id}}</td>
                        <td>{{$acar -> name}}</td>
                        <td>{{$acar -> firmName}} - {{$acar -> manufacturersId}}</td>
                        <td>
                            <a href="{!!URL::to('/acaricides/'.$acar->id)!!}" class="fa fa-edit btn btn-primary">
                                &nbsp;ВИЖ!
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    {{--@endforeach--}}
@endsection