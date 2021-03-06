@extends('admin')

@section('page_title', 'Data Table')

@section('content')

<div class="row">
<div class="col-md-12">
<div class="box">
<div class="box-header">
  <h3 class="box-title">Data Table With Full Features</h3>
</div><!-- /.box-header -->
<div class="box-body">
  <table id="datatable" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Nama</th>
        <th>L/P</th>
        <th>TTL</th>
        <th>NIK</th>
        <th>Kedudukan</th>
        <th>Pekerjaan</th>
        <th>Alamat</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($penduduks as $penduduk)
      <tr>
        <td><a href="/penduduk/{{ $penduduk->id }}/edit">{{  $penduduk->nama }}</a></td>
        <td>{{ $penduduk->jk }}</td>
        <td>{{ $penduduk->tempat_lahir }}, {{  $penduduk->tanggal_lahir }}</td>
        <td>{{ $penduduk->nik }}</td>
        <td>{{ $penduduk->hubungan }}</td>
        <td>{{ $penduduk->pekerjaan }}</td>
        <td>{{ $penduduk->dusun }} RT. {{ $penduduk->rt }} RW. {{ $penduduk->rw }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div><!-- /.box-body -->
</div><!-- /.box -->

  <a href="/penduduk/create" class="btn btn-primary">Tambah Penduduk</a>
  <a href="/penduduk/xlsx" class="btn btn-primary">Export to Excel</a>


</div>
</div>

@endsection


@section('style')
@endsection


@section('script')
<script>
  $(function () {
    $("#datatable").DataTable();
  });
</script>
@endsection