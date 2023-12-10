<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\Common;
use App\Models\Place;

class placesController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Place = Place::latest()->take(6)->get();

        return view('Place', compact('Place'));  
    }


   
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('AddPlace');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'Title.required'=>'title is required',
            'description.required'=>'You Should enter description',
            'PriceFrom.required'=>'You Should enter Price',
            'PriceTo.required'=>'You Should enter Price ',
            'Image.required'=>'You Should Choos Image ',
    
           ];
    
            $data = $request->validate([
                'Title'=>'required|string',
                'description'=> 'required|string|Max:50',
                'PriceFrom'=> 'required',
                'PriceTo'=> 'required',
                'Image' => 'required|mimes:png,jpg,jpeg|max:2048',
             ], $messages);
             $filename = $this->uploadFile($request->Image ,'assets/Images' );
             $data['Image'] = $filename;
    
                Place::create($data);        
                return 'done';
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
