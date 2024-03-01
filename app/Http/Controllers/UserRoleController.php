<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class UserRoleController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         // USERS TABLE
        $users = DB::connection('sqlsrv')->table('AspNetUsers')->get();

        return view('pages.userRoles.index', [
            'users' => $users,
        ]);
    }


    /**
     * Admin Edit User Profile
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function editProfile($Id)
    {

        // Fetch USERS TABLE
        $user = DB::connection('sqlsrv')->table('AspNetUsers')->where('Id', $Id)->first();
        return view('pages.userRoles.editProfile', [
            'user' => $user,
        ]);
    }



}
