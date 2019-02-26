@extends('crops.layout')

@section('content')
    <div class="container">
        <div class="row">
            <h3>{{$crops->name}} - {{$crops->latin_name}}</h3>
            <p>{{$crops->cropDescription}}</p>
        </div>

        <div class="row">
            <h4 style="background-color: #c0a16b; color: white; height: 50px; text-align: center">Нематоциди</h4>
            <table class="table">
                @foreach($acaricides[0]['nematocides'] as $acaricide)
                    {{--@if($culture->group_id == 1)--}}
                    <tr>
                        <td>
                            <?php
                            if($acaricide['isActive'] == 0) {
                            ?>
                            <span class="bold green">ДА</span>
                            <?php
                            } else {
                            ?>
                            <span class="bold red">НЕ</span>
                            <?php
                            }
                            ?>
                            {{--                                {{$acaricide['isActive']}}--}}
                        </td>
                        {{--<td>{{$acaricide['id']}}</td>--}}
                        <td>
                            <a href="{!!URL::to('/nematocides/'.$acaricide['productId'])!!}">{{$acaricide['product']}}</a>
                            - {{$acaricide['productId']}}
                        </td>
                        <td class="dose">{{$acaricide['dose']}}</td>
                        <?php
                        if(strlen($acaricide['note'])  > 0) {
                        ?>
                        <td>
                            <span class="bold underline">{!! $acaricide['minimumUse'] !!} </span><br/>
                            <span class="bold">{!! $acaricide['note'] !!} </span><br/>
                            {!! $acaricide['disease'] !!}
                            <?php
                            if(strlen($acaricide['afterNote']) > 0) {
                            ?>
                            <br/><span class="bold">{!! $acaricide['afterNote'] !!}</span>
                            <?php
                            }
                            ?>
                        </td>
                        <?php
                        } else {
                        ?>
                        <td>
                            <span class="bold underline">{!! $acaricide['minimumUse'] !!} </span><br/>
                            {!! $acaricide['disease'] !!}
                            <?php
                            if(strlen($acaricide['afterNote']) > 0) {
                            ?>
                            <br/><span class="bold">{!! $acaricide['afterNote'] !!}</span>
                            <?php
                            }
                            ?>
                        </td>
                        <?php
                        }
                        ?>

                        <td >
                            <style>.ellipsis { text-overflow: ellipsis; }</style>
                            <p class="overflow ellipsis">{{$acaricide['quarantine']}}</p>
                        </td>
                        <td class="category">{{$acaricide['category']}}</td>
                        <td>
                            <a href="{!!URL::to('/crops/nematocides_edit/'.$acaricide['id'].'/'.$crops->id)!!}" class="fa fa-edit btn btn-primary">
                                &nbsp;Edit!
                            </a>
                        </td>
                    </tr>
                    {{--@endif--}}
                @endforeach
            </table>
        </div>

        <div class="row">
            <h4 style="background-color: darkred; color: white; height: 50px; text-align: center">Акарициди</h4>
            <table class="table">
                @foreach($acaricides[0]['acaricides'] as $acaricide)
                    {{--@if($culture->group_id == 1)--}}
                        <tr>
                            <td>
                                <?php
                                    if($acaricide['isActive'] == 0) {
                                        ?>
                                            <span class="bold green">ДА</span>
                                        <?php
                                    } else {
                                        ?>
                                            <span class="bold red">НЕ</span>
                                        <?php
                                    }
                                ?>
{{--                                {{$acaricide['isActive']}}--}}
                            </td>
                            {{--<td>{{$acaricide['id']}}</td>--}}
                            <td>
                                <a href="{!!URL::to('/acaricides/'.$acaricide['productId'])!!}">{{$acaricide['product']}}</a>
                                - {{$acaricide['productId']}}
                            </td>
                            <td class="dose">{{$acaricide['dose']}}</td>
                            <?php
                                if(strlen($acaricide['note'])  > 0) {
                                    ?>
                                        <td>
                                            <span class="bold underline">{!! $acaricide['minimumUse'] !!} </span><br/>
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
                                            <span class="bold underline">{!! $acaricide['minimumUse'] !!} </span><br/>
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

                            <td >
                                <style>.ellipsis { text-overflow: ellipsis; }</style>
                                <p class="overflow ellipsis">{{$acaricide['quarantine']}}</p>
                            </td>
                            <td class="category">{{$acaricide['category']}}</td>
                            <td>
                                <a href="{!!URL::to('/crops/acaricides_edit/'.$acaricide['id'].'/'.$crops->id)!!}" class="fa fa-edit btn btn-primary">
                                    &nbsp;Edit!
                                </a>
                            </td>
                        </tr>
                    {{--@endif--}}
                @endforeach
            </table>
        </div>
    </div>
@endsection