@extends('admin.layouts.master')

@section('content')



    @if(session('status'))
        <div class="container alert alert-success">
            {{session('status')}}
        </div>
    @endif

    <div class="container ">
        <a href="{{route('admin.categories.create')}}" class="btn btn-sm btn-outline-warning">افزودن دسته بندی جدید</a>
    </div>
    <div class="col-auto my-4">
        <table class="table-responsive-sm  table-bordered table-hover text-center mytable">
            <thead class="thead-light">
                <tr>
                    <th>Id</th>
                    <th>نام دسته بندی</th>
                    <td>تنظیمات</td>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->category_name}}</td>
                        <td>
                            <div class="btn-group">
                            <a href="{{ route('admin.categories.edit', ['category' => $category] ) }}" class="btn btn-sm btn-primary">ویرایش</a>

                            <form action="{{route('admin.categories.destroy', ['category' => $category])}}" method="post">
                                @method('DELETE')
                                @csrf

                                <button class="btn btn-sm btn-danger">حذف</button>
                            </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



@endsection
