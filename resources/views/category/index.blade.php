
<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.admin')

@section('title')
  <title>Trang Chủ</title>


@endsection


@section('content')
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'category', 'key' => 'List'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <a href="{{ route('category.create') }}" class="btn btn-success float-right m2"> ADD</a>
          </div>
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Tên sản phẩm</th>
                  <th scope="col">Hình ảnh</th>
                  <th scope="col">Mô tả</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>

              @foreach($category as $category)
                <tr>
                  <th scope="row">{{ $category->id }}</th>

                  <td>{{ $category->name }}</td>

                  <td>
                    <img style="width:80px;" src="image/{{ $category->image }}" alt="">
                  </td>

                  <td>{{ $category->describe }}</td>
                  
                  <td>
                    <form action="{{ route('category.destroy', $category) }}" method="POST">
                        <a href="{{ route('category.edit',$category) }}" class="btn btn-info">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xoa</button>
                    </form>
                  </td>
                </tr>
              @endforeach

              </tbody>
            </table>
          </div>
          <div class="col-md-12">
            {{-- {{ $category->links() }} --}}
          </div>
            
        </div>

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

