<?php

namespace App\Http\Controllers;

use App\Asset;
use App\RequestAsset;
use App\User;
use DB;

Class AdminHomeController extends Controller
{
    /** Return view of dashboard
     *
     * @return mixed
     */
    public function getAdminDashboard()
    {
        $asset = Asset::select(DB::raw('count(*) as asset_count'))
                    ->where('status','=', '1' )
                    ->get();
        $asset_count = $asset[0]->asset_count;
        $request = RequestAsset::select(DB::raw('count(*) as request_count'))
                    ->where('status','=','1')
                    ->get();
        $request_count = $request[0]->request_count;
        $user = User::select(DB::raw('count(*) as user_count'))
                    ->where('status','=','1')
                    ->get();
        $user_count = $user[0]->user_count;
        return View('pages.admin.dashboard')
            ->with('asset_count',$asset_count)
            ->with('request_count',$request_count)
            ->with('user_count',$user_count);
    }

    /** Return view of Profile
     *
     * @return mixed
     */
    public function getAdminProfile()
    {
        return View('pages.admin.getProfile');
    }

    /**Return view of 404 page
     * @return mixed
     */
    public function get404()
    {
        return View('errors.404');
    }

    /**Return view of 503 page
     * @return mixed
     */
    public function get503()
    {
        return View('errors.503');
    }

    /**Return view of 500 page
     * @return mixed
     */
    public function get500()
    {
        return View('errors.500');
    }
}