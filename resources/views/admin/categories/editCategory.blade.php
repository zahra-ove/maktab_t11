@extends('admin.layouts.master')

@section('content')

    <div class="container">
        <h2>ویرایش  پروفایل</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <br><br>
        <form action="{{route('admin.categories.update', ['category' => $category])}}" method="post">
            @method('PUT')
            @csrf

            <div class="form-group">
                <label class="control-label" for="category_name">نام دسته بندی</label>
                <input type="text"  name="category_name"  value="{{$category->category_name}}"  placeholder="نام دسته بندی  "  id="category_name" class="form-control" />
            </div>



            <div class="form-group my-5">
                <input type="submit"  value="ویرایش"  class="btn btn-warning col-sm-1 control-label">
            </div>

        </form>
    </div>

@endsection
