<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics=Comic::all();
        return view('comics.index',compact('comics')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comic=new Comic();
        return view('comics.create',compact('comic'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comic=new Comic();
        /* //?Validazione */
        $request->validate([
            'title'=>['required',Rule::unique('comic')->ignore($comic->id),'max:500'],
            'description'=>'string|max:1000',
            'series'=>'string|max:150'
        ]);
        $data=$request->all();
      

        $comic->fill($data);
        $comic->save();

        return redirect()->route('comics.show',$comic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
       
       return view('comics.show',compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
       
        return view('comics.edit',compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
          /* //?Validazione */
          $request->validate([
            'title'=>['required',Rule::unique('comic')->ignore($comic->id),'max:500'],
            'description'=>'string|max:1000',
            'series'=>'string|max:150'
        ]);
        $data=$request->all();

        $comic->update($data);

        return redirect()->route('comics.show',$comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index')->with('delete',$comic->title);
    }
    /**
     * View  the resource from trash.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function trash()
    {
        $comics=Comic::onlyTrashed()->get();
        return view('comics.trash',compact('comics'));
    }
    /**
     * View  the resource from trash.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        $comic=Comic::withTrashed()->find($id);
        $comic->restore();
        return redirect()->route('comics.index')->with('success',$comic->title);
        
    }
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function forceDelete($id)
    {
        $comic=Comic::withTrashed()->findOrFail($id);
        $comic->forceDelete();

        return redirect()->route('comics.trash')->with('delete',$comic->title);
    }
}
