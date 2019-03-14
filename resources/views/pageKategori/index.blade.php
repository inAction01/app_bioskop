@extends('layouts.master')
@section('content')   
   <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box table-responsive">
            <div class="box-header">
              <h3 class="box-title" style="font-size:24px"><i class="fa fa-tags"></i> Data Kategori</h3> <br>
			   <div class="box-body">
			   <div class="row">
			   <div class="col-md-9">
				<div class="col-md-1">
			    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                <i class="fa fa-plus"></i> Add Data
				</button>
			   </div>
			   <!-- Modal  Body -->
		<div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-pencil"></i> Form Add Data Kategori</h4>
              </div>
			  <div class="modal-body">
			  <form action="{{ url('tambahKategori') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
			  {{ csrf_field() }}
			  <div class="box-body">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i></span>
                <input type="text" class="form-control" name="kategori" placeholder="Kategori" required autocomplete="off">
              </div><br>
			  <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-list-alt"></i></span>
                <input type="text" class="form-control" name="slug" placeholder="Slug" required autocomplete="off">
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
			   
			   </div>
			   <div class="col-md-3">
			    <form action="{{ url('cariKategori') }}" method="get"> 
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
                  <th>ID Kategori</th>
                  <th>Kategori</th>
                  <th>Slug</th>
                  <th>Created</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
				<?php $no=1 ?>
				@foreach($data as $p)
                <tr>
					<td>{{ $no++ }}</td>
					<td>{{ $p->id_kategori }}</td>
					<td>{{ $p->kategori }}</td>
					<td>{{ $p->slug }}</td>
					<td>{{ $p->tgl_input }}</td>
					<td><a href="editKategori/{{ $p->id_kategori }}"class="btn default"><i class="fa fa-edit"></i> Edit</a> <br>
									<a href="hapusKategori/{{ $p->id_kategori }}"
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
      <!-- /.row -->
    </section>
@endsection
    <!-- /.content -->