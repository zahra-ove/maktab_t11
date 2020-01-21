@extends('admin.layouts.master')

@section('content')

@if(session('status'))
<div class="container alert alert-success">
    {{session('status')}}
</div>
@endif


<div class="container ">
    <a href="{{route('admin.products.create')}}" class="btn btn-sm btn-outline-warning">افزودن محصول جدید</a>
</div>
<div class="col-auto my-4">
    <table class="table-responsive-sm  table-bordered table-hover text-center mytable">
        <thead class="thead-light">
            <tr>
                <th>Id</th>
                <th>کد محصول</th>
                <th>نام محصول</th>
                <th>قیمت</th>
                <th>موجودی</th>
                <th>دسته بندی</th>
                {{-- <th>تصویر</th> --}}
                <th>تنظیمات</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->product_code}}</td>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->product_price}}</td>
                    <td>{{$product->product_count}}</td>
                    <td>{{$product->category->category_name}}</td>
                    {{-- <td>{{$product->pimages->pimage_name}}</td> --}}
                    <td>
                        <div class="btn-group">
                        <a href="{{ route('admin.products.edit', ['product' => $product] ) }}" class="btn btn-sm btn-primary">ویرایش</a>

                        <form action="{{route('admin.products.destroy', ['product' => $product])}}" method="post">
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
