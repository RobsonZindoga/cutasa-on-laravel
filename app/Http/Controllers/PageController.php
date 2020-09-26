<?php

namespace App\Http\Controllers;
use App\Member;
class PageController extends Controller
{
    /**
     * Display icons page
     *
     * @return \Illuminate\View\View
     */
    public function icons()
    {
        return view('pages.icons');
    }
    public function welcome()
    {
        $member = Member::all();
        return view('welcome',['members'=>$member]);
    }

    /**
     * Display maps page
     *
     * @return \Illuminate\View\View
     */
    public function maps()
    {
        return view('pages.maps');
    }

    /**
     * Display tables page
     *
     * @return \Illuminate\View\View
     */
    public function tables()
    {
        return view('pages.tables');
    }

    /**
     * Display notifications page
     *
     * @return \Illuminate\View\View
     */
    public function notifications()
    {
        return view('pages.notifications');
    }

    /**
     * Display rtl page
     *
     * @return \Illuminate\View\View
     */
    public function rtl()
    {
        return view('pages.rtl');
    }

    /**
     * Display typography page
     *
     * @return \Illuminate\View\View
     */
    public function typography()
    {
        return view('pages.typography');
    }

    /**
     * Display upgrade page
     *
     * @return \Illuminate\View\View
     */
    public function upgrade()
    {
        return view('pages.upgrade');
    }

    /**
    * Display about page
    *
    * @return \Illuminate\View\View
    */
    public function about()
    {
    return view('pages.about');
    }
    public function register()
    {
    return view('pages.register');
    }

    /**
    * Display gallery page
    *
    * @return \Illuminate\View\View
    */
    public function gallery()
    {
    return view('pages.gallery');
    }

    /**
     * Display events page
     *
     * @return \Illuminate\View\View
     */
    public function events()
    {
        return view('pages.events');
    }

    /**
    * Display sermons page
    *
    * @return \Illuminate\View\View
    */
    public function sermons()
    {
    return view('pages.sermons');
    }

    /**
    * Display blog page
    *
    * @return \Illuminate\View\View
    */
    public function blog()
    {
    return view('pages.blog');
    }

     /**
     * Display contact page
     *
     * @return \Illuminate\View\View
     */
     public function contact()
     {
     return view('pages.contact');
     }
}
