 
@extends('layouts.admin')
 
@section('title')
  <title>Trang Chủ</title>
@endsection
@section('content')
  <div class="content-wrapper">
    @include('partials.content-header', ['name' => 'ADMIN', 'key' => 'ADMIN'])
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
           <h3 class="btn btn-success float-right m2">thắng</h3>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection