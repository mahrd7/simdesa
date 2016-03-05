@extends('admin')

@section('page_title', 'Tambah Penduduk Baru')

@section('content')

{!! Form::model($penduduk = new App\Penduduk ,['url' => 'penduduk', 'files' => true, 'class' => 'form-horizontal']) !!}
 	@include('penduduk._form', ['submitButtonText' => 'Tambah Penduduk'])
{!! Form::close() !!}

@endsection
