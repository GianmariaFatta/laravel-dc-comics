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
        $comicsLinks =["Characters", "Comics", "Movies", "TV", "Games", "Collectibles", "Videos", "Fans", "News"];

        $shopLinks = ["Shop DC", "Shop Dc Collectibles"];
    
        $dcLinks =["Terms Of Use", "Privacy policy (new)", "Ad Choices", "Advertising", "Jobs", "Subscriptions", "Talent Workshop", "CPSC Certificates", "Ratings", "Shop Help", "Contact Us"];
        
        $sitesLinks= ["DC", "MAD Magazine", "DC Kids", "DC Universe", "Dc Power Visa"];


        return view('comics.create',  [ 'comicsLinks' => $comicsLinks, 'shopLinks' => $shopLinks, 'dcLinks' => $dcLinks, 'sitesLinks' => $sitesLinks]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $data= $request->all();
        $request->validate([
        'title'=>'required|string|',
        'description'=>'nullable|string|',
        'thumb'=>'nullable|url|',
        'price'=>'required|string|',
        'series'=>'nullable|string|',
        'sale_date'=>'required|date|',
        'type'=>'required|string|',
        'artists'=>'nullable|string|',
        'writers'=>'nullable|string|',
        ]);

        $comic = new Comic();
        // $comic->title = $data['title'];
        // $comic->description = $data['description'];
        // $comic->thumb = $data['thumb'];
        // $comic->price = $data['price'];
        // $comic->series = $data['series'];
        // $comic->sale_date = $data['sale_date'];
        // $comic->type = $data['type'];
        // $comic->artists = $data['artists'];
        // $comic->writers = $data['writers'];
        $comic->fill($data);

        $comic->save();

        return to_route('comics.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comicsLinks =["Characters", "Comics", "Movies", "TV", "Games", "Collectibles", "Videos", "Fans", "News"];

        $shopLinks = ["Shop DC", "Shop Dc Collectibles"];
    
        $dcLinks =["Terms Of Use", "Privacy policy (new)", "Ad Choices", "Advertising", "Jobs", "Subscriptions", "Talent Workshop", "CPSC Certificates", "Ratings", "Shop Help", "Contact Us"];
        
        $sitesLinks= ["DC", "MAD Magazine", "DC Kids", "DC Universe", "Dc Power Visa"];

        $comic= Comic::findOrFail($id);

        return view('comics.show', [ 'comicsLinks' => $comicsLinks, 'shopLinks' => $shopLinks, 'dcLinks' => $dcLinks, 'sitesLinks' => $sitesLinks, 'comic'=> $comic] );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comicsLinks =["Characters", "Comics", "Movies", "TV", "Games", "Collectibles", "Videos", "Fans", "News"];

        $shopLinks = ["Shop DC", "Shop Dc Collectibles"];
    
        $dcLinks =["Terms Of Use", "Privacy policy (new)", "Ad Choices", "Advertising", "Jobs", "Subscriptions", "Talent Workshop", "CPSC Certificates", "Ratings", "Shop Help", "Contact Us"];
        
        $sitesLinks= ["DC", "MAD Magazine", "DC Kids", "DC Universe", "Dc Power Visa"];
        
        $comic= Comic::findOrFail($id);

        return view('comics.edit', ['comicsLinks' => $comicsLinks, 'shopLinks' => $shopLinks, 'dcLinks' => $dcLinks, 'sitesLinks' => $sitesLinks, 'comic'=> $comic]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data= $request->all();

        $request->validate([
            'title'=>'required|string|',
            'description'=>'nullable|string|',
            'thumb'=>'nullable|url|',
            'price'=>'required|string|',
            'series'=>'nullable|string|',
            'sale_date'=>'required|date|',
            'type'=>'required|string|',
            'artists'=>'nullable|string|',
            'writers'=>'nullable|string|',
            ]);

        $comic=  Comic::findOrfail($id);

        $comic->fill($data);

        $comic->save();

        return to_route('comics.show', $comic->id)->with('update', "Modifica di $comic->title avvenuta con successo");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic=  Comic::findOrfail($id);

        $comic ->delete();

        return to_route('comics.index')->with('delete', "Eliminazione di $comic->title avvenuta con successo");
    }
}
