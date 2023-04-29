<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parents;
use Illuminate\Support\Facades\Auth;

class ParentsController extends Controller
{
    
    public function index()
    {
        $parents =Parents::where('user_id',Auth::id())
        ->where('active',1)
        ->select('id','name','gender')
        ->get();
        $page_title = "Parents";

       return view('parents.index',compact('parents'));
    }

    public function create()
    {
        $page_title = "Create Parents";
        
        return view('parents.create');
    }

   
    public function store(Request $request)
    {
        Parents::create([
            'user_id'=> Auth::id(),
            'name' => $request->name,
            'gender' =>$request->gender

        ]);

        return redirect()->route('parents.index');
    }

   
    public function show(string $id)
    {
        $parent = Parents::where('user_id', Auth::id())
        ->where('active',1)
        ->where('id',$id)
        ->select('id','name', 'gender')
        ->firstOrFail();

        $page_title = $parent->name;

        return view('parents.show',compact('parent'));
    }

    
    public function edit(string $id)
    {
        $parent = Parents::where('user_id', Auth::id())
        ->where('active',1)
        ->where('id',$id)
        ->select('id','name', 'gender')
        ->firstOrFail();

        $page_title = "Edit Parent";

        return view('parents.edit', compact('parent'));
    }

   
    public function update(Request $request, string $id)
    {
        $parent = Parents::where('user_id', Auth::id())
        ->where('active',1)
        ->where('id',$id)
        ->select('id','name', 'gender')
        ->firstOrFail();

        $parent->update([
            'name'=>$request->name,
            'gender' =>$request->gender
        ]);
        return redirect()->route('parents.show',$id);
    }

  
    public function destroy(string $id)
    {
        $parent = Parents::where('user_id', Auth::id())
        ->where('active',1)
        ->where('id',$id)
        ->select('id','name', 'gender')
        ->firstOrFail();

        $parent->update([
            'active'=> false

        ]);
        return redirect()->route('parents.index');
    }
}
