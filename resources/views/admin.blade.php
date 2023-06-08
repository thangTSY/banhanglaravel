
<!-- Stored in resources/views/child.blade.php -->
 
@extends('layouts.admin')
 
@section('title')
  <title>Trang Chủ</title>


@endsection
 
 
@section('content')
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'ADMIN', 'key' => 'ADMIN'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-12">
           <h3 class="btn btn-success float-right m2">thắng</h3>
          </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection