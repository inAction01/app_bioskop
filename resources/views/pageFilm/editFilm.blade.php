@extends('layouts.master')
@section('content')   
   <!-- Main content -->
   	@foreach($data as $p)
    <section class="content">
      <!-- Default box -->
      <div class="box">
	   <form action="<?php echo url('updateFilm/'.$p->id_film)?>" class="form-horizontal" method="post" enctype="multipart/form-data">
	   {{ csrf_field() }}
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-video-camera"></i> Update Data Film : {{ $p->judul }} </h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
		 <div class="row">
		   <div class="col-md-2">
				<div class="box-body">
					<img width="180px" height="200px" src="../image/{{ $p->img }}">
					<br><br>
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-image"></i></span>
                <input type="file" required class="form-control" name="foto">
				 <small>&nbsp *max file size 2MB</small>
				</div>
				</div>
		   </div>
		   <div class="col-md-8">
			  <div class="box-body">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-video-camera"></i></span>
                <input type="text" class="form-control" name="judul" placeholder="Judul Film" required autocomplete="off" value="{{ $p->judul }}">
              </div><br>
			   <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i></span>
                 <select class="form-control" required name="id_kategori">
                    <option value="">- Select Jenis Kategori- </option>
					@foreach($kategori as $row)
						<option value="{{ $row->id_kategori }}">{{ $row->kategori }}</option>
					@endforeach
                  </select>
              </div><br>
			  <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-male"></i></span>
                <input type="text" class="form-control" name="sutradara" placeholder="Sutradara" required autocomplete="off" value="{{ $p->sutradara }}">
              </div><br>
			  <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
                <input type="number" class="form-control" name="thn_rilis" placeholder="Tahun Rilis" required autocomplete="off" value="{{ $p->thn_rilis }}">
              </div><br>
			  <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                <input type="text" class="form-control" name="sinopsis" placeholder="Sinopsis" required autocomplete="off" value="{{ $p->sinopsis }}">
              </div><br>
			  
			  </div>
			 </div>
		</div>
        <div class="box-footer">
							<div class="col-md-offset-11 col-md-9">
								
									<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
							</div>
		
        </div>
		</form>
		</div>
      </div>
    </section>
	@endforeach
@endsection
    <!-- /.content -->