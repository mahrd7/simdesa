@extends('admin')

@section('page_title', 'Edit Data Penduduk')

@section('content')

	{!! Form::model($aparat , ['method' => 'PATCH', 'action' => ['TanahController@update' , $aparat->id], 'files' => true, 'class' => 'form-horizontal']) !!}
		@include('aparat._form', ['submitButtonText' => 'Perbarui Data Tanah'])
	{!! Form::close() !!}

@endsection