<?php

namespace App\Http\Controllers\Listings;

use App\Models\Listing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{

  /**
   * The listing repository implementation.
   *
   * @var Listing
   */
  protected $listings;

  /**
   * Instantiate a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->listings = Listing::all();
    // $this->middleware('auth');
    // $this->middleware('log')->only('index');
    // $this->middleware('subscribed')->except('store');

    // $this->middleware(function ($request, $next) {
    //   echo "<pre>"; print_r($request); echo "</pre>";
    //   echo "<pre>"; print_r($next); echo "</pre>";
    //
    //   return $next($request);
    // });
  }

  /**
   * Subject Description
   *
   * @return void
   */
  public function index($pagename) {
    echo "<pre>"; print_r($this->listings->count()); echo "</pre>";
    return view()->exists($pagename) ? view($pagename) : abort(404);
  }
}
