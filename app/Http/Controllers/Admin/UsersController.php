<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\User;
use App\Gender;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('gender')->get();
        // return $users;
        return view('admin.users.showUsers')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.createUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
            'age' => 'nullable|numeric',
            'gender_id' => 'required|numeric'
        ]);

        $newUser = new User();

        $newUser->name = $request->post('name');
        $newUser->username = $request->post('username');
        $newUser->email = $request->post('email');
        $newUser->password = $request->post('password');
        $newUser->age = $request->post('age');
        $newUser->gender_id = $request->post('gender_id');

        $newUser->save();

        return redirect('admin/users')->with('status', 'New user is added.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.editUser')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $suser = User::find($id);

        $request->validate([
            'name'       => 'required|string',
            'username'   => 'required|string',
            'gender_id'  => 'required|numeric',
            'age'        => 'required|numeric',
            'email'      => [
                'required',
                Rule::unique('users')->ignore($suser->id),
            ],
         ]);

         $suser->name        =  $request->post('name');
         $suser->username    =  $request->post('username');
         $suser->age         =  $request->post('age');
         $suser->gender_id   =  $request->post('gender_id');
         $suser->email       =  $request->post('email');
         $suser->save();

         return redirect()->route('admin.users.index')->with('status', 'User is updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('admin/users')->with('status', 'کاربر با موفقیت حذف شد.');
    }
}
