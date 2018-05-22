<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;

class NoteController extends Controller
{
	/*
		Method Get
	*/
    public function index()
    {
    	$notes = Note::orderBy('created_at', 'desc')->get();

    	return view("note.index")
    		->with('notes', $notes);
    }

	/*
		Method Get
	*/
    public function createForm()
    {
    	return view("note.new")
    		->with("note", new Note());
    }

	/*
		Method Post
	*/
    public function create(Request $req)
    {
        $note = new Note($req->all());

        try {
        	$note->save();
        } catch (\Illuminate\Database\QueryException $e) {
        	return redirect(\Request::url())->with("message", "Ups, někde nastala chyba. Zřejmě špatně vyplněný formulář");
        }

		return redirect('/');
    }

	/*
		Method Get
	*/
    public function editForm(int $id)
    {
    	$note = Note::find($id);

    	return view("note.edit")
    		->with('note', $note);
    }

	/*
		Method Put
	*/
    public function edit(Request $req)
    {
		$note = Note::find($req->id);
	   	$note->update($req->all());

		return redirect('/');
    }

	/*
		Method Delete
	*/
    public function delete(Request $req, int $id)
    {
    	$note = Note::find($id);
		$note->delete();

		return redirect('/');
    }

}
