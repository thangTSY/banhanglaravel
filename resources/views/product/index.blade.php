
@extends('layouts.admin')
@section('title')
  <title>Trang Chủ</title>

@endsection
@section('content')
  <div class="content-wrapper">
    @include('partials.content-header', ['name' => 'product', 'key' => 'List'])
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 "> 
            <div class="search-container">
              <form action="{{ route('product.search') }}"method="POST">
                @csrf
                <input type="text" name="keyword" placeholder="Tìm kiếm...">
                <button type="submit"><i class="fa fa-search"></i></button>
              </form>
              <a href="{{ route('product.create') }}" class="butonn"><h2 class="h1">Thêm sản phẩm</h2></a>
            </div>
          </div>
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Tên sản phẩm</th>
                  <th scope="col">Hình ảnh</th>
                  <th scope="col">giá sản phẩm</th>
                  <th scope="col">Số lượng</th>
                  <th scope="col">Mô tả</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
              @foreach($product as $product)
                <tr>
                  <th scope="row">{{ $product->id }}</th>
                  <td>{{ $product->name }}</td>
                  <td>
                    <img style="width:80px;" src="{{ asset('Thumnals/'.$product->image) }}" alt="">
                  </td>
                  <td>{{ $product->price }}</td>
                  <td>{{ $product->quantity }}</td>
                  <td>{{ $product->describe }}</td>
                  <td>
                    <form action="{{ route('product.destroy', $product) }}" method="POST">
                        <a href="{{ route('product.edit',$product) }}" class="btn btn-info">Edit</a>
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
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

