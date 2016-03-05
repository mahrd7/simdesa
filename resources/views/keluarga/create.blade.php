@extends('admin')

@section('page_title', 'Tambah Penduduk Baru')

@section('content')

{!! Form::open(['route' => 'penduduk.store', 'files' => true, 'class' => 'form-horizontal'])!!}
 	@include('penduduk._form', ['submitButtonText' => 'Tambah Penduduk'])
{!! Form::close() !!}

@endsection
