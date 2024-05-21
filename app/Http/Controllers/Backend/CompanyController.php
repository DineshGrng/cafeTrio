<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $company = company::first();
        return view('backend.company.index', compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $company = new company();
        $company->name = $request->name;
        $company->email = $request->email;
        $company->address = $request->address;
        $company->phone1 = $request->phone1;
        $company->phone2 = $request->phone2;
        $company->map = $request->map;
        $company->facebook = $request->facebook;
        $company->instagram = $request->instagram;
        $company->youtube = $request->youtube;
        $company->whatsApp = $request->whatsApp;
    //    if($request->hasFile('logo')){
    //     $file = $request->logo;
    //     $newName = time() . "." . $file->getclientOriginalExtension();
    //     $file->move("images",$newName);
    //     $company->logo = "images/$newName";
    //    }
    uploadImage($request,$company,'logo');
        $company->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $company = company::find($id);
       return view('backend.company.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $company = company::find($id);
        return view('backend.company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $company =  company::find($id);
        $company->name = $request->name;
        $company->email = $request->email;
        $company->address = $request->address;
        $company->phone1 = $request->phone1;
        $company->phone2 = $request->phone2;
        $company->map = $request->map;
        $company->facebook = $request->facebook;
        $company->instagram = $request->instagram;
        $company->youtube = $request->youtube;
        $company->whatsApp = $request->whatsApp;
    //    if($request->hasFile('logo')){
    //     $file = $request->logo;
    //     $newName = time() . "." . $file->getclientOriginalExtension();
    //     $file->move("images",$newName);
    //     $company->logo = "images/$newName";
    //    }
    uploadImage($request,$company,'logo');
        $company->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $company = company::find($id);
        $company->delete();
        return redirect()->back();
    }
}
