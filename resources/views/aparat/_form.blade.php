 <!-- Horizontal Form -->
<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Data Tanah</h3>
  </div><!-- /.box-header -->
  <!-- form start -->
  <form class="form-horizontal">
    <div class="box-body">

      <div class="form-group {!! $errors->has('nama') ? 'has-error' : '' !!}">
        <label for="nama" class="col-sm-3 control-label">Nama Lengkap</label>
        <div class="col-sm-9">
        {!! Form::text('nama', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('niap') ? 'has-error' : '' !!}">
        <label for="niap" class="col-sm-3 control-label">NIAP</label>
        <div class="col-sm-9">
        {!! Form::text('niap', null, ['class' => 'form-control']) !!}
        {!! $errors->first('niap', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('nip') ? 'has-error' : '' !!}">
        <label for="nip" class="col-sm-3 control-label">NIAP</label>
        <div class="col-sm-9">
        {!! Form::text('nip', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nip', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('jk') ? 'has-error' : '' !!}">
        <label for="jk" class="col-sm-3 control-label">Jenis Kelamin</label>
        <div class="col-sm-9">
        {!! Form::select('jk', ['L' => 'LAKI-LAKI', 'P' => 'PEREMPUAN'], null, ['class' => 'form-control', 'placeholder' => 'Pilih Salah Satu']) !!}
        {!! $errors->first('jk', '<p class="help-block">:message</p>') !!}
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
        {!! Form::input('date', 'tanggal_lahir', Carbon\Carbon::now()->format('d-m-Y'), ['class' => 'form-control']) !!}
        {!! $errors->first('tanggal_lahir', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('agama') ? 'has-error' : '' !!}">
        <label for="agama" class="col-sm-3 control-label">Agama</label>
        <div class="col-sm-9">
        {!! Form::select('agama', ['ISLAM' => 'ISLAM', 'KATOLIK' => 'KATOLIK', 'PROTESTAN' => 'PROTESTAN', 'HINDU' => 'HINDU', 'BUDHA' => 'BUDHA'], null, ['class' => 'form-control', 'placeholder' => 'Pilih Salah Satu']) !!}
        {!! $errors->first('agama', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('pangkat') ? 'has-error' : '' !!}">
        <label for="pangkat" class="col-sm-3 control-label">Pangkat</label>
        <div class="col-sm-9">
        {!! Form::select('pangkat', ['-' => '-'], null, ['class' => 'form-control', 'placeholder' => 'Pilih Salah Satu']) !!}
        {!! $errors->first('pangkat', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('golongan') ? 'has-error' : '' !!}">
        <label for="golongan" class="col-sm-3 control-label">Golongan</label>
        <div class="col-sm-9">
        {!! Form::select('golongan', ['-' => '-'], null, ['class' => 'form-control', 'placeholder' => 'Pilih Salah Satu']) !!}
        {!! $errors->first('golongan', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('jabatan') ? 'has-error' : '' !!}">
        <label for="jabatan" class="col-sm-3 control-label">Jabatan</label>
        <div class="col-sm-9">
        {!! Form::select('jabatan', ['KEPALA DESA' => 'KEPALA DESA', 'SEKRETARIS DESA' => 'SEKRETARIS DESA', 'KASIE KESEJAHTERAAN' => 'KASIE KESEJAHTERAAN', 'KASIE PEMERINTAHAN' => 'KASIE PEMERINTAHAN', 'KASIE PELAYANAN' => 'KASIE PELAYANAN', 'KETUA RW 1' => 'KETUA RW 1', 'KETUA RW 2' => 'KETUA RW 2', 'KETUA RT 1' => 'KETUA RT 1', 'KETUA RT 2' => 'KETUA RT 2', 'KETUA RT 3' => 'KETUA RT 3', 'KETUA RT 4' => 'KETUA RT 4', 'KETUA RT 5' => 'KETUA RT 5', 'KETUA RT 6' => 'KETUA RT 6', 'KETUA RT 7' => 'KETUA RT 7', 'KETUA RT 8' => 'KETUA RT 8', 'KETUA RT 9' => 'KETUA RT 9', 'KETUA RT 10' => 'KETUA RT 10', ], null, ['class' => 'form-control', 'placeholder' => 'Pilih Salah Satu']) !!}
        {!! $errors->first('jabatan', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('pendidikan') ? 'has-error' : '' !!}">
        <label for="pendidikan" class="col-sm-3 control-label">Pendidikan Terakhir</label>
        <div class="col-sm-9">
        {!! Form::select('pendidikan', ['TIDAK/BELUM SEKOLAH' => 'TIDAK/BELUM SEKOLAH', 'TAMAT SD/SEDERAJAT' => 'TAMAT SD/SEDERAJAT', 'SLTP/SEDERAJAT' => 'SLTP/SEDERAJAT', 'SMA/SEDERAJAT' => 'SMA/SEDERAJAT', 'SARJANA' => 'SARJANA'], null, ['class' => 'form-control', 'placeholder' => 'Pilih Salah Satu']) !!}
        {!! $errors->first('pendidikan', '<p class="help-block">:message</p>') !!}
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