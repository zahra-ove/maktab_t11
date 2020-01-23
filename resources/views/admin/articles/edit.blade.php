@extends('admin.layouts.master')

@section('content')

<div class="container text-center">

    {{-- <div style="width:70%;" class="mx-auto"> --}}
        <form action="{{route('admin.articles.update', ['article' => $article])}}"  method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">عنوان مقاله</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="عنوان مقاله را در این قسمت وارد نمایید " value="{{$article->article_title}}">
            </div>

            {{-- <br/> --}}

            <div  class="form-group" >
                <label for="editor">متن مقاله</label>
                <div class="jumbotron">
                    <textarea name="body" id="editor" row="30" class="form-control" value="{{$article->article_body}}">{{$article->article_body}}</textarea>
                </div>
            </div>


            <div  class="form-group" >
                <label for="img">آپلود تصویر مقاله</label>
                <input type="file" name="image" id="img" >
            </div>

            <br/><br/>
            <div class="form-group">
                <button type="submit" class="btn btn-primary mx-auto">ذخیره</button>
            </div>

        </form>
</div>

@endsection
