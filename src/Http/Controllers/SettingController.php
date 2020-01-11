<?php

namespace Seat\Akturis\About\Http\Controllers;

use Illuminate\Http\Request;
use Seat\Web\Http\Controllers\Controller;
use Seat\Akturis\About\Models\AboutInfo;

class SettingController extends Controller
{
    public function index() {

        $about = AboutInfo::first()->pluck('content');
        return view('about::setting.index', [
            'about'          => $about[0]
        ]);
    }

    public function updateInfo(Request $request) 
    {
        setting([
            'akturis.about.info',
            $request->info_about,
        ], true);

        $about = AboutInfo::first();
        $about->content = $request->info_about;
        $about->save();

        return redirect()->back();
    }
}
