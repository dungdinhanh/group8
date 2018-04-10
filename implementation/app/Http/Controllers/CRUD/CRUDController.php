<?php
/**
 * Created by PhpStorm.
 * User: dungda_pc
 * Date: 25/03/2018
 * Time: 08:00
 */

namespace App\Http\Controllers\CRUD;

use App\Student;
use App\Teacher;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\Diff\Output\StrictUnifiedDiffOutputBuilderIntegrationTest;


class CRUDController
{
    public function showEditForm(){
        return view('crud.edit_form');
    }

    public function edit(Request $request)
    {
        $user = Auth::user()->user_name;
        $user = User::where('user_name', $user)->first();
        $user->full_name = $request['full_name'];
        $user->email = $request['email'];
        $user->date_of_birth = $request['date_of_birth'];
//        $user->role_id = $request['role_id'];
        //$role = None;
        //near future can update roles because if we need to change roles we need to
        //change in the 3 tables;
        $user->save();
        return redirect('/user/profile');
    }


    public function showProfile()
    {
        return view('crud.profile');
    }
}