<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Validator;
use Flash;
use App\User;
use App\UserRegistration;
use App\Department;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::join('user_registrations', 'user_id', '=', 'users.id')
            ->select('users.id', 'user_name', 'email', 'role_id', 'first_name', 'last_name', 'department_id')
            ->get();
        return view('pages.admin.user.index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::lists('name', 'id')->toArray();
        return view('pages.admin.user.create')->with('departments',$departments);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $rule = [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'role_id' => 'required',
            'user_name' => 'required',
            'password' => 'required'
        ];

        $validator = validator::make($input, $rule);
        if ($validator->passes()) {

            DB::beginTransaction();
            //TODO::do proper validation for email, password, confirm password
            //Try block for user table

            try {
                //Storing data required for users table in $userData
                $userData = array(
                    'email' => $input['email'],
                    'password' => bcrypt($input['password']),
                    'role_id' => $input['role_id'],
                    'status' => true,
                    'user_name' => $input['user_name']
                );
                //New User object
                $user = new User();
                $user->fill($userData);
                $user->save();
                if ($user->id) {
                    //Storing data required for user_registrations table in $userRegData
                    $userRegData = array(
                        'department_id' => $input['department_id'],
                        'user_id' => $user->id,
                        'first_name' => $input['first_name'],
                        'last_name' => $input['last_name'],
                        'status' => true
                    );
                    //Entering data to UserRegistration
                    $userReg = new UserRegistration();
                    $userReg->fill($userRegData);
                    $userReg->save();
                }
            } catch (\Exception $e) {
                DB::rollBack();
                Flash::error('Insert Error');
                return redirect()->back()->withInput();
            }
            // If we reach here, then
            // data is valid and working.
            // Commit the queries!
            DB::commit();
            Flash::success('User Successfully Added..');
            return redirect()->back();
        }else{
            Flash::error('Validation Failed');
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }
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
