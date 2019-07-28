@extends('layouts.logged')

@section('content')
<div class="container">
               
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif
    <button class="btn btn-primary mb-3 mt-3"><a class="cl-white" href="{{ route('contact.create') }}">Add Contact</a></button>
    <!-- LIST OF NAMES -->
    <contact-component />
    <!-- END OF LIST OF NAMES -->
</div>
@endsection
