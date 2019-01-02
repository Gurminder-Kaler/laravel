@extends('layouts.admin')
@section('content')


    <h1>Edit User</h1>

    {!! Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update', $user->id],'files'=>true]) !!}
    {{ csrf_field() }}
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            <img src="{{$user->photo ? $user->photo->file :'http://placehold.it/400x400'}}" class="img img-responsive img-rounded" alt="NO photo to edit">
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('name','Name :') !!}
                    {!! Form::text('name', null,['class'=>'form-control']) !!}
                    <br>
                    {!! Form::label('email','Email :') !!}
                    {!! Form::email('email', null,['class'=>'form-control']) !!}
                    <br>
                    {!! Form::label('password','Password :') !!}
                    {!! Form::password('password',['class'=>'form-control']) !!}
                    <br>
                    {!! Form::label('role_id','Role : ') !!}
                    {!! Form::select('role_id',$roles, null,['class'=>'form-control']) !!}
                    <br>
                    {!! Form::label('is_active','Status : ') !!}
                    {!! Form::select('is_active',array(1 =>'Active',0=>'Non Active'),null,['class'=>'form-control']) !!}
                    <br>
                    {!! Form::label('photo_id','Upload File : ') !!}
                    {!! Form::file('photo_id',['class'=>'form-control' ]) !!}


                </div>
                {{--<input placeholder="Enter title here" type="text" class="form-control" name="title">--}}
                {{--<input placeholder="Enter content here" type="text" class="form-control" name="content">--}}

                {{--<button type="submit"  name="submit" class="btn btn-success">Submit</button>--}}
            </div>
            <div class="col-md-2">

            </div>

        </div>
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">

                {!! Form::submit('Done Editing',['class'=>'btn btn-block btn-primary' ]) !!}
            </div>
            <div class="col-md-4">
            </div>

        </div>
        <br>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-6">
                {{--@if(count($errors)>0)--}}
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            <div class="col-md-4"></div>
        </div>


    </div>

    {!! Form::close() !!}

@endsection