<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
        // Role::create(['name' => 'Admin']);
        // Role::create(['name' => 'Client']);

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

        // $role = Role::find(1);
        // // $permission = Permission::find(1);
        // for ($i=1; $i <= 14; $i++) { 
        //     $permission = Permission::find($i);
        //     $role->givePermissionTo($permission);
        // }
        // $role->givePermissionTo($permission);

        // if(auth()->user()){
        //     auth()->user()->assignRole('Admin');
        //   }


        return view('controller-account');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
