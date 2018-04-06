<?php

namespace App\Http\Controllers\Listings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
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
}
