@extends('admin')

@section('page_title', 'Edit Data Penduduk')

@section('content')

	{!! Form::model($peraturan , ['method' => 'PATCH', 'action' => ['PeraturanController@update' , $peraturan->id], 'files' => true, 'class' => 'form-horizontal']) !!}
		@include('peraturan._form', ['submitButtonText' => 'Perbarui Data Tanah'])
	{!! Form::close() !!}

@endsection