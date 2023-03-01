<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comicsLinks =["Characters", "Comics", "Movies", "TV", "Games", "Collectibles", "Videos", "Fans", "News"];

        $shopLinks = ["Shop DC", "Shop Dc Collectibles"];
    
        $dcLinks =["Terms Of Use", "Privacy policy (new)", "Ad Choices", "Advertising", "Jobs", "Subscriptions", "Talent Workshop", "CPSC Certificates", "Ratings", "Shop Help", "Contact Us"];
        
        $sitesLinks= ["DC", "MAD Magazine", "DC Kids", "DC Universe", "Dc Power Visa"];
    

        $comics= Comic::orderby('title')->get();

        return view('comics.index', [ 'comicsLinks' => $comicsLinks, 'shopLinks' => $shopLinks, 'dcLinks' => $dcLinks, 'sitesLinks' => $sitesLinks, 'comics'=> $comics]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
