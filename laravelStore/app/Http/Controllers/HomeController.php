<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Serve a richiamare la pagina Index
    public function index(){
        $viewData = []; //Inizializzo array vuoto
        $viewData["title"] = "Home Page Online Store Laravel";
        return view('home.index')->with('viewData', $viewData);
    }

    public function about(){
        $viewData = [];
        $viewData['title'] = "About - Online Store";
        $viewData['subtitle'] = "About Us";
        $viewData['content'] = "Siamo una società di sviluppo software";
        $viewData['autori'] = "Michele & Davide";
        return view('home.about')->with('viewData',$viewData);
    }
}
