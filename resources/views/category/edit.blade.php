
<!-- Stored in resources/views/child.blade.php -->
 
@extends('layouts.admin')
 
@section('title')
  <title>Trang Chủ</title>


@endsection
 
 
@section('content')
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'category', 'key' => 'Edit'])
    
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Sua SP</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('category.index') }} " class="btn btn-primary fload-end"> Danh sach SP</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('category.update', $category) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Ten SP</strong>
                                <input type="text" name="name" value="{{ $category->name }}" class="form-control" placeholder="Nhap ten sp">
                            </div>
                            <div class="form-group">
                                <label>Anh</label>
                                <input type="file" name="image" value="{{ $category->image }}">
                            </div>
                            <div class="form-group">
                                <strong>Mô tả</strong>
                                <input type="text" name="describe" value="{{ $category->describe }}" class="form-control" placeholder="Nhap mô tả ">
                            </div>
                        </div>
                        
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Cap Nhat</button>
                </form>
            </div>
        </div>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
  
