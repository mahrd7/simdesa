@extends('admin')

@section('page_title', 'Tambah Pemilik Tanah Baru')

@section('content')

{!! Form::open(['route' => 'peraturan.store', 'files' => true, 'class' => 'form-horizontal'])!!}
 	@include('peraturan._form', ['submitButtonText' => 'Tambah Aparat Desa'])
{!! Form::close() !!}

@endsection
