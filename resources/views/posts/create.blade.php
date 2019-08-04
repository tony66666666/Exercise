@extends('layouts.master')
@section('title', '公告系統')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>新增公告</h2>
                <a href="{{ route('posts.index') }}" class="btn btn-secondary">返回</a>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('posts.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="title">標題</label>
                        <input type="text" class="form-control" name="title" id="title" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="content">內容</label>
                        <textarea name="content" id="content" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="files">附件</label>
                        <input type="file" class="form-group" name="files[]" id="files" multiple>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">儲存</button>
                </form>
            </div>
        </div>
    </div>
@endsection
