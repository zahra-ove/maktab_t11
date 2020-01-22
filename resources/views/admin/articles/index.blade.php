@extends('admin.layouts.master')

@section('content')

<div>
    <h1>مقالات</h1>
</div>

{{-- @if(!empty($status))
    <div class="alert alert-success">
        {{$status}}
    </div>
@endif --}}

@if(session('status'))
<div class="container alert alert-success alert-dismissable">
    <button class="close text-white" type="button" data-dismiss="alert">&times;&nbsp;&nbsp;</button>
    {{session('status')}}
</div>
@endif


<div class="container ">
    <a href="{{route('admin.articles.create')}}" class="btn btn-sm btn-default">افزودن مقاله جدید</a>
</div>
<br/><br/><hr/>


@if(count($articles) > 0)
    <div class="card-columns">
        {{-- <table class="table-responsive-sm  table-bordered table-hover text-center mytable">
            <thead class="thead-light">
                <tr>
                    <th>Id</th>
                    <th>عنوا مقاله</th>
                    <th>متن مقاله </th>
                    <th>تاریخ ایجاد مقاله</th>
                    <th>آخرین ویرایش مقاله</th>
                    <th>تصویر مقاله</th>
                    <th>تنظیمات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                    <tr>
                        <td>{{$article->id}}</td>
                        <td>{{$article->article_title}}</td>
                        <td>{{$article->article_body}}</td>
                        <td>{{$article->created_at}}</td>
                        <td>{{$article->updated_at}}</td>
                        <td><img src="{{asset('storage/articles/'.$article->article_image)}}"</td>
                        <td>
                            <div class="btn-group">
                            <a href="{{ route('admin.articles.edit', ['article' => $article] ) }}" class="btn btn-sm btn-primary">ویرایش</a>

                            <form action="{{route('admin.articles.destroy', ['article' => $article])}}" method="post">
                                @method('DELETE')
                                @csrf

                                <button class="btn btn-sm btn-danger">حذف</button>
                            </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table> --}}
        @foreach($articles as $article)
            <div class="card text-center" style="width:20rem;">
                <div class="card-img-top">
                    <img src="{{asset('storage/articles/'.$article->article_image)}}">
                </div>

                <div class="card-header bg-secondary">
                    <a  href="{{route('admin.articles.show', ['article' => $article])}}">{{$article->article_title}}</a>
                </div>

                <div class="card-body">
                    <div class="card-text">{!!$article->article_body!!}</div>
                </div>

                <div class="card-footer">
                    <small class="text-muted"><pre>تاریخ انتشار: {{$article->created_at}}</pre></small>
                </div>
            </div>
        @endforeach
    </div>
@else

<h3>{{'هیچ مقاله ایی وجود ندارد.'}}</h3>

@endif

@endsection
