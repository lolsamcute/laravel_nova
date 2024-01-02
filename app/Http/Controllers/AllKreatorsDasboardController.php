<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon; // For date/time calculations
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class AllKreatorsDasboardController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        try{
            // Calculate the start and end timestamps for the current week
            Log::info('Start processing index method.');

            $now = Carbon::now();
            $startOfWeek = $now->startOfWeek();
            $endOfWeek = $now->endOfWeek();

             // Calculate the date 30 days ago
            $timeFrame = Carbon::now()->subDays(30);

            // USERS TABLE
            $getUsers = DB::connection('sqlsrv')
                ->table('KreatorProducts')
                ->leftJoin('AspNetUsers', 'KreatorProducts.UserId', '=', 'AspNetUsers.Id')
                ->select('AspNetUsers.FullName', 'AspNetUsers.Email', 'AspNetUsers.CreatedAt')
                ->take(5)
                ->latest('CreatedAt')
                ->get();


            // Kreators COUNTERS

            $getInTotalKreators = DB::connection('sqlsrv')->table('KreatorProducts')->distinct()->count('UserId');

            $getInActiveKreators = DB::connection('sqlsrv')
                ->table('KreatorProducts as kp')
                ->join('AspNetUsers as au', 'kp.UserId', '=', 'au.Id')
                ->where('au.DateUpdated', '>=', $timeFrame)
                ->distinct()
                ->count('kp.UserId');

            $inactiveProducts = DB::connection('sqlsrv')
                ->table('KreatorProducts as kp')
                ->leftJoin('AspNetUsers as au', 'kp.UserId', '=', 'au.Id')
                ->where(function ($query) use ($timeFrame) {
                    $query->where('au.DateUpdated', '<', $timeFrame)
                        ->orWhereNull('au.DateUpdated');
                })
                ->distinct()
                ->count('kp.UserId');


            // Initialize $sumSales
            $sumSales = 0;

            // Fetch the sales data from your database and prepare it for the chart
            $labels = [];
            $data = [];

           $monthlySales = DB::connection('sqlsrv')
                ->table('KreatorProducts')
                ->join('PaymentCheckOutDetails', 'KreatorProducts.Id', '=', 'PaymentCheckOutDetails.ProductId')
                ->select('KreatorProducts.UserId', 'PaymentCheckOutDetails.DateCreated', 'PaymentCheckOutDetails.Amount')
                ->get()
                ->groupBy(function ($date) {
                    return Carbon::parse($date->DateCreated)->format('M');
                });

            $labels = array_merge($labels, $monthlySales->keys()->toArray());
            $data = array_merge($data, $monthlySales->map->sum('Amount')->toArray());
            $sumSales += $monthlySales->sum('Amount');


            Log::info("Processed sales count");

            return view('pages.dashboards.kreators.AllKreatorsDashboard', [
                            'getUsers' => $getUsers,
                            'getInTotalKreators' => $getInTotalKreators,
                            'getInActiveKreators' => $getInActiveKreators,
                            'inactiveProducts' => $inactiveProducts,
                            'labels' => $labels,
                            'data' => $data,
                            'sumSales' => $sumSales,
                        ]);


        } catch (\Exception $e) {
            Log::error("Error in index method: {$e->getMessage()}");
            // Handle the exception as needed
        }

    }



    public function getFilteredSales(Request $request)
    {

        // Calculate the start and end timestamps for the current week
        $now = Carbon::now();
        $startOfWeek = $now->startOfWeek();
        $endOfWeek = $now->endOfWeek();

        // Calculate the date 30 days ago
        $timeFrame = Carbon::now()->subDays(30);

        // USERS TABLE
        $getUsers = DB::connection('sqlsrv')
                ->table('KreatorProducts')
                ->leftJoin('AspNetUsers', 'KreatorProducts.UserId', '=', 'AspNetUsers.Id')
                ->select('AspNetUsers.FullName', 'AspNetUsers.Email', 'AspNetUsers.CreatedAt')
                ->take(5)
                ->latest('CreatedAt')
                ->get();


        // Kreators COUNTERS
       $getInTotalKreators = DB::connection('sqlsrv')->table('KreatorProducts')->distinct()->count('UserId');

        $getInActiveKreators = DB::connection('sqlsrv')
            ->table('KreatorProducts as kp')
            ->join('AspNetUsers as au', 'kp.UserId', '=', 'au.Id')
            ->where('au.DateUpdated', '>=', $timeFrame)
            ->distinct()
            ->count('kp.UserId');

        $inactiveProducts = DB::connection('sqlsrv')
                ->table('KreatorProducts as kp')
                ->leftJoin('AspNetUsers as au', 'kp.UserId', '=', 'au.Id')
                ->where(function ($query) use ($timeFrame) {
                    $query->where('au.DateUpdated', '<', $timeFrame)
                        ->orWhereNull('au.DateUpdated');
                })
                ->distinct()
                ->count('kp.UserId');

        // Get the selected filter option from the request (assuming the select element has a name "filterMe")
        $filter = $request->filterMe;

        // Initialize $sumSales
        $sumSales = 0;

        // Calculate the sales amount based on the selected filter
            if ($filter === 'SalesthisToday') {
                $sumSales = DB::connection('sqlsrv')->table('KreatorProducts')
                            ->join('PaymentCheckOutDetails', 'KreatorProducts.Id', '=', 'PaymentCheckOutDetails.ProductId')
                            ->where('PaymentCheckOutDetails.Status', 'Successful')
                            ->where('PaymentCheckOutDetails.Currency', 'NGN')
                            ->select('KreatorProducts.UserId', 'PaymentCheckOutDetails.DateCreated', 'PaymentCheckOutDetails.Amount')
                            ->whereDate('PaymentCheckOutDetails.DateCreated', Carbon::today()) // Corrected the date filter
                            ->sum('Amount');

            } elseif ($filter === 'SalesthisWeek') {
                $sumSales = DB::connection('sqlsrv')->table('KreatorProducts')
                            ->join('PaymentCheckOutDetails', 'KreatorProducts.Id', '=', 'PaymentCheckOutDetails.ProductId')
                            ->where('PaymentCheckOutDetails.Status', 'Successful')
                            ->where('PaymentCheckOutDetails.Currency', 'NGN')
                            ->select('KreatorProducts.UserId', 'PaymentCheckOutDetails.DateCreated', 'PaymentCheckOutDetails.Amount')
                            ->whereDate('PaymentCheckOutDetails.DateCreated', [$startOfWeek, $endOfWeek]) // Corrected the date filter
                            ->sum('Amount');


            } elseif ($filter === 'SalesthisMonth') {
                 $sumSales = DB::connection('sqlsrv')
                            ->table('KreatorProducts')
                            ->join('PaymentCheckOutDetails', 'KreatorProducts.Id', '=', 'PaymentCheckOutDetails.ProductId')
                            ->select('KreatorProducts.UserId', 'PaymentCheckOutDetails.DateCreated', 'PaymentCheckOutDetails.Amount')
                            ->where('PaymentCheckOutDetails.Status', 'Successful')
                            ->where('PaymentCheckOutDetails.Currency', 'NGN')
                            ->where('PaymentCheckOutDetails.DateCreated', '>=', Carbon::now()->startOfMonth())
                            ->where('PaymentCheckOutDetails.DateCreated', '<=', Carbon::now()->endOfMonth())
                            ->sum('Amount');


            } elseif ($filter === 'AlltimeSales') {
                $sumSales = DB::connection('sqlsrv')
                        ->table('KreatorProducts')
                        ->join('PaymentCheckOutDetails', 'KreatorProducts.Id', '=', 'PaymentCheckOutDetails.ProductId')
                        ->where('PaymentCheckOutDetails.Status', 'Successful')
                        ->where('PaymentCheckOutDetails.Currency', 'NGN')
                        ->select('KreatorProducts.UserId', 'PaymentCheckOutDetails.DateCreated', 'PaymentCheckOutDetails.Amount')
                        ->sum('Amount');


            }



        // Fetch the sales data from your database and prepare it for the chart
        $labels = [];
        $data = [];

        $monthlySales = DB::connection('sqlsrv')
                ->table('KreatorProducts')
                ->join('PaymentCheckOutDetails', 'KreatorProducts.Id', '=', 'PaymentCheckOutDetails.ProductId')
                ->select('KreatorProducts.UserId', 'PaymentCheckOutDetails.DateCreated', 'PaymentCheckOutDetails.Amount')
                ->get()
                ->groupBy(function ($date) {
                    return Carbon::parse($date->DateCreated)->format('M');
                });

        $labels = array_merge($labels, $monthlySales->keys()->toArray());
        $data = array_merge($data, $monthlySales->map->sum('Amount')->toArray());
        $sumSales += $monthlySales->sum('Amount');

        Log::info("Processed sales count");

        return view('pages.dashboards.kreators.AllKreatorsDashboard', [
            'getUsers' => $getUsers,
            'labels' => $labels,
            'data' => $data,
            'sumSales' => $sumSales,
            'getInTotalKreators' => $getInTotalKreators,
            'getInActiveKreators' => $getInActiveKreators,
            'inactiveProducts' => $inactiveProducts,
        ]);
    }






    /**
     * Show the Kreators dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
    */


    public function kreators(Request $request)
    {

        Log::info('Start processing index method.');

        $filter = $request->input('filter', 'all');

        // Fetch users with their aggregated gross sales
        $userGrossSales = DB::connection('sqlsrv')
            ->table('AspNetUsers')
            ->select(
                'AspNetUsers.Id',
                'AspNetUsers.CreatedAt',
                'AspNetUsers.FullName',
                'AspNetUsers.Email',
                'AspNetUsers.PhoneNumber',
                'AspNetUsers.IsAffiliate',
                'AspNetUsers.IsActive',
                DB::raw('SUM(PaymentCheckOutDetails.Amount) as gross_sales')
            )
            ->leftJoin('KreatorProducts', 'AspNetUsers.Id', '=', 'KreatorProducts.UserId')
            ->leftJoin('PaymentCheckOutDetails', 'KreatorProducts.Id', '=', 'PaymentCheckOutDetails.ProductId')
            ->groupBy(
                'AspNetUsers.Id',
                'AspNetUsers.CreatedAt',
                'AspNetUsers.FullName',
                'AspNetUsers.Email',
                'AspNetUsers.PhoneNumber',
                'AspNetUsers.IsAffiliate',
                'AspNetUsers.IsActive'
            )
            ->orderByDesc('gross_sales')
            ->latest('CreatedAt')
            ->get();

        Log::info('Complete processing Fetch user per payment');

        return view('pages.users.kreators.kreators', [
            'userGrossSales' => $userGrossSales,
            'filter' => $filter, // Add this line to pass $filter to the view
        ]);
    }




    public function filterKreatorsDashboard(Request $request)
    {
        $search = $request->input('search');
        $show = $request->input('show');
        $currency = $request->input('currency');
        $dateFrom = $request->input('dateFrom');
        $dateTo = $request->input('dateTo');

        $filter = $request->input('filter', 'all');

        $getUsers = DB::connection('sqlsrv')
                ->table('KreatorProducts')
                ->leftJoin('AspNetUsers', 'KreatorProducts.UserId', '=', 'AspNetUsers.Id')
                ->latest('CreatedAt')
                ->get();

        // Apply search condition
        if ($search) {
            $getAllUsers->where(function ($query) use ($search) {
                $query->where('FullName', 'like', "%$search%")
                    ->orWhere('Email', 'like', "%$search%")
                    ->orWhere('PhoneNumber', 'like', "%$search%");
            });
        }

        // Apply show condition
        if ($show) {
            switch ($show) {
                case 'Today':
                    $getAllUsers->whereDate('CreatedAt', Carbon::today());
                    break;
                case 'Yesterday':
                    $getAllUsers->whereDate('CreatedAt', Carbon::yesterday());
                    break;
                case 'LastMonth':
                    $getAllUsers->whereMonth('CreatedAt', Carbon::now()->subMonth()->month);
                    break;
                case 'Last6Months':
                    $getAllUsers->where('CreatedAt', '>=', Carbon::now()->subMonths(6));
                    break;
                // Add other cases for different "show" options
                default:
                    // Handle default case or additional logic
                    break;
            }
        }

       // Apply date range condition
        if ($dateFrom) {
            $getAllUsers->whereDate('CreatedAt', '>=', $dateFrom);
        }

        if ($dateTo) {
            $getAllUsers->whereDate('CreatedAt', '<=', $dateTo);
        }

       // Fetch users with their aggregated gross sales
        $userGrossSales = DB::connection('sqlsrv')
            ->table('AspNetUsers')
            ->select(
                'AspNetUsers.Id',
                'AspNetUsers.CreatedAt',
                'AspNetUsers.FullName',
                'AspNetUsers.Email',
                'AspNetUsers.PhoneNumber',
                'AspNetUsers.IsAffiliate',
                'AspNetUsers.IsActive',
                DB::raw('SUM(PaymentCheckOutDetails.Amount) as gross_sales')
            )
            ->leftJoin('KreatorProducts', 'AspNetUsers.Id', '=', 'KreatorProducts.UserId')
            ->leftJoin('PaymentCheckOutDetails', 'KreatorProducts.Id', '=', 'PaymentCheckOutDetails.ProductId')
            ->groupBy(
                'AspNetUsers.Id',
                'AspNetUsers.CreatedAt',
                'AspNetUsers.FullName',
                'AspNetUsers.Email',
                'AspNetUsers.PhoneNumber',
                'AspNetUsers.IsAffiliate',
                'AspNetUsers.IsActive'
            )
            ->orderByDesc('gross_sales')
            ->latest('CreatedAt')
            ->get();


        return view('pages.users.kreators.kreators', [
            'getAllUsers' => $getAllUsers,
            'userGrossSales' => $userGrossSales,
            'search' => $search,
            'show' => $show,
            'currency' => $currency,
            'dateFrom' => $dateFrom,
            'dateTo' => $dateTo,
             'filter' => $filter,
        ]);
    }




    public function deactivate($Id)
    {
        $kreators = DB::connection('sqlsrv')->table('AspNetUsers')->where('Id', $Id)->first();


        if (!$kreators) {
            return redirect()->route('kreators.index')->with('error', 'Kreators not found.');
        }

        // Update the Kreators status to deactivated
        $kreators->update(['IsActive' => false]);

        return redirect()->route('kreators.index')->with('success', 'Kreators deactivated successfully.');
    }

    public function kreatorsActivate($Id)
    {
        $kreators = DB::connection('sqlsrv')->table('AspNetUsers')->where('Id', $Id)->first();


        if (!$kreators) {
            return redirect()->route('kreators.index')->with('error', 'Kreators not found.');
        }

        // Update the Kreators status to deactivated
        $kreators->update(['IsActive' => true]);

        return redirect()->route('kreators.index')->with('success', 'Kreators Activated successfully.');
    }



}

