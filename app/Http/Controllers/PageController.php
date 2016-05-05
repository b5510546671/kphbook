<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;

class PageController extends BaseController
{

  public function index()
  {
    $fullName = 'Supavit Kongwudhikunakorn';
    return view('welcome') -> with('name', $fullName);
  }

  public function contact(){
    return view('contact');
  }
}
