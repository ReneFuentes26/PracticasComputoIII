<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\Pet;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['owners'] = Owner::all();
        return view('owner.create',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('owner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //        
        $ownerData = request()->execpt("_token");
        Owner::insert($ownerData);
        return redirect()->route('owner.index'); 
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
        $owner=Owner::findOrFail($id);
        $owner = Owner::all();
        return view('owner.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $ownerData=request()->except(['_token','_method']);
        Owner::where('id','=', $id)->update($ownerData);
        return redirect('owner');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Owner::destroy($id);
        return redirect('owner');
    }
}
