<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

use App\Models\User;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // 1458912
        // Role::create(['name' => 'Admin']);
        // Role::create(['name' => 'Manage']);
        // Role::create(['name' => 'Staff']);

        // Role::create(['name' => 'User']);

        // Permission::create(['name' => 'edit alumnus']);
        // Permission::create(['name' => 'add alumnus']);
        // Permission::create(['name' => 'delete alumnus']);
        // Permission::create(['name' => 'publish alumnus']);

        // Permission::create(['name' => 'edit department']);
        // Permission::create(['name' => 'add department']);
        // Permission::create(['name' => 'delete department']);
        // Permission::create(['name' => 'publish department']);

        // Permission::create(['name' => 'edit subjects']);
        // Permission::create(['name' => 'add subjects']);
        // Permission::create(['name' => 'delete subjects']);
        // Permission::create(['name' => 'publish subjects']);

        // Permission::create(['name' => 'edit account']);
        // Permission::create(['name' => 'delete account']);

        // $role = Role::find(3);
        // // $permission = Permission::find(1);
        // $my_array = array(4,8,12);
        // for ($i=0; $i < count($my_array); $i++) { 
        //     $permission = Permission::find((int)$my_array[$i]);
        //     $role->givePermissionTo($permission);
        // }
        // $role->givePermissionTo($permission);

        // if(auth()->user()){
        //     auth()->user()->assignRole('Admin');
        //   }
        // return view('controller-account');
        $user = User::paginate(5);
        return view('controller-account', compact('user')) -> with('i', (request() -> input('page', 1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('myaccount');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $namerole = $user->roles->first()->name;
        $role = Role::orderBy('id','DESC')->get();
        $allcolumnrole = $user->roles->first();
        return view('editaccount', compact('user', 'role', 'allcolumnrole', 'namerole'));
    }

    
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $data = $request->all();
        $user->update($data);
        $user->syncRoles($data['role']);
        if (auth()->user()->roles->first()->name == "Admin") {
            return redirect()->route('controller-account')->with('thognbao', 'Cập Nhật Tài Khoản Thành Công!');
        }else {
            return redirect()->route('myaccount')->with('thognbao', 'Cập Nhật Tài Khoản Thành Công!');
        }
    }

    
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('controller-account')->with('thognbao', 'Xóa Tài Khoản Thành Công!');

    }
}
