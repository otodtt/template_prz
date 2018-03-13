@extends('crops.layout')

@section('content')
    <div class="container">
        <div class="row">
            <a href="{!!URL::to('/crops/acaricides/'.$crops->id)!!}">Акарицид</a> -/-
            <a href="{!!URL::to('/crops/insecticide/'.$crops->id)!!}">Инсектицид</a> -/-
        </div>
        <hr/>
        <div class="row">
            <h3>{{$crops->name}} - {{$crops->latin_name}}</h3>
            <p>{{$crops->cropDescription}}</p>
        </div>

        <div class="row">
            <h4>Акарициди</h4>
            <table class="table">
                @foreach($acaricides[0]['acaricides'] as $acaricide)
                    {{--@if($culture->group_id == 1)--}}
                        <tr>
                            <td>{{$acaricide['id']}}</td>
                            <td>
                                <a href="{!!URL::to('/acaricides/'.$acaricide['productId'])!!}">{{$acaricide['product']}}</a>
                                - {{$acaricide['productId']}}
                            </td>
                            <td>{{$acaricide['dose']}}</td>
                            <?php
                                if(strlen($acaricide['note'])  > 0) {
                                    ?>
                                        <td>
                                            <span class="bold">{!! $acaricide['note'] !!} </span><br/>
                                            {!! $acaricide['disease'] !!}
                                            <?php
                                            if(strlen($acaricide['afterNote']) > 0) {
                                                ?>
                                                    <br/><span class="bold">{{$acaricide['afterNote']}}</span>
                                                <?php
                                            }
                                            ?>
                                        </td>
                                    <?php
                                } else {
                                    ?>
                                        <td>
                                            {!! $acaricide['disease'] !!}
                                            <?php
                                            if(strlen($acaricide['afterNote']) > 0) {
                                                ?>
                                                    <br/><span class="bold">{{$acaricide['afterNote']}}</span>
                                                <?php
                                            }
                                            ?>
                                        </td>
                                    <?php
                                }
                            ?>

                            <td>
                                <style>.ellipsis { text-overflow: ellipsis; }</style>
                                <p class="overflow ellipsis">{{$acaricide['quarantine']}}</p>
                            </td>
                            <td>{{$acaricide['category']}}</td>
                            <td>
                                <a href="{!!URL::to('/crops/acaricides_edit/'.$acaricide['id'].'/'.$crops->id)!!}" class="fa fa-edit btn btn-primary">
                                    &nbsp;Редактирай!
                                </a>
                            </td>
                        </tr>
                    {{--@endif--}}
                @endforeach
            </table>
        </div>
    </div>
@endsection