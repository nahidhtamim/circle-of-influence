<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tenant;
use App\Models\Influencer;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $user_influencers = Influencer::all();
        // $users = User::with('user_tenant')->get();
        $tenants = Tenant::all()->where('tenant_status', '!=', 0);
        return view('admin.user.index', compact('users', 'tenants', 'user_influencers'));
        
    }

    public function updateUserTenant($id, Request $request)
    {
        $user_tenant = User::find($id);
        $user_tenant->tenant_id = $request->input('tenant_id');
        $user_tenant->update();
        return redirect('/users')->with('status', 'User Tenant Updated Successfully');
    }


    public function editUser($id)
    {
        $user = User::find($id);
        return view('admin.user.editUser',compact('user'));
    }

    public function updateUser($id, Request $request)
    {
        $user = User::find($id);
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->mobile = $request->input('mobile');
        $user->address = $request->input('address');
        $user->update();
        return redirect('/users')->with('status', 'User Updated Successfully');
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/users')->with('status', 'User Deleted Successfully');
    }

    public function updateUserRole($id)
    {
        $user = User::find($id);
        if($user->role_as =='1'){
            $user->role_as = '0';
        }
        elseif($user->role_as =='0'){
            $user->role_as = '1';
        }
        $user->update();
        return redirect('/users')->with('status', 'User Role Updated Successfully');
    }


    // public function UserInfluencer()
    // {
    //     $user_influencers = User_Influencer::find();
    //     return view('admin.user.editUser',compact('user'));
    // }

}
