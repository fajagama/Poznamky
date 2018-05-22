@extends('layouts.main')

@section('title', 'Editace poznámky')   

@section('content')
    <h1>Editace poznámky</h1>

    {!! Form::open(['url' => 'edit', 'method' => 'put']) !!}
    	{{ Form::hidden('id', $note->id) }}
		@include('note.form')
	{!! Form::close() !!}

@endsection