<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
    }
    public function create()
    {
        $role = new Role();
        $role->name='Admin';
        $role->key_name='admin';
        $role->save();
    }
    public function update()
    {
        $role = Role::find(1);
        $role->name='Manager';
        $role->key_name='manager';
        $role->save();
    }
    public function delete()
    {
        $role = Role::find(1);
        $role->delete();
    }
}
