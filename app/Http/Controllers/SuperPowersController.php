<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\SuperPowers;

class SuperPowersController extends Controller
{
    
    public function index()
    {
    $superpowers=SuperPowers::where('id',Auth::id())
    ->where('active',1)
    ->select('id','name','description')
    ->get();
    //dd($superpowers);
    return view('superpowers.index',compact('superpowers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('superpowers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Superpowers::create([
            'user_id'=>Auth::id(),
            'name'=>$request->name,
            'description'=>$request->description,
            
        ]);
        return redirect()->route('superpowers.index');
    }

  
    public function show(string $id)
    {
        $superpower =SuperPowers::where('user_id',Auth::id())
        ->where('id',$id)
        ->where('active',1)
        ->select('id','name','description')
        ->firstOrFail();

        return view('superpowers.show', compact('superpower'));
    }


    public function edit(string $id)
    {
        $superpower=SuperPowers::where('user_id',Auth::id())
        ->where('id',$id)
        ->where('active',1)
        ->select('id','name','description')
        ->firstOrFail();

        $superpower->update([
            'name'=>$request->name,
            'description'=>$request->description
        ]);

        return view('superpowers.edit', compact('superpower'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $superpower =SuperPowers::where('user_id',Auth::id())
        ->where('id',$id)
        ->where('active',1)
        ->firstOfail();

        $superpower->update([
            'name'=>$request->name,
            'description'=>$request->description
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
