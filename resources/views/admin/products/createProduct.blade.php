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
        <h2>افزودن محصول جدید</h2>
        <br><br>


        <form action="{{route('admin.products.store')}}" method="post">
            @csrf

            <div class="form-group">
                <label class="control-label" for="product_code" > کد محصول  </label>
                <input type="text"  name="product_code"  placeholder="کد محصول"  id="product_code" class="form-control" value="{{old('product_code')}}" required/>
            </div>

            <div class="form-group">
                <label class="control-label" for="product_name">نام محصول</label>
                <input type="text"  name="product_name"  placeholder="نام محصول"  id="product_name" class="form-control" value="{{old('product_name')}}" required/>
            </div>

            <div class="form-group">
                <label class="control-label" for="product_price">قیمت</label>
                <input type="text"  name="product_price"    placeholder="قیمت"  id="product_price" class="form-control" value="{{old('product_price')}}" required/>
            </div>

            <div class="form-group">
                <label class="control-label" for="product_count">موجودی</label>
                <input type="number"  name="product_count"    placeholder="موجودی"  id="product_count" class="form-control" value="{{old('product_count')}}" />
            </div>


            <div class="form-group required">
                <label for="category_id" class="col-sm-1 control-label">دسته بندی</label>
                  <select name="category_id" id="gender" class="custom-select form-control col-sm-2" required/>
                        <option value="" selected>--دسته بندی--</option>
                        <option value="1">کالای دیجیتال</option>
                        <option value="2">آرایشی، بهداشتی و سلامت</option>
                        <option value="3">خودرو، ابزارو اداری</option>
                        <option value="4">مد و پوشاک</option>
                        <option value="5">خانه و آشپزخانه</option>
                        <option value="6">کتاب، لوازم التحریر و هنر</option>
                        <option value="7">اسباب بازی، کودک و نوزاد</option>
                        <option value="8">ورزش و سفر</option>
                        <option value="9">خوردنی و آشامیدنی</option>
                  </select>
            </div>

            {{-- <br/><br/><br/><br/> --}}
            <div class="form-group my-5">
                <input type="submit"  value="افزودن"  class="btn btn-primary col-sm-1 control-label">
            </div>

        </form>
    </div>

@endsection
