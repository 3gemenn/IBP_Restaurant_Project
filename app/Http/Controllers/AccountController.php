<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Utility\Hashs;
use App\Models\Login;
use App\Models\Register;
use App\Models\UserRole;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
class AccountController extends Controller
{
    public function login()
    {
        return view('account.login');
    }
    public function login_check(Request $request)
    {
        $query = DB::table('users')
            ->where('email',$request->input('email'))
            ->exists();
        if ($query){
            $user = DB::table('users')->where('email', $request->input('email'))->first();
            if (Hash::check($request->input('password'),$user->password))
            {
                $userRole = DB::table('user_roles')->where('UserId', $user->id)->first()->RoleId;
                $role = DB::table('roles')->where('id',$userRole )->first();
                if($role->name == "Admin")
                {
                    $nameLastname = $user->name;
                    session(['user_id' => $user->id, 'username' => $nameLastname]);

                    return redirect("/admin");
                }
                else if($role->name == "Customer")
                {
                    $nameLastname = $user->name;
                    session(['user_id' => $user->id, 'username' => $nameLastname]);
                    return redirect("/home/menu");
                }
                else{
                    return redirect("/account/login");
                }
            }
            else
            {
                return redirect("/account/login");
            }

        }

    }
    public function logout()
    {
        session()->forget('user_id');
        session()->forget('username');
        return redirect('/home/menu');
    }
    public function register()
    {
        return view('account.register');
    }
    public function registerPost(Request $request)
    {
        $query = DB::table('users')
            ->where('email',$request->input('email'))
            ->exists();
        if ($query){
            //Kayıtlı
        }
        else{
            //kayıtsız
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
            $userRole->RoleId = 2;
            $userRole->save();
            return redirect('/account/login');
        }



    }
    public function profile($id)
    {
        $users = Users::find($id);
        return view('account.profile',['data'=>$users]);
    }
    public function edit(Request $request,$id)
    {
        $users = Users::find($id);
        return view('home.menu',['data'=>$users]);
    }
    public function userEdit(Request $request)
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
        return redirect('/');
    }

}
