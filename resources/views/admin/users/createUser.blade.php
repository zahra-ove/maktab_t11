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
        <h2>افزودن کاربر جدید</h2>
        <br><br>
        <form action="{{route('admin.users.store')}}" method="post">
            @csrf

            <div class="form-group">
                <label class="control-label" for="name" >نام و نام خانوادگی</label>
                <input type="text"  name="name"  placeholder="نام و نام خانوادگی"  id="name" class="form-control" value="{{old('name')}}" required/>
            </div>

            <div class="form-group">
                <label class="control-label" for="username">نام کاربری</label>
                <input type="text"  name="username"  placeholder="نام کاربری"  id="username" class="form-control" value="{{old('username')}}" required/>
            </div>

            <div class="form-group">
                <label class="control-label" for="email">ایمیل</label>
                <input type="text"  name="email"    placeholder="ایمیل"  id="email" class="form-control" value="{{old('email')}}" required/>
            </div>

            <div class="form-group">
                <label class="control-label" for="age">سن</label>
                <input type="number"  name="age"    placeholder="سن"  id="age" class="form-control" value="{{old('age')}}" />
            </div>


            <div class="form-group">
                <label class="control-label" for="password">رمز عبور</label>
                <input type="text"  name="password"   placeholder="رمز عبور"  id="password" class="form-control" required />
            </div>

            <div class="form-group">
                <label class="control-label" for="confirmPassword">تکرار رمز عبور</label>
                <input type="text"  name="password_confirmation"   placeholder="تکرار رمز عبور"  id="confirmPassword" class="form-control" required />
            </div>

            <div class="form-group required">
                <label for="gender" class="col-sm-1 control-label">جنسیت</label>
                  <select name="gender_id" id="gender" class="custom-select form-control col-sm-2" required/>
                        <option value="" selected>--جنسیت--</option>
                        <option value="1">خانم</option>
                        <option value="2">آقا</option>
                  </select>
            </div>

            {{-- <br/><br/><br/><br/> --}}
            <div class="form-group my-5">
                <input type="submit"  value="افزودن"  class="btn btn-primary col-sm-1 control-label">
            </div>

        </form>
    </div>

@endsection
