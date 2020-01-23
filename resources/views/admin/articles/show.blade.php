@extends('admin.layouts.master')

@section('content')

<div class="container text-left">


    <div class="col-4  btn-group">
        <a href="{{route('admin.articles.edit', ['article' => $article])}}" class="btn btn-warning text-white">ویرایش مقاله</a>
        <form action="{{route('admin.articles.destroy', ['article' => $article])}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger text-white">حذف مقاله</button>
        </form>
        <a href="{{route('admin.articles.index')}}" class="btn btn-secondary">بازگشت</a>
    </div>
</div>

<div class="card text-center">
    <div class="card-img-top mb-3">
        <img src="{{asset('storage/articles/'.$article->article_image)}}">
    </div>
    <div class="card-header bg-secondary">{{$article->article_title}}</div>
    <div class="card-body">{!!$article->article_body!!}</div>
</div>


@endsection
