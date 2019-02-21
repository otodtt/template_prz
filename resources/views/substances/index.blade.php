@extends('substances.layout')

@section('content')
    <table  id="example" class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>ИМЕ НА А. ВЕЩЕСТВО</th>
            {{--<th>С други</th>--}}
            <th>Брой ПРЗ</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php $n = 1; ?>
        @foreach($substances as $subs)
            <tr>
                <td>{{$subs['id']}}</td>
                <td>{{$subs['name']}}</td>
                {{--<td>{{$subs['moreUses']}}</td>--}}
                <td>{{ count($subs['products']) }}</td>
                <td>
                    <a href="{!!URL::to('/substances/'.$subs['id'])!!}" class="fa fa-edit btn btn-primary">
                        &nbsp;ВИЖ!
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{--@endforeach--}}
@endsection