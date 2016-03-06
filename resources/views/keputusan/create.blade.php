@extends('admin')

@section('page_title', 'Tambah Pemilik Tanah Baru')

@section('content')

{!! Form::open(['route' => 'keputusan.store', 'files' => true, 'class' => 'form-horizontal'])!!}
 	@include('keputusan._form', ['submitButtonText' => 'Tambah Aparat Desa'])
{!! Form::close() !!}

@endsection
