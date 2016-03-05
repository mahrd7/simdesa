@extends('admin')

@section('page_title', 'Tambah Pemilik Tanah Baru')

@section('content')

{!! Form::open(['route' => 'tanah.store', 'files' => true, 'class' => 'form-horizontal'])!!}
 	@include('tanah._form', ['submitButtonText' => 'Tambah Pemilik Tanah'])
{!! Form::close() !!}

@endsection
