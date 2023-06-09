
<!-- Stored in resources/views/child.blade.php -->
 
@extends('layouts.admin')
 
@section('title')
  <title>Trang Chủ</title>


@endsection
 
 
@section('content')
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'menus', 'key' => 'Add'])
    
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <form action="{{ route('menus.store') }}" method="post">
                  @csrf
                  <div class="form-group">
                      <label>Tên menu</label>
                      <input type="text" 
                             class="form-control"
                             name="name"
                             placeholder="Nhập tên menu"
                      >
                  </div>

                  <div class="form-group">
                    <label>Chọn menu cha</label>
                    <select class="form-control" name="parent_id">
                      <option value="0">Chọn danh mục cha</option>
                      {!! $optionSelect !!}
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>



        </div>
      </div>
    </div>
  </div>

@endsection
  
