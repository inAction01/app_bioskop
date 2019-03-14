@extends('layouts.master')
@section('content')   
   <!-- Main content -->
   	@foreach($data as $p)
    <section class="content">
      <!-- Default box -->
      <div class="box">
	   <form action="<?php echo url('updateKategori/'.$p->id_kategori)?>" class="form-horizontal" method="post" enctype="multipart/form-data">
	   {{ csrf_field() }}
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-tags"></i> Update Data Kategori : {{ $p->kategori }} </h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
		<div class="box-body">
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Kategori </span>
                <input title="Nama Kategori"type="text" name="kategori" autocomplete="off" required class="form-control" value="{{ $p->kategori }}">
				</div><br>
				<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-list-alt"></i> Slug</span>
                <input title="Slug"type="text" name="slug" autocomplete="off" required class="form-control" value="{{ $p->slug }}">
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