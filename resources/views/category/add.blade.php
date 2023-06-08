
<!-- Stored in resources/views/child.blade.php -->
 
@extends('layouts.admin')
 
@section('title')
  <title>Trang Chủ</title>


@endsection
 
 
@section('content')
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'category', 'key' => 'Add'])
    
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Thêm SP</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('category.index') }}" class="btn btn-primary float-end"> DS SP</a>
                    </div>
    
                </div>
            </div>
            <div class="card-body">
              <form action="{{ route('category.store') }}" method="POST">
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Tên danh mục</label>
                      <input type="text" 
                             class="form-control"
                             name="name"
                             placeholder="Nhập tên danh mục"
                      >
                    </div>
                    <div class="form-group">
                      <label>Tên danh mục</label>
                      <input type="File" 
                             name="name"
                      >
                    </div>
                    <div class="form-group">
                      <label>Chọn danh mục cha</label>
                      <select class="form-control" name="parent_id">
                        <option value="0">Chọn danh mục cha</option>
                        {{-- {!! $htmlOption !!} --}}
                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
            </div>
        </div>
      </div>
    
    </div>
  </div>

@endsection
  
