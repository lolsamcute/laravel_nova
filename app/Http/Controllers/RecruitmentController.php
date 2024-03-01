<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class RecruitmentController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $filter = $request->input('filter', 'all');


        return view('pages.recruitment.index', [
            'filter' => $filter,

        ]);
    }



    public function show(Request $request)
    {
        $filter = $request->input('filter', 'all');

        return view('pages.recruitment.show', [
            'filter' => $filter,

        ]);
    }

     public function IndexJob(Request $request)
    {
        $filter = $request->input('filter', 'all');

        return view('pages.recruitment.job.index', [
            'filter' => $filter,

        ]);
    }


    public function viewJob(Request $request)
    {
        $filter = $request->input('filter', 'all');

        return view('pages.recruitment.job.view', [
            'filter' => $filter,

        ]);
    }






}
