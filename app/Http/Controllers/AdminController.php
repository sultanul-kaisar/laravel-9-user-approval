<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function ActiveUser($id){
        User::findOrFail($id)->update(['active_status' => 0]);
        return redirect()->back();

    }


    public function InactiveUser($id){
        User::findOrFail($id)->update(['active_status' => 1]);
        return redirect()->back();

    }


    public function DeleteUser($id){
        User::findOrFail($id)->delete();
        return redirect()->back();

    }
}
