@extends('admin')

@section('page_title', 'Tambah Pemilik Tanah Baru')

@section('content')

{!! Form::open(['route' => 'aparat.store', 'files' => true, 'class' => 'form-horizontal'])!!}
 	@include('aparat._form', ['submitButtonText' => 'Tambah Aparat Desa'])
{!! Form::close() !!}

@endsection
