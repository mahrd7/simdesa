 <!-- Horizontal Form -->
<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Data Tanah</h3>
  </div><!-- /.box-header -->
  <!-- form start -->
  <form class="form-horizontal">
    <div class="box-body">

      <div class="form-group {!! $errors->has('nama') ? 'has-error' : '' !!}">
        <label for="nama" class="col-sm-3 control-label">Nama Perorangan / Badan Hukum</label>
        <div class="col-sm-9">
        {!! Form::text('nama', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('jumlah') ? 'has-error' : '' !!}">
        <label for="jumlah" class="col-sm-3 control-label">Jumlah</label>
        <div class="col-sm-9">
        {!! Form::text('jumlah', null, ['class' => 'form-control']) !!}
        {!! $errors->first('jumlah', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('hm') ? 'has-error' : '' !!}">
        <label for="hm" class="col-sm-3 control-label">HM</label>
        <div class="col-sm-9">
        {!! Form::text('hm', null, ['class' => 'form-control']) !!}
        {!! $errors->first('hm', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('hgb') ? 'has-error' : '' !!}">
        <label for="hgb" class="col-sm-3 control-label">HGB</label>
        <div class="col-sm-9">
        {!! Form::text('hgb', null, ['class' => 'form-control']) !!}
        {!! $errors->first('hgb', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('hp') ? 'has-error' : '' !!}">
        <label for="hp" class="col-sm-3 control-label">HP</label>
        <div class="col-sm-9">
        {!! Form::text('hp', null, ['class' => 'form-control']) !!}
        {!! $errors->first('hp', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('hgu') ? 'has-error' : '' !!}">
        <label for="hgu" class="col-sm-3 control-label">HGU</label>
        <div class="col-sm-9">
        {!! Form::text('hgu', null, ['class' => 'form-control']) !!}
        {!! $errors->first('hgu', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('hpl') ? 'has-error' : '' !!}">
        <label for="hpl" class="col-sm-3 control-label">HPL</label>
        <div class="col-sm-9">
        {!! Form::text('hpl', null, ['class' => 'form-control']) !!}
        {!! $errors->first('hpl', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('ma') ? 'has-error' : '' !!}">
        <label for="ma" class="col-sm-3 control-label">MA</label>
        <div class="col-sm-9">
        {!! Form::text('ma', null, ['class' => 'form-control']) !!}
        {!! $errors->first('ma', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('vi') ? 'has-error' : '' !!}">
        <label for="vi" class="col-sm-3 control-label">VI</label>
        <div class="col-sm-9">
        {!! Form::text('vi', null, ['class' => 'form-control']) !!}
        {!! $errors->first('vi', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('tn') ? 'has-error' : '' !!}">
        <label for="tn" class="col-sm-3 control-label">TN</label>
        <div class="col-sm-9">
        {!! Form::text('tn', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tn', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('perumahan') ? 'has-error' : '' !!}">
        <label for="perumahan" class="col-sm-3 control-label">Perumahan</label>
        <div class="col-sm-9">
        {!! Form::text('perumahan', null, ['class' => 'form-control']) !!}
        {!! $errors->first('perumahan', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('perdagangan') ? 'has-error' : '' !!}">
        <label for="perdagangan" class="col-sm-3 control-label">Perdagangan</label>
        <div class="col-sm-9">
        {!! Form::text('perdagangan', null, ['class' => 'form-control']) !!}
        {!! $errors->first('perdagangan', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('perkantoran') ? 'has-error' : '' !!}">
        <label for="perkantoran" class="col-sm-3 control-label">Perkantoran</label>
        <div class="col-sm-9">
        {!! Form::text('perkantoran', null, ['class' => 'form-control']) !!}
        {!! $errors->first('perkantoran', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('industri') ? 'has-error' : '' !!}">
        <label for="industri" class="col-sm-3 control-label">Industri</label>
        <div class="col-sm-9">
        {!! Form::text('industri', null, ['class' => 'form-control']) !!}
        {!! $errors->first('industri', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('fasilitas_umum') ? 'has-error' : '' !!}">
        <label for="fasilitas_umum" class="col-sm-3 control-label">Fasilitas Umum</label>
        <div class="col-sm-9">
        {!! Form::text('fasilitas_umum', null, ['class' => 'form-control']) !!}
        {!! $errors->first('fasilitas_umum', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('sawah') ? 'has-error' : '' !!}">
        <label for="sawah" class="col-sm-3 control-label">Sawah</label>
        <div class="col-sm-9">
        {!! Form::text('sawah', null, ['class' => 'form-control']) !!}
        {!! $errors->first('sawah', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('tegalan') ? 'has-error' : '' !!}">
        <label for="tegalan" class="col-sm-3 control-label">Tegalan</label>
        <div class="col-sm-9">
        {!! Form::text('tegalan', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tegalan', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('perkebunan') ? 'has-error' : '' !!}">
        <label for="perkebunan" class="col-sm-3 control-label">Perkebunan</label>
        <div class="col-sm-9">
        {!! Form::text('perkebunan', null, ['class' => 'form-control']) !!}
        {!! $errors->first('perkebunan', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('peternakan') ? 'has-error' : '' !!}">
        <label for="peternakan" class="col-sm-3 control-label">Peternakan/Perikanan</label>
        <div class="col-sm-9">
        {!! Form::text('peternakan', null, ['class' => 'form-control']) !!}
        {!! $errors->first('peternakan', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('hutan_belukar') ? 'has-error' : '' !!}">
        <label for="hutan_belukar" class="col-sm-3 control-label">Hutan Belukar</label>
        <div class="col-sm-9">
        {!! Form::text('hutan_belukar', null, ['class' => 'form-control']) !!}
        {!! $errors->first('hutan_belukar', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('hutan_lebat') ? 'has-error' : '' !!}">
        <label for="hutan_lebat" class="col-sm-3 control-label">Hutan Lebat</label>
        <div class="col-sm-9">
        {!! Form::text('hutan_lebat', null, ['class' => 'form-control']) !!}
        {!! $errors->first('hutan_lebat', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('kosong') ? 'has-error' : '' !!}">
        <label for="kosong" class="col-sm-3 control-label">Tanah Kosong</label>
        <div class="col-sm-9">
        {!! Form::text('kosong', null, ['class' => 'form-control']) !!}
        {!! $errors->first('kosong', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('lain_lain') ? 'has-error' : '' !!}">
        <label for="lain_lain" class="col-sm-3 control-label">Lain-lain</label>
        <div class="col-sm-9">
        {!! Form::text('lain_lain', null, ['class' => 'form-control']) !!}
        {!! $errors->first('lain_lain', '<p class="help-block">:message</p>') !!}
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