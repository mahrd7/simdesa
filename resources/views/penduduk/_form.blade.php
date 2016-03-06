 <!-- Horizontal Form -->
<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Data Penduduk</h3>
  </div><!-- /.box-header -->
  <!-- form start -->
  <form class="form-horizontal">
    <div class="box-body">

      <div class="form-group {!! $errors->has('nama') ? 'has-error' : '' !!}">
        <label for="nama" class="col-sm-3 control-label">Nama Lengkap</label>
        <div class="col-sm-9">
        {!! Form::text('nama', null, ['class' => 'form-control', 'style' => 'text-transform:uppercase']) !!}
        {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('nik') ? 'has-error' : '' !!}">
        <label for="nik" class="col-sm-3 control-label">Nomor Induk Kependudukan</label>
        <div class="col-sm-9">
        {!! Form::text('nik', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nik', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('no_ktp') ? 'has-error' : '' !!}">
        <label for="no_ktp" class="col-sm-3 control-label">Nomor KTP</label>
        <div class="col-sm-9">
        {!! Form::text('no_ktp', null, ['class' => 'form-control']) !!}
        {!! $errors->first('no_ktp', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('no_kk') ? 'has-error' : '' !!}">
        <label for="no_kk" class="col-sm-3 control-label">Nomor Kartu Keluarga</label>
        <div class="col-sm-9">
        {!! Form::text('no_kk', null, ['class' => 'form-control']) !!}
        {!! $errors->first('no_kk', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('hubungan') ? 'has-error' : '' !!}">
        <label for="hubungan" class="col-sm-3 control-label">Kedudukan dalam keluarga</label>
        <div class="col-sm-9">
        {!! Form::select('hubungan', ['KEPALA KELUARGA' => 'KEPALA KELUARGA', 'ISTRI' => 'ISTRI', 'ANAK' => 'ANAK'], null, ['class' => 'form-control', 'placeholder' => 'Pilih Salah Satu']) !!}
        {!! $errors->first('hubungan', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('tempat_lahir') ? 'has-error' : '' !!}">
        <label for="tempat_lahir" class="col-sm-3 control-label">Tempat Lahir</label>
        <div class="col-sm-9">
        {!! Form::text('tempat_lahir', null, ['class' => 'form-control', 'style' => 'text-transform:uppercase']) !!}
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

      <div class="form-group {!! $errors->has('jk') ? 'has-error' : '' !!}">
        <label for="jk" class="col-sm-3 control-label">Jenis Kelamin</label>
        <div class="col-sm-9">
        {!! Form::select('jk', ['L' => 'LAKI-LAKI', 'P' => 'PEREMPUAN'], null, ['class' => 'form-control', 'placeholder' => 'Pilih Salah Satu']) !!}
        {!! $errors->first('jk', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('status') ? 'has-error' : '' !!}">
        <label for="status" class="col-sm-3 control-label">Status</label>
        <div class="col-sm-9">
        {!! Form::select('status', ['KAWIN' => 'KAWIN', 'BELUM KAWIN' => 'BELUM KAWIN', 'CERAI HIDUP' => 'CERAI HIDUP', 'CERAI MATI' => 'CERAI MATI'], null, ['class' => 'form-control', 'placeholder' => 'Pilih Salah Satu']) !!}
        {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('pendidikan') ? 'has-error' : '' !!}">
        <label for="pendidikan" class="col-sm-3 control-label">Pendidikan Terakhir</label>
        <div class="col-sm-9">
        {!! Form::select('pendidikan', ['TIDAK/BELUM SEKOLAH' => 'TIDAK/BELUM SEKOLAH', 'TAMAT SD/SEDERAJAT' => 'TAMAT SD/SEDERAJAT', 'SLTP/SEDERAJAT' => 'SLTP/SEDERAJAT', 'SMA/SEDERAJAT' => 'SMA/SEDERAJAT', 'SARJANA' => 'SARJANA'], null, ['class' => 'form-control', 'placeholder' => 'Pilih Salah Satu']) !!}
        {!! $errors->first('pendidikan', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('pekerjaan') ? 'has-error' : '' !!}">
        <label for="pekerjaan" class="col-sm-3 control-label">Pekerjaan</label>
        <div class="col-sm-9">
        {!! Form::select('pekerjaan', ['BELUM/TIDAK BEKERJA' => 'BELUM/TIDAK BEKERJA', 'MENGURUS RUMAH TANGGA' => 'MENGURUS RUMAH TANGGA', 'WIRASWASTA' => 'WIRASWASTA', 'PETANI/PEKEBUN' => 'PETANI/PEKEBUN', 'BURUH HARIAN LEPAS' => 'BURUH HARIAN LEPAS', 'PENSIUNAN' => 'PENSIUNAN', 'PELAJAR/MAHASISWA' => 'PELAJAR/MAHASISWA'], null, ['class' => 'form-control', 'placeholder' => 'Pilih Salah Satu']) !!}
        {!! $errors->first('pekerjaan', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('gol_darah') ? 'has-error' : '' !!}">
        <label for="inputEmail3" class="col-sm-3 control-label">Golongan Darah</label>
        <div class="col-sm-9">
        {!! Form::select('gol_darah', ['A' => 'A', 'B' => 'B', 'O' => 'O'], null, ['class' => 'form-control', 'placeholder' => 'Pilih Salah Satu']) !!}
        {!! $errors->first('gol_darah', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('agama') ? 'has-error' : '' !!}">
        <label for="agama" class="col-sm-3 control-label">Agama</label>
        <div class="col-sm-9">
        {!! Form::select('agama', ['ISLAM' => 'ISLAM', 'KATOLIK' => 'KATOLIK', 'PROTESTAN' => 'PROTESTAN', 'HINDU' => 'HINDU', 'BUDHA' => 'BUDHA'], null, ['class' => 'form-control', 'placeholder' => 'Pilih Salah Satu']) !!}
        {!! $errors->first('agama', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('ibu') ? 'has-error' : '' !!}">
        <label for="ibu" class="col-sm-3 control-label">Nama Ibu</label>
        <div class="col-sm-9">
        {!! Form::text('ibu', null, ['class' => 'form-control', 'style' => 'text-transform:uppercase']) !!}
        {!! $errors->first('ibu', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('ayah') ? 'has-error' : '' !!}">
        <label for="ayah" class="col-sm-3 control-label">Nama Ayah</label>
        <div class="col-sm-9">
        {!! Form::text('ayah', null, ['class' => 'form-control', 'style' => 'text-transform:uppercase']) !!}
        {!! $errors->first('ayah', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('dusun') ? 'has-error' : '' !!}">
        <label for="dusun" class="col-sm-3 control-label">Kampung</label>
        <div class="col-sm-9">
        {!! Form::select('dusun', ['BALE KAMBANG' => 'BALE KAMBANG', 'CIKADU' => 'CIKADU', 'LEGOK BITUNG' => 'LEGOK BITUNG', 'BABAKAN LIO' => 'BABAKAN LIO', 'PASIR OA' => 'PASIR OA'], null, ['class' => 'form-control', 'placeholder' => 'Pilih Salah Satu']) !!}
        {!! $errors->first('dusun', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('rt') ? 'has-error' : '' !!}">
        <label for="rt" class="col-sm-3 control-label">Rukun Tetangga</label>
        <div class="col-sm-9">
        {!! Form::select('rt', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'], null, ['class' => 'form-control', 'placeholder' => 'Pilih Salah Satu']) !!}
        {!! $errors->first('rt', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('rw') ? 'has-error' : '' !!}">
        <label for="rw" class="col-sm-3 control-label">Rukun Warga</label>
        <div class="col-sm-9">
        {!! Form::select('rw', ['1' => '1', '2' => '2', '3' => '3'], null, ['class' => 'form-control', 'placeholder' => 'Pilih Salah Satu']) !!}
        {!! $errors->first('rw', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('kelainan_mental_fisik') ? 'has-error' : '' !!}">
        <label for="kelainan_mental_fisik" class="col-sm-3 control-label">Kelainan Mental Fisik</label>
        <div class="col-sm-9">
        {!! Form::text('kelainan_mental_fisik', null, ['class' => 'form-control', 'style' => 'text-transform:uppercase']) !!}
        {!! $errors->first('kelainan_mental_fisik', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('baca_tulis') ? 'has-error' : '' !!}">
        <label for="baca_tulis" class="col-sm-3 control-label">Baca Tulis</label>
        <div class="col-sm-9">
        {!! Form::text('baca_tulis', null, ['class' => 'form-control', 'style' => 'text-transform:uppercase']) !!}
        {!! $errors->first('baca_tulis', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('jenis_akseptor') ? 'has-error' : '' !!}">
        <label for="jenis_akseptor" class="col-sm-3 control-label">Jenis Akseptor</label>
        <div class="col-sm-9">
        {!! Form::text('jenis_akseptor', null, ['class' => 'form-control', 'style' => 'text-transform:uppercase']) !!}
        {!! $errors->first('jenis_akseptor', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('jenis_layanan_reg_rental') ? 'has-error' : '' !!}">
        <label for="jenis_layanan_reg_rental" class="col-sm-3 control-label">Jenis Layanan Reg Rental</label>
        <div class="col-sm-9">
        {!! Form::text('jenis_layanan_reg_rental', null, ['class' => 'form-control', 'style' => 'text-transform:uppercase']) !!}
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