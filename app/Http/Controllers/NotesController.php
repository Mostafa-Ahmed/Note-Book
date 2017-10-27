<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

        <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;

use View, Input, Redirect;

class NotesController extends Controller
{
    public function index()
    {
       
    }

    public function create()
    {
        
        return view('new');
    }

    public function ubdate(Note $note)
    {
        return view('show',compact('note'));
    }   

    public function destroy($data)
    {
        
    }

}


     */
    public function index()
    {
        $notes = Note::all();
        return view('welcome',compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $note = new Note;
        $note->title=$request->title;
        $note->body=$request->body;
        $note->save();
        return Redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($note)
    {
        $note=Note::find($note);
        return view('show',compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($note)
    {
        $note=Note::find($note);
        return view('show',compact('note'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $note = Note::find($id);
        $note->title=$request->title;
        $note->body =$request->body;
        $note->save();

        return Redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($data)
    {
        Note::destroy($data);
        return Redirect('/');
    }
}
