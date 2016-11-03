<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\UserRegistration;

class ProfileController extends Controller
{
    public function getProfile()
    {
        $user = Auth::user();
        $userId = $user->id;
        $userRoleId = $user->role_id;
        $profile = User::join('user_registrations', 'user_id', '=', 'users.id')
            ->where('users.id', $userId)
            ->select('users.id', 'user_name', 'email', 'role_id', 'first_name', 'last_name', 'department_id')
            ->first();
        switch ($userRoleId) {
            case '1':
                return view('pages.admin.getProfile')->with('profile',$profile);
                break;
            case '2':
                return view('pages.asset-manager.getProfile')->with('profile',$profile);
                break;
            case '3':
                return view('pages.admin.getProfile')->with('profile',$profile);
                break;
            case '4':
                return view('pages.admin.getProfile')->with('profile',$profile);
                break;
            default:
                # code...
                break;
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
