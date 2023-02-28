<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $comicsLinks =["Characters", "Comics", "Movies", "TV", "Games", "Collectibles", "Videos", "Fans", "News"];

        $shopLinks = ["Shop DC", "Shop Dc Collectibles"];
    
        $dcLinks =["Terms Of Use", "Privacy policy (new)", "Ad Choices", "Advertising", "Jobs", "Subscriptions", "Talent Workshop", "CPSC Certificates", "Ratings", "Shop Help", "Contact Us"];
        
        $sitesLinks= ["DC", "MAD Magazine", "DC Kids", "DC Universe", "Dc Power Visa"];
        return view('home',[ 'comicsLinks' => $comicsLinks, 'shopLinks' => $shopLinks, 'dcLinks' => $dcLinks, 'sitesLinks' => $sitesLinks]);
    }
}
