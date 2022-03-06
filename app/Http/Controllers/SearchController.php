<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

/**
 * Search
 */
class SearchController extends Controller
{
    /**
     * Search results
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    function results(Request $request) {
        $searchResults = Entry::search($request->q)->get();

        return response()
            ->view('search.results', [
                'query' => Str::limit($request->q, 50, $end='...'),
                'results' => $searchResults
            ]);
    }
}
