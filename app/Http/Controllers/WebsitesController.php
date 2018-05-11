<?php

namespace App\Http\Controllers;

use App\Website;
use Illuminate\Http\Request;

class WebsitesController extends Controller
{
    public function index(){

        $websites = Website::all();

        return view('websites.index', compact('websites'));
    }
}
