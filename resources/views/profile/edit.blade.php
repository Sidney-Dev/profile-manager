@extends('layouts.logged')

@section('content')
<div class="container">
    
    <h1>Update your profile information</h1>

    <div class="row">
        @include('includes.form_error')
    </div>

    {!! Form::model($user, ['method'=>'PUT', 'action'=> ['UserController@update', $user->id],'files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::text('email', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('file', 'Profile Image:') !!}
            {!! Form::file('image', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('phone', 'Phone:') !!}
            {!! Form::text('phone', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::submit('Save', ['class'=>'refresh-button btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}
    
</div>
@endsection
