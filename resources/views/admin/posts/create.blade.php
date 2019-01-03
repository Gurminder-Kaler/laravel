@extends('layouts.admin')
@section('content')
    <h1>Create Posts</h1>

{!! Form::open(['method'=>'POST','action'=>'AdminPostsController@store','files'=>true]) !!}
        {{ csrf_field() }}
       <div class="container">
           <div class="row">
               <div class="col-md-2"></div>
               <div class="col-md-8">
                   <div class="form-group">
                       {!! Form::label('title','Title') !!}
                       {!! Form::text('title', null,['class'=>'form-control']) !!}
                       <br>
                       {!! Form::label('category_id','Category') !!}
                       {!! Form::select('category_id',[''=>'Choose Categories']+$categories,null,['class'=>'form-control']) !!}
                       <br>
                       {!! Form::label('photo_id','Upload Photo') !!}
                       {!! Form::file('photo_id',null, ['class'=>'form-control']) !!}
                       <br>
                       {!! Form::label('body','Description') !!}
                       {!! Form::textarea('body', null,['class'=>'form-control','rows'=>'3']) !!}


                   </div>
               </div>
               <div class="col-md-2">
               </div>
           </div>
           <div class="row">
               <div class="col-md-4"></div>

               <div class="col-md-4">
                   {!! Form::submit('Create Post',['class'=>'btn btn-block btn-success' ]) !!}
               </div>

               <div class="col-md-4">
                                  {{--{!! Form::submit('Create Post',['class'=>'btn btn-block btn-success' ]) !!}--}}
                              </div>

           </div>
           <div class="row">
               <div class="col-md-3"></div>
               <div class="col-md-6">
                   {{--@if(count($errors)>0)--}}
                   @if(count($errors->all()) > 0)
                       <div class="alert alert-danger">
                           <ul>
                               @foreach($errors->all() as $error)
                                   <li>{{$error}}</li>
                               @endforeach
                           </ul>
                       </div>
                   @endif</div>
               <div class="col-md-3"></div>
               </div>


        </div>

    {!! Form::close() !!}
@endsection