@extends('admin.layouts.master')

@section('content')

    <div class="container">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h2>افزودن دسته بندی جدید</h2>
        <br><br>
        <form action="{{route('admin.categories.store')}}" method="post">
            @csrf

            <div class="form-group">
                <label class="control-label" for="category_name" >نام دسته بندی  </label>
                <input type="text"  name="category_name"  placeholder="نام دسته بندی"  id="category_name" class="form-control" value="{{old('category_name')}}" required/>
            </div>

            <div class="form-group my-5">
                <input type="submit"  value="افزودن"  class="btn btn-primary col-sm-1 control-label">
            </div>

        </form>
    </div>

@endsection
