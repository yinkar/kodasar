<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDictionaryRequest;
use App\Http\Requests\UpdateDictionaryRequest;
use App\Models\Dictionary;
use Illuminate\Support\Facades\Gate;

class DictionaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $dictionaries = cache()
             ->remember(
                 'dictionaries',
                 now()->addMinutes(1),
                 fn () => Dictionary::all()
             );

        return response()
            ->view('dictionaries.list', compact('dictionaries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()
            ->view('dictionaries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDictionaryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDictionaryRequest $request)
    {
        $dictionaryValidation = $request->validate([
            'name' => 'required|unique:dictionaries,name',
        ]);

        $dictionaryValidation = array_merge(
            $dictionaryValidation,
            [
                'description' => '',
                'validated' => true,
                'user_id' => auth()->user()->id,
            ]
        );

        $dictionary = Dictionary::create($dictionaryValidation);

        session()->flash('success', 'Dictionary created successfully.');

        cache()->forget('dictionaries');

        return redirect(url('dictionaries', $dictionary->slug));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dictionary  $dictionary
     * @return \Illuminate\Http\Response
     */
    public function show(Dictionary $dictionary)
    {
         return response()
             ->view('dictionaries.show', compact('dictionary'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dictionary  $dictionary
     * @return \Illuminate\Http\Response
     */
    public function edit(Dictionary $dictionary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDictionaryRequest  $request
     * @param  \App\Models\Dictionary  $dictionary
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDictionaryRequest $request, Dictionary $dictionary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dictionary  $dictionary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dictionary $dictionary)
    {
        //
    }
}
