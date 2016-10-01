<?php
/**
 * Created by PhpStorm.
 * User: hasna
 * Date: 21/12/15
 * Time: 3:28 PM
 */

namespace App\Http\Controllers;


Class AdminHomeController extends Controller
{
    /** Return view of dashboard
     *
     * @return mixed
     */
    public function getAdminDashboard()
    {
        return View('pages.dashboard_admin');
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