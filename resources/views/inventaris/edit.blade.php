@extends('admin')

@section('page_title', 'Edit Data Penduduk')

@section('content')

	{!! Form::model($inventaris , ['method' => 'PATCH', 'action' => ['InventarisController@update' , $inventaris->id], 'files' => true, 'class' => 'form-horizontal']) !!}
		@include('inventaris._form', ['submitButtonText' => 'Perbarui Data Tanah'])
	{!! Form::close() !!}

@endsection