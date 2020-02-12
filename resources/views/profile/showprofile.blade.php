@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Edit Profile</h1>

    <div class="row">

        <div class="col-sm-9">
            {!! Form::model($user, ['method'=>'PATCH', 'action'=> ['UsersProfileController@update', $user->id],'files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control'])!!}
            </div>


            <div class="form-group">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('password', 'Password:') !!}
                {!! Form::password('password', ['class'=>'form-control'])!!}
            </div>


            <div class="form-group">
                {!! Form::submit('Update profile', ['class'=>'btn btn-primary col-sm-6']) !!}
            </div>

            {!! Form::close() !!}


        </div>


    </div>

    <div class="row">
        @include('includes.form_error')
    </div>
  </div>
@stop
