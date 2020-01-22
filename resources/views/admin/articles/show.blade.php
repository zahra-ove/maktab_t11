@extends('admin.layouts.master')

@section('content')

<div class="container text-center">


    <div class="col-4">
        <a class="btn btn-warning text-white">ویرایش مقاله</a>
        <a class="btn btn-danger text-white">حذف مقاله</a>
    </div>
</div>

<div class="card text-center">
    <div class="card-img-top">
        <img src="{{asset('storage/articles/'.$article->article_image)}}">
    </div>
    <div class="card-header bg-success-default">{{$article->article_title}}</div>
    <div class="card-body">{{$article->article_body}}</div>
</div>


@endsection
