<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsController extends Controller
{
    public function show(Request $request, $lang = 'id')
    {
        $terms = config("terms.$lang");
        if (!$terms) {
            abort(404);
        }

        return view('terms.show', [
            'title' => $terms['title'],
            'sections' => $terms['sections'],
            'lang' => $lang,
        ]);
    }
}
