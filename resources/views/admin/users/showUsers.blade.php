@extends('admin.layouts.master')

@section('content')



    @if(session('status'))
        <div class="container alert alert-success">
            {{session('status')}}
        </div>
    @endif

    <div class="container ">
        <a href="{{route('admin.users.create')}}" class="btn btn-sm btn-outline-warning">افزودن کاربر جدید</a>
    </div>
    <div class="col-auto my-4">
        <table class="table-responsive-sm  table-bordered table-hover text-center mytable">
            <thead class="thead-light">
                <tr>
                    <th>Id</th>
                    <th>نام</th>
                    <th>نام کاربری</th>
                    <th>ایمیل</th>
                    <th>تاریخ عضویت</th>
                    <th>آخرین تغییرات</th>
                    <th>جنسیت</th>
                    <th>تنظیمات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>
                        <td>{{$user->gender->genderName}}</td>
                        <td>
                            <div class="btn-group">
                            <a href="{{ route('admin.users.edit', ['user' => $user] ) }}" class="btn btn-sm btn-primary">ویرایش</a>

                            <form action="{{route('admin.users.destroy', ['user' => $user])}}" method="post">
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
