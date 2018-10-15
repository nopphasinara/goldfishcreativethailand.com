<?php

namespace App\Http\Controllers\Listing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{

    protected $currentView = null;
    protected $currentViewStatus = false;

    public function getPageBySlug(String $page_slug = 'home')
    {
      if ($page_slug) $page_slug = trim($page_slug, '.');

      $this->currentView = get_view('pages.'. $page_slug .'');
      abort_if(!$this->currentView, 404);
      $this->currentViewStatus = true;

      return $this->$page_slug();
    }

    public function home()
    {
      return view($this->currentView);
    }
}
