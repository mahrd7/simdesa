@extends('admin')

@section('page_title', 'Tambah Pemilik Tanah Baru')

@section('content')

{!! Form::open(['route' => 'inventaris.store', 'files' => true, 'class' => 'form-horizontal'])!!}
 	@include('inventaris._form', ['submitButtonText' => 'Tambah Aparat Desa'])
{!! Form::close() !!}

@endsection
