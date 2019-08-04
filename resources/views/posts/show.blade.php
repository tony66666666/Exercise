@extends('layouts.master')
@section('title', '公告系統')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>{{ $posts->title }};</h2>
            <a> href="{{ route('posts.index') }}" class="btn btn-secondary btn-sm">返回</a>
        </div>
        <div class="col-12">
<div class="card">
    <div class="card-header">
    </div>
    <div class="card-body">
        {{ $posts->content }}
    </div>
</div>
        </div>
    </div>
</div>
@endsection

