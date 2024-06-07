<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
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
  * @return \Illuminate\Contracts\Support\Renderable
  */
  public function index(): View
  {
      return view('home');
  }
  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */
  public function adminHome(): View
  {
      return view('adminHome');
  }
  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */
  public function dosenHome(): View
  {
      return view('dosenHome');
  }
  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */
  public function mahasiswaHome(): View
  {
      return view('mahasiswaHome');
  }
  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */
  public function tendikHome(): View
  {
      return view('tendikHome');
  }
  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */
  public function akademikHome(): View
  {
      return view('akademikHome');
  }
  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */
  public function keuanganHome(): View
  {
      return view('keuanganHome');
  }
  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */
  public function direkturHome(): View
  {
      return view('direkturHome');
  }
  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */
  public function wd1Home(): View
  {
      return view('wd1Home');
  }
  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */
  public function wd2Home(): View
  {
      return view('wd2Home');
  }
  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */
  public function wd3Home(): View
  {
      return view('wd3Home');
  }
  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */
  public function lppmHome(): View
  {
      return view('lppmHome');
  }
  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */
  public function sdmHome(): View
  {
      return view('sdmHome');
  }
}