@extends('layouts.master')
@section('content')   
   <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box table-responsive">
            <div class="box-header">
              <h3 class="box-title" style="font-size:24px"><i class="fa fa-tags"></i> Data Kategori </h3>&nbsp &nbsp  <a href="kategori">
				<i class="fa fa-arrow-right"></i> <span>List All Data</span>
			  </a>
			  
            </div>
			@if(count($hasil))
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
				@foreach($hasil as $p)
                <tr>
					<td>{{ $no++ }}</td>
					<td>{{ $p->id_kategori }}</td>
					<td>{{ $p->kategori }}</td>
					<td>{{ $p->slug }}</td>
					<td>{{ $p->created_at }}</td>
                </tr>
                @endforeach
				</tbody>
              </table>
            </div>
			
	
			@else
			  <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-ban"></i> Alert!</h4>
               Oops.. Data <b>{{ $query }}</b> Tidak Ditemukan</div>
              </div>
				
			@endif
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