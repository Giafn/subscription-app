<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    public function show($lang = 'id')
    {
        $data = config("privacy-policy." . $lang);

        return view('privacy-policy.show', [
            'title' => $data['title'],
            'content' => $data['content'],
            'locale' => $lang,
        ]);
    }
}
