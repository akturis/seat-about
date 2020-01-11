<?php

namespace Seat\Akturis\About\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Seat\Akturis\About\Models\AboutInfo;
use Seat\Services\Repositories\Configuration\UserRespository;
use Seat\Services\Repositories\Character\Character;
use Seat\Web\Http\Controllers\Controller;
use Seat\Web\Models\Acl\Role;


/**
 * Class OperationController
 * @package Seat\Kassie\Calendar\Http\Controllers
 */
class AboutController extends Controller
{
    use UserRespository, Character;

    /**
     * OperationController constructor.
     */
    public function __construct() {
//        $this->middleware('bouncer:calendar.view')->only('index');
//        $this->middleware('bouncer:calendar.create')->only('store');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Seat\Services\Exceptions\SettingException
     */
    public function index(Request $request)
    {
        $about = AboutInfo::first()->pluck('content');

        return view('about::about.index', [
            'about'          => $about[0]
        ]);
    }

    /**
     * @param Request $request
     */
    public function store(Request $request)
    {
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {

        return redirect()
            ->back()
            ->with('error', 'An error occurred while processing the request.');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(Request $request)
    {
        return redirect()
            ->back()
            ->with('error', 'An error occurred while processing the request.');
    }


    /**
     * @param $operation_id
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     */
    public function find($operation_id) {

        return redirect()
            ->back()
            ->with('error', 'An error occurred while processing the request.');
    }

}
