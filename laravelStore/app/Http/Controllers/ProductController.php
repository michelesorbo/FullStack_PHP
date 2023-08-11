<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    // public static $products = [
    //     ["id" => "1", "name" => "TV", "description" => "Best TV", "image" => "game.png", "price" => "1000"],
    //     ["id" => "2", "name" => "iPhone", "description" => "Best iPhone", "image" => "safe.png", "price" => "999"],
    //     ["id" => "3", "name" => "Chromecast", "description" => "Best Chromecast", "image" => "submarine.png", "price" => "30"],
    //     ["id" => "4", "name" => "Glasses", "description" => "Best Glasses", "image" => "game.png", "price" => "100"]
    // ];

    public function index(){
        $viewData = [];
        $viewData['title'] = "Prodotti dello store";
        $viewData['subtitle'] = "Lista prodotti";
        //$viewData['prodotti'] = ProductController::$products; //Richiamo l'array prodotti della classe
        $viewData['prodotti'] = Product::all(); //SELECT * FROM product
        return view('product.index')->with('viewData',$viewData);
    }

    //Creo la funzione per il dettaglio del prodotto
    public function show($id){
        $viewData = [];
        $prodotto = Product::findOrFail($id); //SELCET * FROM products WHERE id = $id
        $viewData['title'] = $prodotto['name']. " - Online Store";
        $viewData['subtitle'] = $prodotto['name']. " - Informazioni";
        $viewData['prodotto'] = $prodotto;
        return view('product.show')->with('viewData',$viewData);
    }
}
