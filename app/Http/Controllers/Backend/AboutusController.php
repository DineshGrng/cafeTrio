<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Aboutus;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $index = 0;
        $aboutus = Aboutus::all();
        return view('backend.aboutus.index', compact('aboutus', 'index'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.aboutus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $aboutus = new Aboutus();
        $aboutus->title = $request->title;
        uploadImage($request,$aboutus,'image');
        $aboutus->description = $request->description;
        $aboutus->save();
        return redirect()->back();

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
        $about = Aboutus::find($id);
        return view('backend.aboutus.edit' , compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $aboutus = Aboutus::find($id);
        $aboutus->title = $request->title;
        uploadImage($request,$aboutus,'image');
        $aboutus->description = $request->description;
        $aboutus->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
