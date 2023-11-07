<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Http\Requests\StoreNoteRequest;
use App\Http\Requests\UpdateNoteRequest;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $notes = Note::all();
        return view('layouts.index', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        $notes = Note::all();
        return view('layouts.create', compact('notes'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreNoteRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreNoteRequest $request)
    {
        $data = $request->all();
    
        $newNote = new Note();
        $newNote->title = $data['title'];
        $newNote->description = $data['description'];
        $newNote->author = $data['author'];
        $newNote->save();
    
        return redirect()->route('notes.index')->with('success', 'Nota creata con successo.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  Note  $note
     * @return View
     */
    public function show(Note $note)
    {
        return view('layouts.show', compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Note  $note
     * @return View
     */
    public function edit(Note $note)
    {
        return view('layouts.edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateNoteRequest  $request
     * @param  Note  $note
     * @return RedirectResponse
     */
    public function update(UpdateNoteRequest $request, Note $note)
    {
        $data = $request->all();
        
        $note->title = $data['title'];
        $note->description = $data['description'];
        $note->author = $data['author'];
        $note->save();
    
        return redirect()->route('notes.show', $note)->with('success', 'Nota aggiornata con successo.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Note  $note
     * @return RedirectResponse
     */
    public function destroy(Note $note)
    {
        $note->delete();
    
        return redirect()->route('notes.index')->with('success', 'Nota eliminata con successo.');
    }
}
