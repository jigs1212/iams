<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use App\Asset;
use App\User;

class AssetManagerHomeController extends Controller
{
    /** Return view of dashboard
     *
     * @return mixed
     */
    public function getAssetManagerDashboard()
    {
        $asset = Asset::select(DB::raw('count(*) as asset_count'))
                    ->where('status','=', '1' )
                    ->get();
        $asset_count = $asset[0]->asset_count;
        $user = User::select(DB::raw('count(*) as user_count'))
                    ->where('status','=','1')
                    ->get();
        $user_count = $user[0]->user_count;
        return View('pages.admin.dashboard')
            ->with('asset_count',$asset_count)
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
