@extends('admin.layouts.index')

@section('title', 'Ubah Setting Akun')

@section('link')
<li class="breadcrumb-item "><a href="{{ route('setting-akun.index') }}">Setting Akun</a></li>
<li class="breadcrumb-item active">Ubah Setting Akun</li>
@endsection

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Form Ubah Setting Akun</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('setting-akun.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nama User</label>
                    <input type="text" class="form-control" id="name" value="{{ $user->name }}" disabled>
                </div>
                <div class="form-group">
                    <label for="role_id">Role</label>
                    <select name="role_id" id="role_id" class="custom-select form-control-border border-width-2">
                        <option value="{{ $user->role->id }}">{{ $user->role->name }}</option>
                        @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="status_id">Status</label>
                    <select name="status_id" id="status_id" class="custom-select form-control-border border-width-2">
                        <option value="{{ $user->status->id }}">{{ $user->status->name }}</option>
                        @foreach ($statuses as $status)
                        <option value="{{ $status->id }}">{{ $status->name }}</option>
                        @endforeach
                    </select>
                </div>
                {{-- <div class="form-group">
                    <label for="phone">Nomer WA</label>
                    <input name="phone" type="text" class="form-control" id="phone" value="{{ $user->phone }}">
                </div> --}}
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
