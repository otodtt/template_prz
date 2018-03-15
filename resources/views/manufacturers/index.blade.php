@extends('manufacturers.layout')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th >№ </th>
                <th >ID</th>
                <th >Име</th>
                <th >Страна</th>
                <th >Бр. Пр</th>
                <th ></th>
            </tr>
        </thead>
        <tbody>
            <?php $n = 1; ?>
            @foreach($firms as $firm)
                <tr>
                    <td>{!! $n++ !!}</td>
                    <td><span class="bold">{{$firm['id']}}</span></td>
                    <td>{{$firm['name']}}</td>
                    <td>{{$firm['country']}}</td>
                    <td>{{count($firm['pesticides'])}}</td>
                    <td>
                        <a href="{!!URL::to('/manufacturers/'.$firm['id'])!!}" class="fa fa-binoculars btn btn-primary my_btn">
                            &nbsp;Виж!
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection