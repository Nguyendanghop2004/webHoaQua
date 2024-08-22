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
        <a href="{{ route('admins.export') }}" class="btn btn-warning"> tai file excel</a>
        <div class="card">
            <div class="card-header"><strong>Thêm mới</strong><small> Form</small></div>
            <form action="{{ route('admins.import') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">

                    <input id="user-file" type="file" name="danh_muc" class="hidden" accept=".xlsx, .xls, .csv, .ods">
                </div>
                <button class="btn btn-success" type="submit">Thêm mới</button>
            </form>

        </div>
    </div>
@endsection
@section('script')
@endsection
@section('style')
@endsection
