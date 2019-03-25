@extends('fungicides.layout')

@section('content')
    {{--@foreach($scaricides as $scar)--}}
        <table  id="example" class="table">
            <thead>
                <tr>
                    <th>N</th>
                    {{--<th>Активен</th>--}}
                    <th>ID</th>
                    <th>ИМЕ ПРЗ</th>
                    <th>ФИРМА - ID</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $n = 1; ?>
                @foreach($fungicides as $acar)
                    <tr>
                        <td><?php echo $n ++ ?></td>
                        {{--<td>--}}
                            {{--@if($acar -> isActive === 0)--}}
                                {{--<span style="color: green"> ДА</span>--}}
                            {{--@else--}}
                                {{--<span style="color: red"> НЕ</span>--}}
                            {{--@endif--}}
                        {{--</td>--}}
                        <td>{{$acar->id}}</td>
                        <td>{{$acar -> name}}</td>
                        <td>{{$acar -> firmName}} - {{$acar -> manufacturersId}}</td>
                        <td>
                            <a href="{!!URL::to('/fungicides/'.$acar->id)!!}" class="fa fa-edit btn btn-primary">
                                &nbsp;ВИЖ!
                            </a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    {{--@endforeach--}}
@endsection