@extends('admin')

@section('page_title', 'Data Table')

@section('content')

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
        <th>Status</th>
        <th>TTL</th>
        <th>Agama</th>
        <th>Pendidikan</th>
        <th>Pekerjaan</th>
        <th>Alamat</th>
        <th>Kedudukan</th>
        <th>No. KTP</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($penduduks as $penduduk)
      <tr>
        <td><a href="/penduduk/{{ $penduduk->id }}/edit">{{  $penduduk->nama }}</a></td>
        <td>{{  $penduduk->jk }}</td>
        <td>{{  $penduduk->status }}</td>
        <td>{{  $penduduk->tempat_lahir }}, {{  $penduduk->tanggal_lahir }}</td>
        <td>{{  $penduduk->agama }}</td>
        <td>{{  $penduduk->pendidikan }}</td>
        <td>{{  $penduduk->pekerjaan }}</td>
        <td>{{  $penduduk->pekerjaan }}</td>
        <td>{{  $penduduk->hubungan }}</td>
        <td>{{  $penduduk->nik }}</td>
      </tr>
      @endforeach
    </tbody>
    <tfoot>
      <tr>
        <th>Nama</th>
        <th>L/P</th>
        <th>Status</th>
        <th>TTL</th>
        <th>Agama</th>
        <th>Pendidikan</th>
        <th>Pekerjaan</th>
        <th>Alamat Lengkap</th>
        <th>Kedudukan</th>
        <th>No. KTP</th>
      </tr>
    </tfoot>
  </table>
</div><!-- /.box-body -->
</div><!-- /.box -->

  <a href="/penduduk/create" class="btn btn-primary">Tambah Penduduk</a>
  <a href="/penduduk/xlsx" class="btn btn-primary">Export to Excel</a>


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