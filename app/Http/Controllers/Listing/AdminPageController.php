<?php

namespace App\Http\Controllers\Listing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminPageController extends Controller
{

    protected $currentView = null;
    protected $currentViewStatus = false;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function getPageBySlug(String $page_slug = 'home')
    {
      if ($page_slug) $page_slug = trim($page_slug, '.');

      $this->currentView = get_view('admin.pages.'. $page_slug .'');
      abort_if(!$this->currentView, 404);
      $this->currentViewStatus = true;

      return $this->$page_slug();
    }

    public function home()
    {
      return view($this->currentView);
    }
}
