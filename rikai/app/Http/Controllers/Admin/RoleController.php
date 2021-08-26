<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use App\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        $roler = Role::where('name','=','admin')->first();
        $permissions = Permission::all();
        $permis = $roler->permissions()->get();
        return View('admin.user.addrole')->with(array('roles'=>$roles,'permissions'=>$permissions,'roler'=>$roler,'permis'=>$permis));
    
    }

    public function indexroleuser()
    {
        $users = User::all();
        $roles = Role::all();
        $roler = Role::where('name','=','admin')->first();
        $mans = $roler->users()->get();
        return View('admin.user.addroleuser')->with(array('users'=>$users,'roles'=>$roles,'roler'=>$roler,'mans'=>$mans));
    
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
        $role_id = $request->role_id;
        $role = Role::find($role_id);
        if($role){
            $checkRole = Role::where('id',$role_id)->withCount('permissions')->get()->toArray();
            if($checkRole[0]['permissions_count']>0){
               $role->permissions()->detach();//delete all relationship in role_permission
            }
            $role->permissions()->attach($request->permissions);//add list permissions
            $message = 'message.add_role_success';
            return redirect()->route('homeadmin.index')->withMessage(__($message));
             
        }
        $message = 'message.no_role';
        return redirect()->route('homeadmin.index')->withMessage(__($message));

    }

    public function storeRole(Request $request)
    {
        $role = Role::find($request->role_id);
        if($role){
            $role->users()->detach($request->users);
            $role->users()->attach($request->users);
            $message = 'message.add_roleuser_success';
            return redirect()->route('homeadmin.index')->withMessage(__($message));
        }
        $message = 'message.no_role';
        return redirect()->route('homeadmin.index')->withMessage(__($message));
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

    public function roleTypePermission($id){
        $roler = Role::find($id);
        $roles = Role::All();
        $permissions = Permission::all();
        $permis = $roler->permissions()->get();
        return view('admin.user.addrole')->with(array('roles'=>$roles,'permissions'=>$permissions,'roler'=>$roler,'permis'=>$permis));
    }

    public function roleType($id){
        $users = User::all();
        $roles = Role::all();
        $roler = Role::find($id);
        $mans = $roler->users()->get();
        return View('admin.user.addroleuser')->with(array('users'=>$users,'roles'=>$roles,'roler'=>$roler,'mans'=>$mans));
    }
}
