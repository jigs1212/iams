<?php

namespace App\Http\Controllers\Auth;

use App\Common\Roles;
use Illuminate\Http\Request;
use Auth;
use Input;
use Hash;
use Lang;
use App\User;

use Validator;
use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    // use AuthenticatesAndRegistersUsers;

    protected $redirectPath = '/dashboard';

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    public function getLogin()
    {
        return View('auth.login');
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required', 'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        $credentials['role_id'] = Roles::ROLE_ADMIN;
        $user = User::join('user_registrations', 'user_id', '=','users.id')
            ->where('email', $credentials['email'])
            ->where('role_id', $credentials['role_id'])
            ->first();
        if ($user && Hash::check($credentials['password'], $user->password)) {
            Auth::login($user);
            return redirect()->intended(route('admin.get_home'));
        }
        return redirect('admin/auth/login')
            ->withInput($request->only('email', 'remember'))
            ->withErrors([
                'email' => $this->getFailedLoginMessage(),
            ]);
    }

    /**
     * Get the failed login message.
     *
     * @return string
     */
    protected function getFailedLoginMessage()
    {
        return Lang::has('auth.failed')
            ? Lang::get('auth.failed')
            : 'These credentials do not match our records.';
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect(url('/auth/login'));
    }
}