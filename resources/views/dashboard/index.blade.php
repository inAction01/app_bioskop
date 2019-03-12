 @extends('layouts.master')
 @section('content')
	<section class="content-header">
      <h1>
        Data Content
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box table-responsive">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-list-alt"></i> Data</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Data 1</th>
                  <th>Data 2</th>
                  <th>Data 3</th>
                  <th>Data 4</th>
                  <th>Data 5</th>
                  <th>Created</th>
                </tr>
                </thead>
                <tbody>
				
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
    <!-- /.content -->
@endsection