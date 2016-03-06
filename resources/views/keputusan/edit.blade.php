@extends('admin')

@section('page_title', 'Edit Data Penduduk')

@section('content')

	{!! Form::model($keputusan , ['method' => 'PATCH', 'action' => ['KeputusanController@update' , $keputusan->id], 'files' => true, 'class' => 'form-horizontal']) !!}
		@include('keputusan._form', ['submitButtonText' => 'Perbarui Data Tanah'])
	{!! Form::close() !!}

@endsection