@extends('layouts.master')
@section('content')   
   <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box table-responsive">
            <div class="box-header">
              <h3 class="box-title" style="font-size:24px"><i class="fa fa-list-alt"></i> Data Kategori</h3> <br>
			   <div class="box-body">
			   <div class="row">
			   <div class="col-md-9">
			   </div>
			   <div class="col-md-3">
			    <form action="{{ url('cari') }}" method="get"> 
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