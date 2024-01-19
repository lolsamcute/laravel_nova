<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Str;
use Ramsey\Uuid\Uuid;

class MailingController extends Controller
{

    /**
     * Index Mail.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $filter = $request->input('filter', 'all');

        return view('pages.mailing.index', [
                        'filter' => $filter,
                    ]);

    }

    /**
     * Create Mail.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create(Request $request)
    {
        $filter = $request->input('filter', 'all');

        return view('pages.mailing.create', [
                        'filter' => $filter,
                    ]);

    }


     /**
     * Edit Mail.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit(Request $request)
    {
        $filter = $request->input('filter', 'all');

        return view('pages.mailing.edit', [
                        'filter' => $filter,
                    ]);

    }


     /**
     * Preview Mail.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function preview(Request $request)
    {
        $filter = $request->input('filter', 'all');

        return view('pages.mailing.preview', [
                        'filter' => $filter,
                    ]);

    }




}
