<?php
/**
 * Created by PhpStorm.
 * User: hasna
 * Date: 21/12/15
 * Time: 3:28 PM
 */

namespace App\Http\Controllers;


Class HomeController extends Controller
{
    /**Return view of home page
     *
     * @return mixed
     */
    public function getHome()
    {
        return View('pages.home');
    }

    /** Return view of dashboard
     *
     * @return mixed
     */
    public function getDashboard()
    {
        return View('pages.dashboard');
    }

    /**Return view of 404 page
     * @return mixed
     */
    public function get404()
    {
        return View('errors.404');
    }
}