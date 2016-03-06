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
        <th>Jenis Barang/Bangunan</th>
        <th>Asal Barang/Bangunan</th>
        <th>Keadaan Barang</th>
        <th>Keterangan</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($inventaris as $invent)
      <tr>
        <td><a href="/inventaris/{{ $invent->id }}/edit">{{  $invent->barang }}</a></td>
        <td>{{ $invent->asal }}</td>
        <td>{{ $invent->keadaan }}</td>
        <td>{{ $invent->keterangan }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div><!-- /.box-body -->
</div><!-- /.box -->

  <a href="/inventaris/create" class="btn btn-primary">Tambah Aparat</a>
  <a href="/inventaris/xlsx" class="btn btn-primary">Export ke Excel</a>

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