<?php

namespace Wba\Http\Controllers;

use Illuminate\Http\Request;

use Wba\Http\Requests;
use Wba\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * HomeController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }
}
