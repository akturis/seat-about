<?php

namespace Seat\Akturis\About\Http\Controllers;

use Illuminate\Http\Request;
use Seat\Web\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function index() {

        return view('about::setting.index');
    }

    public function updateInfo(Request $request) 
    {
        setting([
            'akturis.about.info',
            $request->info,
        ], true);

        return redirect()->back();
    }
}
