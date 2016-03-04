 <!-- Horizontal Form -->
<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Data Penduduk</h3>
  </div><!-- /.box-header -->
  <!-- form start -->
  <form class="form-horizontal">
    <div class="box-body">

      <div class="form-group {!! $errors->has('nik') ? 'has-error' : '' !!}">
        <label for="nik" class="col-sm-3 control-label">Nomor Induk Kependudukan</label>
        <div class="col-sm-9">
        {!! Form::text('nik', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nik', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('nama') ? 'has-error' : '' !!}">
        <label for="nama" class="col-sm-3 control-label">Nama Lengkap</label>
        <div class="col-sm-9">
        {!! Form::text('nama', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('tempat_lahir') ? 'has-error' : '' !!}">
        <label for="tempat_lahir" class="col-sm-3 control-label">Tempat Lahir</label>
        <div class="col-sm-9">
        {!! Form::text('tempat_lahir', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tempat_lahir', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('tanggal_lahir') ? 'has-error' : '' !!}">
        <label for="tanggal_lahir" class="col-sm-3 control-label">Tanggal Lahir</label>
        <div class="col-sm-9">
        {!! Form::text('tanggal_lahir', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tanggal_lahir', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('jk') ? 'has-error' : '' !!}">
        <label for="jk" class="col-sm-3 control-label">Jenis Kelamin</label>
        <div class="col-sm-9">
        {!! Form::text('jk', null, ['class'=>'form-control', 'placeholder' => 'Nama lengkap']) !!}
        {!! $errors->first('jk', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('hubungan') ? 'has-error' : '' !!}">
        <label for="hubungan" class="col-sm-3 control-label">Hubungan dalam keluarga</label>
        <div class="col-sm-9">
        {!! Form::text('hubungan', null, ['class' => 'form-control']) !!}
        {!! $errors->first('hubungan', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('status') ? 'has-error' : '' !!}">
        <label for="status" class="col-sm-3 control-label">Status</label>
        <div class="col-sm-9">
        {!! Form::text('status', null, ['class' => 'form-control']) !!}
        {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('pendidikan') ? 'has-error' : '' !!}">
        <label for="pendidikan" class="col-sm-3 control-label">Pendidikan Terakhir</label>
        <div class="col-sm-9">
        {!! Form::text('pendidikan', null, ['class' => 'form-control']) !!}
        {!! $errors->first('pendidikan', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('pekerjaan') ? 'has-error' : '' !!}">
        <label for="pekerjaan" class="col-sm-3 control-label">Pekerjaan</label>
        <div class="col-sm-9">
        {!! Form::text('pekerjaan', null, ['class' => 'form-control']) !!}
        {!! $errors->first('pekerjaan', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('nama') ? 'has-error' : '' !!}">
        <label for="inputEmail3" class="col-sm-3 control-label">Golongan Darah</label>
        <div class="col-sm-9">
        {!! Form::text('gol_darah', null, ['class' => 'form-control']) !!}
        {!! $errors->first('gol_darah', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('nama_ortu') ? 'has-error' : '' !!}">
        <label for="nama_ortu" class="col-sm-3 control-label">Nama Orangtua</label>
        <div class="col-sm-9">
        {!! Form::text('nama_ortu', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nama_ortu', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('kelainan_mental_fisik') ? 'has-error' : '' !!}">
        <label for="kelainan_mental_fisik" class="col-sm-3 control-label">Kelainan Mental Fisik</label>
        <div class="col-sm-9">
        {!! Form::text('kelainan_mental_fisik', null, ['class' => 'form-control']) !!}
        {!! $errors->first('kelainan_mental_fisik', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('baca_tulis') ? 'has-error' : '' !!}">
        <label for="baca_tulis" class="col-sm-3 control-label">Baca Tulis</label>
        <div class="col-sm-9">
        {!! Form::text('baca_tulis', null, ['class' => 'form-control']) !!}
        {!! $errors->first('baca_tulis', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('jenis_akseptor') ? 'has-error' : '' !!}">
        <label for="jenis_akseptor" class="col-sm-3 control-label">Jenis Akseptor</label>
        <div class="col-sm-9">
        {!! Form::text('jenis_akseptor', null, ['class' => 'form-control']) !!}
        {!! $errors->first('jenis_akseptor', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('jenis_layanan_reg_rental') ? 'has-error' : '' !!}">
        <label for="jenis_layanan_reg_rental" class="col-sm-3 control-label">Jenis Layanan Reg Rental</label>
        <div class="col-sm-9">
        {!! Form::text('jenis_layanan_reg_rental', null, ['class' => 'form-control']) !!}
        {!! $errors->first('jenis_layanan_reg_rental', '<p class="help-block">:message</p>') !!}
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