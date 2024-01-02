<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon; // For date/time calculations
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function products(Request $request)
    {
        try {
            Log::info('Start processing products method.');

            $filter = $request->input('filter', 'all');

            Log::info('Fetch Paginated Products.');

            $getAllProducts = DB::connection('sqlsrv')
                ->table('KreatorProducts AS kp')
                ->join('KreatorProductTypes AS kpt', 'kp.ProductTypeId', '=', 'kpt.Id')
                ->select(
                    'kp.Id',
                    'kpt.ProductTypeName',
                    'kp.ProductCoverPicture',
                    'kp.ProductName',
                    'kp.SalesPageUrl',
                    'kp.OriginalPrice',
                    'kp.DateCreated',
                    'kp.Status',
                    'kp.IsActive'
                )
                ->get();

            Log::info('Fetch Product Types.');

            if ($filter == 'active') {
                $getAllProducts = $getAllProducts->where('Status', '1');
            } elseif ($filter == 'deactivated') {
                $getAllProducts = $getAllProducts->where('Status', '2');
            }

            $countAllProducts = DB::connection('sqlsrv')->table('KreatorProducts')->count();
            $countisActiveProducts = DB::connection('sqlsrv')->table('KreatorProducts')->where('Status', '1')->count();
            $countisNotActiveProducts = DB::connection('sqlsrv')->table('KreatorProducts')->where('Status', '2')->count();
            $countDeleteProducts = DB::connection('sqlsrv')->table('KreatorProducts')->where('Status', '3')->count();

            Log::info('Processed product counts.');

            return view('pages.products.index', [
                'getAllProducts' => $getAllProducts,
                'countAllProducts' => $countAllProducts,
                'countisActiveProducts' => $countisActiveProducts,
                'countisNotActiveProducts' => $countisNotActiveProducts,
                'countDeleteProducts' => $countDeleteProducts,
                'filter' => $filter,
            ]);

        } catch (\Exception $e) {
            Log::error("Error in products method: {$e->getMessage()}");
            // Handle the exception as needed
        }
    }






       // FILTER SECTIONS

    public function filterUserDashboard(Request $request)
    {
        $search = $request->input('search');
        $show = $request->input('show');
        $currency = $request->input('currency');
        $dateFrom = $request->input('dateFrom');
        $dateTo = $request->input('dateTo');

        $filter = $request->input('filter', 'all');
        $getAllProducts = DB::connection('sqlsrv')
                ->table('KreatorProducts AS kp')
                ->join('KreatorProductTypes AS kpt', 'kp.ProductTypeId', '=', 'kpt.Id')
                ->select(
                    'kp.Id',
                    'kpt.ProductTypeName',
                    'kp.ProductCoverPicture',
                    'kp.ProductName',
                    'kp.SalesPageUrl',
                    'kp.OriginalPrice',
                    'kp.DateCreated',
                    'kp.Status',
                    'kp.IsActive'
                )
                ->get();

        Log::info('Fetch Product Types.');

        if ($filter == 'active') {
                $getAllProducts = $getAllProducts->where('Status', '1');
        } elseif ($filter == 'deactivated') {
                $getAllProducts = $getAllProducts->where('Status', '2');
        }

        // Apply search condition
        if ($search) {
            $getAllProducts = $getAllProducts->where(function ($query) use ($search) {
                $query->where('ProductName', 'like', "%$search%");
                    // ->orWhere('Email', 'like', "%$search%");
            });
        }

        // Apply show condition
        if ($show) {
            switch ($show) {
                case 'Today':
                    $getAllProducts->whereDate('DateCreated', Carbon::today());
                    $countAllProducts = $getAllProducts->whereDate('DateCreated', Carbon::today())->count();
                    $countisActiveProducts = $getAllProducts->where('Status', '1')->whereDate('DateCreated', Carbon::today())->count();
                    $countisNotActiveProducts = $getAllProducts->where('Status', '2')->whereDate('DateCreated', Carbon::today())->count();
                    $countDeleteProducts = $getAllProducts->where('Status', '3')->whereDate('DateCreated', Carbon::today())->count();
                    break;
                case 'Yesterday':
                    $getAllProducts->whereDate('DateCreated', Carbon::yesterday());
                    $countAllProducts = $getAllProducts->whereDate('DateCreated', Carbon::yesterday())->count();
                    $countisActiveProducts = $getAllProducts->where('Status', '1')->whereDate('DateCreated', Carbon::yesterday())->count();
                    $countisNotActiveProducts = $getAllProducts->where('Status', '2')->whereDate('DateCreated', Carbon::yesterday())->count();
                    $countDeleteProducts = $getAllProducts->where('Status', '3')->whereDate('DateCreated', Carbon::yesterday())->count();
                    break;
                case 'LastMonth':
                    $getAllProducts->whereMonth('DateCreated', Carbon::now()->subMonth()->month);
                    $countAllProducts = $getAllProducts->whereDate('DateCreated', Carbon::now()->subMonth()->month)->count();
                    $countisActiveProducts = $getAllProducts->where('Status', '1')->whereDate('DateCreated', Carbon::now()->subMonth()->month)->count();
                    $countisNotActiveProducts = $getAllProducts->where('Status', '2')->whereDate('DateCreated', Carbon::now()->subMonth()->month)->count();
                    $countDeleteProducts = $getAllProducts->where('Status', '3')->whereDate('DateCreated', Carbon::now()->subMonth()->month)->count();
                    break;
                case 'Last6Months':
                    $getAllProducts->where('DateCreated', '>=', Carbon::now()->subMonths(6));
                    $countAllProducts = $getAllProducts->whereDate('DateCreated', Carbon::now()->subMonths(6))->count();
                    $countisActiveProducts = $getAllProducts->where('Status', '1')->whereDate('DateCreated', Carbon::now()->subMonths(6))->count();
                    $countisNotActiveProducts = $getAllProducts->where('Status', '2')->whereDate('DateCreated', Carbon::now()->subMonths(6))->count();
                    $countDeleteProducts = $getAllProducts->where('Status', '3')->whereDate('DateCreated', Carbon::now()->subMonths(6))->count();
                    break;
                // Add other cases for different "show" options
                default:
                    // Handle default case or additional logic
                    break;
            }
        }

       // Apply date range condition
        if ($dateFrom) {
            $getAllProducts->whereDate('DateCreated', '>=', $dateFrom);
            $countAllProducts = $getAllProducts->whereDate('DateCreated', '>=', $dateFrom)->count();
            $countisActiveProducts = $getAllProducts->where('Status', '1')->whereDate('DateCreated', '>=', $dateFrom)->count();
            $countisNotActiveProducts = $getAllProducts->where('Status', '2')->whereDate('DateCreated', '>=', $dateFrom)->count();
            $countDeleteProducts = $getAllProducts->where('Status', '3')->whereDate('DateCreated', '>=', $dateFrom)->count();
        }

        if ($dateTo) {
            $getAllProducts->whereDate('DateCreated', '<=', $dateTo);
            $countAllProducts = $getAllProducts->whereDate('DateCreated', '>=', $dateTo)->count();
            $countisActiveProducts = $getAllProducts->where('Status', '1')->whereDate('DateCreated', '>=', $dateTo)->count();
            $countisNotActiveProducts = $getAllProducts->where('Status', '2')->whereDate('DateCreated', '>=', $dateTo)->count();
            $countDeleteProducts = $getAllProducts->where('Status', '3')->whereDate('DateCreated', '>=', $dateTo)->count();
        }


        return view('pages.products.index', [
            'getAllProducts' => $getAllProducts,
            'countAllProducts' => $countAllProducts,
            'countisActiveProducts' => $countisActiveProducts,
            'countisNotActiveProducts' => $countisNotActiveProducts,
            'countDeleteProducts' => $countDeleteProducts,
            'filter' => $filter,
        ]);

    }





}
