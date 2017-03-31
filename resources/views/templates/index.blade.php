@extends('layouts.cultures')

@section('content')
    @foreach($practices as $practice)
    @endforeach
   <?php
       foreach($groups as $k=>$v){
           if($k == $practice->group_id){
           ?>
           <div class="col-lg-12">
               <div class="bs-component">
                   <div class="panel panel-primary">
                       <div class="panel-heading">
                           <h3 class="panel-title">{{$v}}</h3>
                       </div>
                       <div class="panel-body">
                           @foreach($cultures as $culture)
                               @if($culture->id == $practice->culture_id)
                                   <div class="col-lg-12" style="background-color: gainsboro; margin-bottom: 10px">
                                       <h4>{{$culture->name}}</h4>
                                   </div>
                                   @foreach($practices as $pest)
                                       @if($pest->group_id == $k && $pest->culture_id)
                                           <div class="row">
                                               <div class="col-lg-5"><p>{{$pest->name}}</p></div>

                                               <div class="col-lg-4"><p>{{$pest->link_id}}</p></div>
                                               <div class="col-lg-3">
                                                   <a href="{!!URL::to('/template-practices/edit/'.$pest->id)!!}"
                                                      class="fa fa-edit btn btn-xs btn-primary">
                                                      &nbsp;Редактирай!
                                                   </a>
                                                   <a href="{!!URL::to('/culture/edit/'.$pest->id)!!}"
                                                      class="fa fa-edit btn btn-xs btn-success">
                                                       &nbsp;Добави ПИВ
                                                   </a>
                                               </div>
                                           </div>
                                       @endif
                                   @endforeach
                               @endif
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