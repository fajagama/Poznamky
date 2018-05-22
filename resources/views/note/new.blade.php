@extends('layouts.main')

@section('title', 'Nová poznámka')   

@section('content')
    <h1>Nová poznámka</h1>

    {!! Form::open(['url' => 'new', 'method' => 'post']) !!}
		@include('note.form')
	{!! Form::close() !!}

@endsection