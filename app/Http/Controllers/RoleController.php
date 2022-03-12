<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user.role.index');
    }
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allRoles()
    {
        $data = Role::all();

        $list ='';
        $count = 1;
        foreach($data as $role){
            
          $per_list =  '<ul>'; 

         foreach(json_decode($role-> permission)as $per){

            $per_list.= '<li>' .$per. '</li>'; 

         }
        
         $per_list.=  '</ul>';
            
            $list .='<tr>';

            $list .='<td>'. $count;  $count++.'</td>';
            $list .='<td>'. $role-> name .'</td>';
            $list .='<td>'. $role-> slug .'</td>';
            $list .='<td>'. $per_list .'</td>';
            $list .='<td><label class="switch">
            <input type="checkbox" checked>
            <span class="slider round"></span>
          </label> </td>';

          $list .='<td><a class="btn btn-info btn-sm" href="">Edit</a>
          <a class="btn btn-danger btn-sm delete-btn" delete_id = "'.$role-> id.'"href="#">Delete</a> </td>';

            $list .='</tr>';
        
       }

       return $list;
        
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
        Role::create([

        'name'       => $request-> name,
        'slug'       => Str::slug($request-> name),
        'permission' => json_encode($request-> permission)


        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        //
    }

    // Delete Roles 

    public function delRoles($id)
    {
       
        $delete_info = Role::find($id);

        $delete_info -> delete();
    }
}
