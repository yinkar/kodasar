<?php

namespace App\Http\Controllers;

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
     * @return void
     */
    function results(Request $request) {
        return view('search.results', [
            'query' => Str::limit($request->input('q'), 50, $end='...')
        ]);
    }
}
