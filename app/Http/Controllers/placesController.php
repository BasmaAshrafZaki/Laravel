<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\Common;
use App\Models\Place;
use Illuminate\Http\RedirectResponse;

class placesController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Places = Place::latest()->take(6)->get();

        return view('Place', compact('Places'));  
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
        $Places = Place::findORFail($id);

        return view('editPlace', compact('Places'));
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
    public function destroy(string $id):RedirectResponse
    
    {
        Place::findOrFail($id)->delete();

       return redirect('PlaceForm');
   
    }

    public function Place( )
    {

        $Places = Place::get();
        return view('PlaceForm',compact('Places'));
}
// public function forceDeleted(string $id):RedirectResponse
// {

//     Place::where('id', $id)->forceDelete();
//     return redirect('PlaceForm');
    

// }
}
