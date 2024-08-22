@extends('admins.layouts.master')
@section('content')
    <div class="col-lg-12">
        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @php
        $erro = session('success');
        unset($erro);
    @endphp
        <div class="card">
            <div class="card-header"><strong>Sửa</strong><small> Form</small></div>
            <form action="{{ route('admins.update', $data->id) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="card-body card-block">
                    <div class="form-group">
                        <label for="company" class=" form-control-label">Tên Danh Mục</label>
                        <input type="text" id="company" placeholder="Vui lòng nhập vào tên Danh Mục"
                            class="form-control" name="danh_muc" value="{{ $data->danh_muc }}">
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="mySwitch" name="trang_thai" value="1"
                            @if ($data->trang_thai) checked @endif>
                        <label class="form-check-label" for="mySwitch">Trang Thái</label>
                    </div>
                    <button type="submit" class="btn btn-success"> Sửa</button>

                </div>
            </form>

        </div>
    </div>
@endsection
@section('script')
@endsection
@section('style')
@endsection
