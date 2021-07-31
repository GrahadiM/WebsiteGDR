@extends('admin.layouts.index')

@section('title', 'Dashboard')

@section('link')
<li class="breadcrumb-item active">Dashboard</li>
@endsection

@section('content')
<div class="col-lg-3 col-12">
    <!-- small box -->
    <div class="small-box bg-info">
        <div class="inner">
            <h3>{{ $customer->count() }}</h3>
            <p>Total Customer</p>
        </div>
        <div class="icon">
            <i class="far fa-user"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<div class="col-lg-3 col-12">
    <!-- small box -->
    <div class="small-box bg-info">
        <div class="inner">
            <h3>{{ $mandor->count() }}</h3>
            <p>Total Mandor</p>
        </div>
        <div class="icon">
            <i class="fas fa-user-tie"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<div class="col-lg-3 col-12">
    <!-- small box -->
    <div class="small-box bg-info">
        <div class="inner">
            <h3>{{ $pesanan->count() }}</h3>
            <p>Total Pesanan</p>
        </div>
        <div class="icon">
            <i class="far fa-file-alt"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<div class="col-lg-3 col-12">
    <!-- small box -->
    <div class="small-box bg-info">
        <div class="inner">
            <h3>{{ $progres->count() }}</h3>
            <p>Total Progres</p>
        </div>
        <div class="icon">
            <i class="fas fa-hourglass-half"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<div class="col-12">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Title</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        Start creating your amazing application!
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        Footer
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->
</div>
@endsection