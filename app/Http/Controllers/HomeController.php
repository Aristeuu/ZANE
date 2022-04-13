<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Produtos;
use App\Models\Depoimentos;
use App\Models\Locais;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::getAll();
        
        $produtos = Produtos::getLAST();
        $depoimentos = Depoimentos::getAll();
        $locais      = Locais::getAll(); 
        return view('portal.welcome',compact('banners','produtos','depoimentos','locais'));
    }

    public function teste()
    {
        dd('ok');
    }
}
