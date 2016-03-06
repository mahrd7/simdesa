 <!-- Horizontal Form -->
<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Data Tanah</h3>
  </div><!-- /.box-header -->
  <!-- form start -->
  <form class="form-horizontal">
    <div class="box-body">

      <div class="form-group {!! $errors->has('barang') ? 'has-error' : '' !!}">
        <label for="barang" class="col-sm-3 control-label">Jenis Barang/Bangunan</label>
        <div class="col-sm-9">
        {!! Form::text('barang', null, ['class' => 'form-control']) !!}
        {!! $errors->first('barang', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('asal') ? 'has-error' : '' !!}">
        <label for="asal" class="col-sm-3 control-label">Asal Barang/Bangunan</label>
        <div class="col-sm-9">
        {!! Form::select('asal', ['DIBELI SENDIRI' => 'DIBELI SENDIRI', 'BANTUAN PEMERINTAH' => 'BANTUAN PEMERINTAH', 'SUMBANGAN'], null, ['class' => 'form-control', 'placeholder' => 'Pilih Salah Satu']) !!}
        {!! $errors->first('asal', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      

      <div class="form-group {!! $errors->has('keadaan') ? 'has-error' : '' !!}">
        <label for="keadaan" class="col-sm-3 control-label">Keadaan Barang/Bangunan</label>
        <div class="col-sm-9">
        {!! Form::select('keadaan', ['BAIK' => 'BAIK', 'RUSAK' => 'RUSAK'], null, ['class' => 'form-control', 'placeholder' => 'Pilih Salah Satu']) !!}
        {!! $errors->first('keadaan', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('keterangan') ? 'has-error' : '' !!}">
        <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
        <div class="col-sm-9">
        {!! Form::text('keterangan', null, ['class' => 'form-control']) !!}
        {!! $errors->first('keterangan', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-3"></div>
        <div class="col-sm-9">
          {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
        </div>
      </div>

    </div><!-- /.box-body -->
    <div class="box-footer">
    
    </div><!-- /.box-footer -->
  </form>
</div><!-- /.box -->