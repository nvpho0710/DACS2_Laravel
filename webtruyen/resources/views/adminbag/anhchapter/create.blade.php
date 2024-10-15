@extends('layouts.app')
@section('title')
    {{ $chapter->truyen->tentruyen }}
    {{ $chapter->tenchapter }} Thêm ảnh
@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Thêm ảnh cho {{ $chapter->tenchapter }}
                    của truyện {{ $chapter->truyen->tentruyen }}</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                INPUT
                                <small>Different sizes and widths</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            @include('error.error')
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <form method="POST" action="{{ route('adminanhchapter.store') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <h2 class="card-inside-title">Tên truyện</h2>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="tentruyen" class="form-control"
                                                    placeholder="Nhập tên truyện..."
                                                    value="{{ $chapter->truyen->tentruyen }}" readonly>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">Chapter</h2>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="chapter" class="form-control"
                                                    value="{{ $chapter->tenchapter }}" readonly>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">ID Chapter</h2>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="chapter_id" class="form-control"
                                                    value="{{ $chapter->id }}" readonly>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">Hình ảnh truyện</h2>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input accept="image/gif, image/jpg, image/jpeg, image/png" type="file" multiple class="form-control-file" name="hinhanh[]">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-primary">Thêm</button>
                                            <a href="{{ route('adminchapter.edit', [$chapter->id]) }}"
                                                class="btn btn-danger">Hủy</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Input -->
        </div>
    </section>
@endsection
