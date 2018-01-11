@extends('layouts.cultures')
<?php
//echo '<pre>',print_r($json, true),'</pre>';
?>
@section('content')
    @foreach($practices as $practice)
    @endforeach
   <?php
       foreach($groups as $k=>$v){
           if($k == $practice->groupId){
           ?>
           <div class="col-lg-12">
               <div class="bs-component">
                   <div class="panel panel-primary">
                       <div class="panel-heading">
                           <h3 class="panel-title">{{$v}}</h3>
                       </div>
                       <div class="panel-body">
                           @foreach($cultures as $culture)
                               <div class="col-lg-12" style="background-color: gainsboro; margin-bottom: 10px">
                                    <h4>{{$culture->name}}</h4>
                               </div>
                               @foreach($practices as $pest)
                                   @if($culture->id === $pest->cultureId)
                                           @if($pest->groupId == $k && $pest->cultureId)
                                               <div class="row">
                                                   {{--<div class=""><p></p></div>--}}
                                                   <div class="col-lg-3"><p>{{$pest->id}} {{$pest->name}}</p></div>

                                                   <div class="col-lg-3"><p>{{$pest->linkId}}</p></div>
                                                   <div class="col-lg-3">
                                                       @foreach($pest->images as $image)
                                                        <p>{{$image->bgName}}</p>
                                                       @endforeach
                                                   </div>
                                                   <div class="col-lg-3">
                                                       <a href="{!!URL::to('/template-practices/edit/'.$pest->id)!!}"
                                                          class="fa fa-edit btn btn-xs btn-primary">
                                                          &nbsp;Редактирай!
                                                       </a>
                                                       <a href="{!!URL::to('/template-practices/add_images/'.$pest->id)!!}"
                                                          class="fa fa-edit btn btn-xs btn-success">
                                                           &nbsp;Добави Снимка
                                                       </a>
                                                   </div>
                                               </div>
                                           @endif
                                    @endif
                               @endforeach

                               {{--@endif--}}
                           @endforeach
                       </div>
                   </div>
               </div>
            </div>
            <?php
           }
       }
   ?>

@endsection