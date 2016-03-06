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
        <th>Nama Kepala</th>
        <th>Nomor Kartu</th>
        <th>Jumlah Anggota</th>
        <th>Alamat</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($keluargas as $keluarga)
      <tr>
        <td><a href="/keluarga/{{ $keluarga->id }}/edit">{{  $keluarga->nama }}</a></td>
        <td>{{ $keluarga->no_kk }}</td>
        <td> - </td>
        <td>{{ $keluarga->dusun }} RT. {{ $keluarga->rt }} RW. {{ $keluarga->rw }}</td>
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