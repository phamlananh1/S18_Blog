@extends('home')
@section('title', 'Chỉnh sửa bai viet')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Chỉnh sửa bai viet</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('blogs.update', $blogs->id) }}">
                    @csrf
                    <div class="form-group">
                        <label>Tieu de bai viet</label>
                        <input type="text" class="form-control" name="title" value="{{ $blogs->name }}" required>
                    </div>
                    <div class="form-group">
                        <label>Gioi thieu</label>
                        <input type="text" class="form-control" name="teaser" value="{{ $blogs->teaser }}" required>
                    </div>
                    <div class="form-group">
                        <label>Noi dung</label>
                        <input type="text" class="form-control" name="content" value="{{ $blogs->content }}" required>
                    </div>
                    <div class="form-group">
                        <label>Ngay tao</label>
                        <input type="date" class="form-control" name="created" value="{{ $blogs->created }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection