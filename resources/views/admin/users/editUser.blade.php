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
        <form action="{{route('admin.users.update', ['user' => $user])}}" method="post">
            @method('PUT')
            @csrf

            <div class="form-group">
                <label class="control-label" for="name">نام و نام خانوادگی</label>
                <input type="text"  name="name"  value="{{$user->name}}"  placeholder="نام و نام خانوادگی"  id="name" class="form-control" />
            </div>

            <div class="form-group">
                <label class="control-label" for="username">نام کاربری</label>
                <input type="text"  name="username"  value="{{$user->username}}"  placeholder="نام کاربری"  id="username" class="form-control" />
            </div>

            <div class="form-group">
                <label class="control-label" for="email">ایمیل</label>
                <input type="text"  name="email"  value="{{$user->email}}"  placeholder="ایمیل"  id="email" class="form-control" />
            </div>

            <div class="form-group">
                <label class="control-label" for="age">سن</label>
                <input type="number"  name="age"  value="{{$user->age}}"  placeholder="سن"  id="age" class="form-control" />
            </div>



            <div class="form-group required">
                <label for="gender" class="col-sm-1 control-label">جنسیت</label>
                  <select name="gender_id" id="gender" class="custom-select form-control col-sm-2  required">

                        @if( $user->gender_id == 1)
                            <option value="1" selected>خانم</option>
                            <option value="2">آقا</option>
                        @endif


                        @if( $user->gender_id == 2)
                            <option value="1">خانم</option>
                            <option value="2" selected>آقا</option>
                        @endif

                  </select>
            </div>

            <div class="form-group my-5">
                <input type="submit"  value="ویرایش"  class="btn btn-warning col-sm-1 control-label">
            </div>

        </form>
    </div>

@endsection
