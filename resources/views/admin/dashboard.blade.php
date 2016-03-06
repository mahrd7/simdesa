@extends('admin')

@section('page_title', 'Desa Wanawali Purwakarta')

@section('content')

<div class="row">

<!-- Small boxes (Stat box) -->
<div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-aqua">
    <div class="inner">
      <h3>{{ $count['penduduk'] }}</h3>
      <p>Total Penduduk</p>
    </div>
    <div class="icon">
      <i class="ion ion-pie-graph"></i>
    </div>
    <a href="/penduduk" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div><!-- ./col -->

<!-- Small boxes (Stat box) -->
<div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-green">
    <div class="inner">
      <h3>{{ $count['keluarga'] }}</h3>
      <p>Kepala Keluarga</p>
    </div>
    <div class="icon">
      <i class="ion ion-person-stalker"></i>
    </div>
    <a href="/keluarga" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div><!-- ./col -->

<!-- Small boxes (Stat box) -->
<div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-yellow">
    <div class="inner">
      <h3>{{ $count['laki_laki'] }}</h3>
      <p>Laki-laki</p>
    </div>
    <div class="icon">
      <i class="ion ion-man"></i>
    </div>
    <a href="/keluarga" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div><!-- ./col -->

<!-- Small boxes (Stat box) -->
<div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-red">
    <div class="inner">
      <h3>{{ $count['perempuan'] }}</h3>
      <p>Perempuan</p>
    </div>
    <div class="icon">
      <i class="ion ion-woman"></i>
    </div>
    <a href="/keluarga" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div><!-- ./col -->

</div>

@endsection
