
<!-- Stored in resources/views/child.blade.php -->
 
@extends('layouts.admin')
 
@section('title')
  <title>Trang Chủ</title>


@endsection
 
 
@section('content')
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'product', 'key' => 'Add'])
    
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
                        <a href="{{ route('product.index') }}" class="btn btn-primary float-end"> DS SP</a>
                    </div>
    
                </div>
            </div>
            <div class="card-body">
              <form action="{{ route('product.store') }}" method="POST">
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
                      <label>Image</label>
                      <input type="file" 
                             name="image"
                      >
                    </div>
                    <div class="form-group">
                      <label>Mô tả</label>
                      <input type="text" 
                             class="form-control"
                             name="describe"
                             placeholder="Nhập tên danh mục"
                      >
                    </div>
                    
                    <div class="form-group">
                      <label>ID category</label>
                      <input type="id" 
                             class="form-control"
                             name="category_id"
                             placeholder="Nhập tên danh mục"
                      >
                    </div>

                    <div class="form-group">
                      <label>Gía sản phẩm</label>
                      <input type="text" 
                             class="form-control"
                             name="price"
                             placeholder="Nhập tên danh mục"
                      >
                    </div>

                    <div class="form-group">
                      <label>Số lượng</label>
                      <input type="text" 
                             class="form-control"
                             name="quantity"
                             placeholder="Nhập tên danh mục"
                      >
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
  
