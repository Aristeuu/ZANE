<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    //

    public function index()
    {
        $data = Banner::getAll();
        return view('portal.welcome',compact('data'));
    }
}
