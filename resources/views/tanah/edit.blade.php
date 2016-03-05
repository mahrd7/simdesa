@extends('admin')

@section('page_title', 'Edit Data Penduduk')

@section('content')

	{!! Form::model($penduduk , ['method' => 'PATCH', 'action' => ['TanahController@update' , $penduduk->id], 'files' => true, 'class' => 'form-horizontal']) !!}
		@include('penduduk._form', ['submitButtonText' => 'Perbarui Data Tanah'])
	{!! Form::close() !!}

@endsection