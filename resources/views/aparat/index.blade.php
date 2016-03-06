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
        <th>NIAP</th>
        <th>NIP</th>
        <th>L/P</th>
        <th>TTL</th>
        <th>Pangkat</th>
        <th>Golongan</th>
        <th>Jabatan</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($aparats as $aparat)
      <tr>
        <td><a href="/aparat/{{ $aparat->id }}/edit">{{  $aparat->nama }}</a></td>
        <td>{{ $aparat->niap }}</td>
        <td>{{ $aparat->nip }}</td>
        <td>{{ $aparat->jk }}</td>
        <td>{{ $aparat->tempat_lahir }}, {{ $aparat->tanggal_lahir }}</td>
        <td>{{ $aparat->pangkat }}</td>
        <td>{{ $aparat->golongan }}</td>
        <td>{{ $aparat->jabatan }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div><!-- /.box-body -->
</div><!-- /.box -->

  <a href="/aparat/create" class="btn btn-primary">Tambah Aparat</a>
  <a href="/aparat/xlsx" class="btn btn-primary">Export ke Excel</a>

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