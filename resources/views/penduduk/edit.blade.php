@extends('admin')

@section('page_title', 'Edit Data Penduduk')

@section('content')

	{!! Form::model($penduduk , ['method' => 'PATCH', 'action' => ['PendudukController@update' , $penduduk->id], 'files' => true, 'class' => 'form-horizontal']) !!}
		@include('penduduk._form', ['submitButtonText' => 'Perbarui Data Penduduk'])
	{!! Form::close() !!}

@endsection
