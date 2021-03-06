<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Authenticate
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->guest() || (!$this->auth->guest() && $this->auth->user()->role_id != Roles::ROLE_ADMIN)) {
         if ($request->ajax()) {
                return response('Unauthorized.', 401);
            }
         else {
             if ($this->auth->check()&&$this->auth->user()->role_id != Roles::ROLE_ADMIN) {
                 return 1;
                 return redirect('/home');
             }
                return redirect('auth/login');
            }
        }
      return $next($request);
    }
}
