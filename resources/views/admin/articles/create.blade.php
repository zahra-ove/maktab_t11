@extends('admin.layouts.master')

@section('content')

<div class="container">
    <h1>ایجاد مقاله جدید</h1>

    <br/>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <br/><br/><br/>
    <div style="width:70%;" class="mx-auto">
        <form action="{{route('admin.articles.store')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div>
                <label for="title">عنوان مقاله</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="عنوان مقاله را در این قسمت وارد نمایید ">
            </div>

            <br/>

            <div  class="form-group" >
                <label for="editor">متن مقاله</label>
                <div class="jumbotron">
                    <textarea name="body" id="editor" row="30" class="form-control"></textarea>
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
</div>

@endsection
