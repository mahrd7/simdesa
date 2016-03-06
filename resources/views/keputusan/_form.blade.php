 <!-- Horizontal Form -->
<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Data Tanah</h3>
  </div><!-- /.box-header -->
  <!-- form start -->
  <form class="form-horizontal">
    <div class="box-body">

      <div class="form-group {!! $errors->has('nomor') ? 'has-error' : '' !!}">
        <label for="nomor" class="col-sm-3 control-label">Nomor Keputusan</label>
        <div class="col-sm-9">
        {!! Form::text('nomor', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nomor', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('tentang') ? 'has-error' : '' !!}">
        <label for="tentang" class="col-sm-3 control-label">Tentang</label>
        <div class="col-sm-9">
        {!! Form::text('tentang', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tentang', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('uraian') ? 'has-error' : '' !!}">
        <label for="uraian" class="col-sm-3 control-label">Uraian Singkat</label>
        <div class="col-sm-9">
        {!! Form::textarea('uraian', null, ['class' => 'form-control']) !!}
        {!! $errors->first('uraian', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('dilaporkan') ? 'has-error' : '' !!}">
        <label for="dilaporkan" class="col-sm-3 control-label">Tanggal Dilaporkan</label>
        <div class="col-sm-9">
        {!! Form::text('dilaporkan', null, ['class' => 'form-control']) !!}
        {!! $errors->first('dilaporkan', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('persetujuan_bpd') ? 'has-error' : '' !!}">
        <label for="persetujuan_bpd" class="col-sm-3 control-label">Persetujuan BPD</label>
        <div class="col-sm-9">
        {!! Form::text('persetujuan_bpd', null, ['class' => 'form-control']) !!}
        {!! $errors->first('persetujuan_bpd', '<p class="help-block">:message</p>') !!}
        </div>
      </div>

      <div class="form-group {!! $errors->has('keterangan') ? 'has-error' : '' !!}">
        <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
        <div class="col-sm-9">
        {!! Form::textarea('keterangan', null, ['class' => 'form-control']) !!}
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