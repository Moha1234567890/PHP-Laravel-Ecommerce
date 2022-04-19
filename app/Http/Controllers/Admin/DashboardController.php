<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class DashboardController extends Controller
{


    public function users() {

        $users = User::all();

        return view('admin.users.index', compact('users'));
    }


    public function userDetails($id) {

        $user = User::find($id);

        return view('admin.users.single', compact('user'));

    }
}
