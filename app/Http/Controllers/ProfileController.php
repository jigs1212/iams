<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\UserRegistration;
use Validator;
use Flash;
use Response;

class ProfileController extends Controller
{
    public function changePasswordView()
    {
        $user = Auth::user();
        $userId = $user->id;
        $userRoleId = $user->role_id;
        switch ($userRoleId) {
            case '1':
                return view('pages.admin.changePassword');
                break;
            case '2':
                return view('pages.asset-manager.changePassword');
                break;
            case '3':
                return view('pages.admin.changePassword');
                break;
            case '4':
                return view('pages.admin.changePassword');
                break;
            default:
                # code...
                break;
        }
    }
    public function changePassword(Request $request)
    {
        $user = Auth::user();
        $userEmail = $user->email;
        $input = $request->all();
        $passwordObj = array(
            'email' => $userEmail,
            'current_password' => $input['current_password'],
            'password' => $input['password'],
            'password_confirmation' => $input['password_confirmation']
        );
        $rule = array(
            'password' => 'Required|confirmed|min:6'
        );
        $validator = Validator::make($passwordObj, $rule);

        if ($validator->passes()) {

            if (!Auth::attempt(['email' => $passwordObj['email'], 'password' => $passwordObj['current_password']])) {
                Flash::error('Information MissMatch');
                return redirect()->back()->withInput();
            }
            if (Auth::attempt(['email' => $passwordObj['email'], 'password' => $passwordObj['password']])) {
                Flash::error('Information Missmatch');
                return redirect()->back()->withInput();
            }

            $user->password = bcrypt($passwordObj['password']);
            $user->save();

            Flash::success('Password Changed');
            return redirect()->back();
        } else {
            Flash::error('Information Missmatch');
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }
    }

    public function getProfile()
    {
        $user = Auth::user();
        $userId = $user->id;
        $userRoleId = $user->role_id;
        $profile = User::join('user_registrations', 'user_id', '=', 'users.id')
            ->where('users.id', $userId)
            ->select('users.id', 'user_name', 'email', 'role_id', 'first_name', 'last_name', 'department_id','city','state','country','birthday','phone_off','extn', 'mobile_no')
            ->first();
            // dd($profile);
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
        $input = $request->all();
        $validator = Validator::make($input,UserRegistration::$rule_update);
        if ($validator->passes()) {
            $userReg = UserRegistration::where('user_id',$id)->first();
            $userReg->city = $input['city'];
            $userReg->state = $input['state'];
            $userReg->country = $input['country'];
            $userReg->birthday = $input['bday'];
            $userReg->phone_off = $input['ph_office'];
            $userReg->extn = $input['extn'];
            $userReg->mobile_no = $input['mobile'];
            $userReg->save();
            Flash::Success('User Profile Successfully Added');
            return redirect()->back();
        } else {
            Flash::error('Validation Failed');
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }
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
