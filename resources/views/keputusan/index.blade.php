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
        <th>Nomor Keputusan</th>
        <th>Tentang</th>
        <th>Uraian Singkat</th>
        <th>Dilaporkan</th>
        <th>Keterangan</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($keputusans as $keputusan)
      <tr>
        <td>{{ $keputusan->nomor }}</td>
        <td><a href="/keputusan/{{ $keputusan->id }}/edit">{{  $keputusan->tentang }}</a></td>
        <td>{{ $keputusan->uraian }}</td>
        <td>{{ $keputusan->dilaporkan }}</td>
        <td>{{ $keputusan->keterangan }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div><!-- /.box-body -->
</div><!-- /.box -->

  <a href="/keputusan/create" class="btn btn-primary">Tambah Aparat</a>
  <a href="/keputusan/xlsx" class="btn btn-primary">Export ke Excel</a>

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