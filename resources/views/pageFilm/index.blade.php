@extends('layouts.master')
@section('content')   
   <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box table-responsive">
            <div class="box-header">
              <h3 class="box-title" style="font-size:24px"><i class="fa fa-video-camera"></i> Data Film</h3> <br>
			   <div class="box-body">
			   <div class="row">
			   <div class="col-md-9">
				<div class="col-md-1">
			    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                <i class="fa fa-plus"></i> Add Data
				</button>
			   </div>

			   
			   </div>
			   <div class="col-md-3">
			    <form action="{{ url('cariFilm') }}" method="get"> 
				<div class="input-group">
				  <input type="text" name="key" class="form-control" required autocomplete="off" placeholder="Search...">
					  <span class="input-group-btn">
						<button type="submit" class="btn btn-flat"><i class="fa fa-search"></i>
						</button>
					  </span>
				</div>
				</div>
				</div>
				</form>
			  </div>
            </div>
			
			
			
			
            <!-- /.box-header -->
            <div class="box-body" style="margin-top:-20px">
              <table id="" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>ID Film</th>
                  <th>Cover Img</th>
                  <th>Category</th>
                  <th>Title</th>
                  <th>Director</th>
                  <th>Released</th>
                  <th>Sinopsis</th>
                  <th>Created</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
				<?php $no=1 ?>
				@foreach($data as $p)
                <tr>
					<td>{{ $no++ }}</td>
					<td>{{ $p->id_film }} - {{ substr($p->id_kategori,3,3) }}</td>
					<td><img width="80px" height="100px" src="image/{{ $p->img }}"></td>
					<td>{{ $p->kategori }}</td>
					<td>{{ $p->judul }} </td>
					<td>{{ $p->sutradara }}</td>
					<td>{{ $p->thn_rilis }}</td>
					<td>{{ $p->sinopsis }}</td>
					<td>{{ $p->created_at }}</td>

					<td><a href="editFilm/{{ $p->id_film }}"class="btn default"><i class="fa fa-edit"></i> Edit</a> <br>
									<a href="hapusFilm/{{ $p->id_film }}"
									onClick="return confirm('Are you sure you want to delete?')
									" class="btn default"><i class="fa fa-trash-o"></i> Hapus</a></td>
                </tr>
                @endforeach
				</tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
	  			   <!-- Modal  Body -->
		<div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-pencil"></i> Form Add Data Film</h4>
              </div>
			  <div class="modal-body">
			  <form action="{{ url('tambahFilm') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
			  {{ csrf_field() }}
			  <div class="box-body">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-video-camera"></i></span>
                <input type="text" class="form-control" name="judul" placeholder="Judul Film" required autocomplete="off">
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
                <input type="text" class="form-control" name="sutradara" placeholder="Sutradara" required autocomplete="off">
              </div><br>
			  <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
                <input type="number" class="form-control" name="thn_rilis" placeholder="Tahun Rilis" required autocomplete="off">
              </div><br>
			  <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                <input type="text" class="form-control" name="sinopsis" placeholder="Sinopsis" required autocomplete="off">
              </div><br>
			    <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-image"></i> Image</span>
                <input type="file" class="form-control" name="foto" required autocomplete="off"> <small>&nbsp *max file size 2MB</small>
              </div><br>
			  
			  </div>
            <!-- /.box-body -->
				
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
              </div>
			  </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
			   
			  <!-- End Modal --> 
      <!-- /.row -->
    </section>
	
	
			  
@endsection
    <!-- /.content -->