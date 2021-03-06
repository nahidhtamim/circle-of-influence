<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tenant;
use App\Models\Influencer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $personal_influencers = Influencer::where('type_id', '1')->get();
        $professional_influencers = Influencer::where('type_id', '2')->get();
        $tenants = Tenant::all()->where('tenant_status', '!=', 0);
        return view('admin.user.index', compact('users', 'tenants', 'personal_influencers', 'professional_influencers'));
        
    }



    public function editUser($id)
    {
        $user = User::find($id);
        $tenants = Tenant::all()->where('tenant_status', '!=', 0);
        return view('admin.user.editUser',compact('user', 'tenants'));
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
        $user->tenant_id = $request->input('tenant_id');
        $user->role_as = $request->input('role_as') == TRUE ? '1':'0';
        $user->update();
        return redirect('/users')->with('status', 'User Updated Successfully');
    }

    // public function deleteUser($id)
    // {
    //     $user = User::find($id);
    //     $user->delete();
    //     return redirect('/users')->with('status', 'User Deleted Successfully');
    // }


    public function adminProfile($id)
    {
        $profile = User::find($id);

        return view('admin.user.adminProfile', compact('profile'));

    }

    public function updateAdminProfile($id, Request $request)
    {
        $profile = User::find($id);
        $profile->first_name = $request->input('first_name');
        $profile->last_name = $request->input('last_name');
        $profile->mobile = $request->input('mobile');
        $profile->address = $request->input('address');
        $profile->update();
        return redirect('/dashboard')->with('status', 'User Updated Successfully');
    }

    public function updateAdminPassword($id, Request $request)
    {
        $profile = User::find($id);
        $profile->password = Hash::make($request->input('password'));
        $profile->update();
        return redirect('/dashboard')->with('status', 'User Updated Successfully');
    }

}
