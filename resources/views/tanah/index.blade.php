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
        <th>Jumlah</th>
        <th>Sudah Bersertifikat</th>
        <th>Belum Bersertifikat</th>
        <th>Pertanian</th>
        <th>Non Pertanian</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($tanahs as $tanah)
      <tr>
        <td><a href="/tanah/{{ $tanah->id }}/edit">{{  $tanah->nama }}</a></td>
        <td>{{ $tanah->jumlah }}</td>
        <td>{{ $tanah->hutan_belukar }}</td>
        <td>{{ $tanah->hutan_lebat }}</td>
        <td>{{ $tanah->kosong }}</td>
        <td>{{ $tanah->lain_lain }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div><!-- /.box-body -->
</div><!-- /.box -->

  <a href="/tanah/create" class="btn btn-primary">Tambah tanah</a>
  <a href="/tanah/xlsx" class="btn btn-primary">Export to Excel</a>


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