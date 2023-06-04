<?php

namespace App\Http\Controllers;

use App\Http\Utility\Hashs;
use App\Models\User;
use App\Models\UserRole;
use App\Models\Users;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function show()
{

}
    public function list()
    {
        $user = DB::table('users')->get();
        return view('user.list',['user'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }
    public function createUser(Request $request)
    {
        $user = new Users();
        $user->name = $request->input('name');
        $user->lastName = $request->input('lastName');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->created_date =   Carbon::now();

        $hash = new Hashs();
        $user->password = $hash->Encode($request->input('password'));
        $user->save();
        $role = $request->input('role');
        $userId = DB::table('users')->where('email', $request->input('email'))->first();
        $roleId = DB::table('roles')->where('name', $request->input('role'))->first();
        $userRole = new UserRole();
        $userRole->UserId = $userId->id;
        $userRole->RoleId = $roleId->id;
        $userRole->save();
        return redirect('/user/list');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $users = Users::find($id);
        return view('user.edit',['data'=>$users]);
    }
    public function editUser(Request $request)
    {
        $user = Users::findOrFail($request->input('id'));
        $user->name = $request->input('name');
        $user->lastName = $request->input('lastName');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->created_date =   Carbon::now();

        $hash = new Hashs();
        $user->password = $hash->Encode($request->input('password'));
        $user->save();
        return redirect('/user/list');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Users::find($id);

        if ($data) {
            $data->name = $request->input('name');
            $data->lastName = $request->input('lastName');
            $data->phone = $request->input('phone');
            $data->email = $request->input('email');
            $data->password = $request->input('password');
            $data->save();

            return redirect()->route('admin_users')->with('success', 'User Information Updated');
        }

        return redirect()->route('admin_users')->with('error', 'User not found');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Users $users, $id)
    {
        $user = $users->find($id);

        if ($user) {
            $user->delete();
        }

        return redirect()->back();
    }
}
