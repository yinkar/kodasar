<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEntryRequest;
use App\Http\Requests\UpdateEntryRequest;
use App\Models\Dictionary;
use App\Models\Entry;
use Illuminate\Support\Facades\Gate;

class EntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Dictionary $dictionary)
    {
        return response()
            ->view('entries.create', compact('dictionary'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEntryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEntryRequest $request)
    {
        $entryValidation = $request->validate([
            'command' => 'required|unique:entries,command',
            'info' => 'required',
            'library' => 'nullable',
            'example' => 'nullable',
            'extra' => 'nullable',
            'dictionary_id' => 'required',
        ]);

        $entryValidation = array_merge(
            $entryValidation,
            [
                'validated' => true,
                'user_id' => auth()->user()->id,
            ]
        );

        $entry = Entry::create($entryValidation);

        session()->flash('success', 'Entry created successfully.');

        $dictionary = Dictionary::find($entry->dictionary_id)->first();

        return redirect(url('dictionaries', [ $dictionary->slug, 'entries', $entry->id ]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function show(Dictionary $dictionary, Entry $entry)
    {
        return response()
                    ->view('entries.show', compact('entry'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function edit(Entry $entry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEntryRequest  $request
     * @param  \App\Models\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEntryRequest $request, Entry $entry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entry $entry)
    {
        //
    }
}
