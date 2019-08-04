@extends('layouts.master')
@section('title', '公告系統')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>最新公告</h2>
            @auth
            <a href="{{ route('posts.create') }}" class="btn btn-success">新增公告</a>
            @endauth
        </div>
        <div class="col-12">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>
                        發表時間
                    </th>
                    <th>
                        標題
                    </th>
                    <th>
                        發表人
                    </th>
                    <th>
                        點閱數
                    </th>
                </tr>
                </thead>
                <thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>
                            {{ $post->created_at }}
                        </td>
                        <td>
                            <a href="{{ route('posts.show',$post->id) }}">{{ $post->title }}</a>
                        </td>
                        <td>
                            {{ $post->user_id }}
                        </td>
                        <td>
                            {{ $post->views }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection

