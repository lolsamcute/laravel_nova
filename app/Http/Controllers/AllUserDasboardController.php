<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AllUserDasboardController extends Controller
{
    public function index()
    {
        try {

            Log::info('Start processing index method.');

            $now = Carbon::now();
            $startOfWeek = $now->startOfWeek();
            $endOfWeek = $now->endOfWeek();

             // Calculate the date 30 days ago
            $timeFrame = Carbon::now()->subDays(30);

            // USERS TABLE
            $getUser = DB::connection('sqlsrv')->table('AspNetUsers')->take(5)->latest('DateUpdated')->get();

            // USERS COUNTERS
            $userCount = DB::connection('sqlsrv')->table('AspNetUsers')->count();

            $userActiveCount = DB::connection('sqlsrv')
                ->table('AspNetUsers')
                ->where('IsActive', true)
                ->where('DateUpdated', '>=', $timeFrame)
                ->count();

            $userInActiveCount = DB::connection('sqlsrv')
                ->table('AspNetUsers')
                ->where(function ($query) use ($timeFrame) {
                    $query->where('DateUpdated', '<', $timeFrame)
                        ->orWhereNull('DateUpdated');
                })
                ->count();

            $userDeactivatedCount = DB::connection('sqlsrv')
                ->table('AspNetUsers')
                ->where('IsActive', false)
                ->where('DateUpdated', '>=', $timeFrame)
                ->count();


            // Initialize $sumSales
            $sumSales = 0;

            // Fetch the sales data from your database and prepare it for the chart
            $labels = [];
            $data = [];

            $monthlySales = DB::connection('sqlsrv')->table('PaymentCheckOutDetails')
                                                        ->where('Status', 'Successful')
                                                        ->where('Currency', 'NGN')
                                                        ->select('DateCreated', 'Amount')
                                                        ->get()
                                                        ->groupBy(function ($date) {
                                                            return Carbon::parse($date->DateCreated)->format('M');
                                                        });
            $labels = array_merge($labels, $monthlySales->keys()->toArray());
            $data = array_merge($data, $monthlySales->map->sum('Amount')->toArray());
            $sumSales += $monthlySales->sum('Amount');

            Log::info("Processed sales count");

            return view('pages.dashboards.users.allUsersDashboard', [
                'getUser' => $getUser,
                'userCount' => $userCount,
                'userActiveCount' => $userActiveCount,
                'userInActiveCount' => $userInActiveCount,
                'userDeactivatedCount' => $userDeactivatedCount,
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
        $getUser = DB::connection('sqlsrv')->table('AspNetUsers')->take(5)->latest('DateUpdated')->get();

        // USERS COUNTERS
        $userCount = DB::connection('sqlsrv')->table('AspNetUsers')->count();

        $userActiveCount = DB::connection('sqlsrv')
                ->table('AspNetUsers')
                ->where('IsActive', true)
                ->where('DateUpdated', '>=', $timeFrame)
                ->count();

        $userInActiveCount = DB::connection('sqlsrv')
                ->table('AspNetUsers')
                ->where(function ($query) use ($timeFrame) {
                    $query->where('DateUpdated', '<', $timeFrame)
                        ->orWhereNull('DateUpdated');
                })
                ->count();

        $userDeactivatedCount = DB::connection('sqlsrv')
                ->table('AspNetUsers')
                ->where('IsActive', false)
                ->where('DateUpdated', '>=', $timeFrame)
                ->count();


        // Get the selected filter option from the request (assuming the select element has a name "filterMe")
        $filter = $request->filterMe;

        // Calculate the sales amount based on the selected filter
        if ($filter === 'SalesthisToday') {
            // Calculate sales for today
            $sumSales = DB::connection('sqlsrv')->table('PaymentCheckOutDetails')
                                                        ->where('Status', 'Successful')
                                                        ->where('Currency', 'NGN')
                                                        ->whereDate('DateCreated', Carbon::today())->sum('Amount');

        } elseif ($filter === 'SalesthisWeek') {
            // Calculate sales for this week
            $sumSales = DB::connection('sqlsrv')->table('PaymentCheckOutDetails')
                                                        ->where('Status', 'Successful')
                                                        ->where('Currency', 'NGN')
                                                        ->whereBetween('DateCreated', [$startOfWeek, $endOfWeek])->sum('Amount');


        } elseif ($filter === 'SalesthisMonth') {
            // Calculate sales for this month
            $sumSales = DB::connection('sqlsrv')->table('PaymentCheckOutDetails')
                                                        ->where('Status', 'Successful')
                                                        ->where('Currency', 'NGN')
                                                        ->whereMonth('DateCreated', Carbon::now()->month)->sum('Amount');

        } elseif ($filter === 'AlltimeSales') {
            // Calculate all-time sales
            $sumSales = DB::connection('sqlsrv')->table('PaymentCheckOutDetails')
                                                        ->where('Status', 'Successful')
                                                        ->where('Currency', 'NGN')
                                                        ->sum('Amount');

            Log::error("Error: {$sumSales}");

        }

        // Fetch the sales data from your database and prepare it for the chart
        $labels = [];
        $data = [];


        // Your existing code to prepare chart data
        $monthlySales = DB::connection('sqlsrv')->table('PaymentCheckOutDetails')
                                                        ->where('Status', 'Successful')
                                                        ->where('Currency', 'NGN')
                                                        ->select('DateCreated', 'Amount')
                                                        ->get()
                                                        ->groupBy(function ($date) {
                                                            return Carbon::parse($date->DateCreated)->format('M');
                                                        });

        $labels = $monthlySales->keys();
        $data = $monthlySales->map->sum('Amount');


        return view('pages.dashboards.users.allUsersDashboard', [
            'getUser' => $getUser,
            'userCount' => $userCount,
            'userActiveCount' => $userActiveCount,
            'userInActiveCount' => $userInActiveCount,
            'labels' => $labels,
            'data' => $data,
            'sumSales' => $sumSales,
        ]);
    }


    /**
     * Show the User dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
    */


    public function users(Request $request)
    {
        Log::info('Start processing index method.');

        $filter = $request->input('filter', 'all');

        // Fetch users with their aggregated gross sales
        $userGrossSales = DB::connection('sqlsrv')->table('AspNetUsers')
            ->select('AspNetUsers.Id', 'AspNetUsers.CreatedAt', 'AspNetUsers.FullName', 'AspNetUsers.Email', 'AspNetUsers.PhoneNumber', 'AspNetUsers.IsAffiliate','AspNetUsers.IsActive', DB::raw('SUM(PaymentCheckOutDetails.Amount) as gross_sales'))
            ->leftJoin('PaymentCheckOutDetails', 'AspNetUsers.Id', '=', 'PaymentCheckOutDetails.UserId')
            // ->where('PaymentCheckOutDetails.Status', 'Successful')
            // ->where('PaymentCheckOutDetails.Currency', 'NGN')
            ->groupBy('AspNetUsers.Id', 'AspNetUsers.CreatedAt', 'AspNetUsers.FullName', 'AspNetUsers.Email', 'AspNetUsers.PhoneNumber', 'AspNetUsers.IsAffiliate','AspNetUsers.IsActive')
            //->orderBy('AspNetUsers.CreatedAt', 'desc')
            ->latest('CreatedAt')
            ->get();

        Log::info('Complete processing Fetch user per payment');


        return view('pages.users.users.index', [
            'userGrossSales' => $userGrossSales,
            'filter' => $filter,
        ]);
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

        // Initialize the query builder for users
        $getAllUsers = DB::connection('sqlsrv')->table('AspNetUsers')->latest('CreatedAt');

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
        $userGrossSales = $getAllUsers
            ->select('AspNetUsers.Id', 'AspNetUsers.CreatedAt', 'AspNetUsers.FullName', 'AspNetUsers.Email', 'AspNetUsers.PhoneNumber', 'AspNetUsers.IsAffiliate','AspNetUsers.IsActive', DB::raw('SUM(PaymentCheckOutDetails.Amount) as gross_sales'))
            ->leftJoin('PaymentCheckOutDetails', 'AspNetUsers.Id', '=', 'PaymentCheckOutDetails.UserId')
            ->where('PaymentCheckOutDetails.Status', 'Successful')
            ->where('PaymentCheckOutDetails.Currency', 'NGN')
            ->groupBy('AspNetUsers.Id', 'AspNetUsers.CreatedAt', 'AspNetUsers.FullName', 'AspNetUsers.Email', 'AspNetUsers.PhoneNumber', 'AspNetUsers.IsAffiliate','AspNetUsers.IsActive')
           // ->orderBy('AspNetUsers.CreatedAt', 'desc')
            ->latest('CreatedAt')
            ->get();

        return view('pages.users.users.index', [
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
        $affiliate = DB::connection('sqlsrv')->table('AspNetUsers')->where('Id', $Id)->first();

        if (!$affiliate) {
            return redirect()->route('user.index')->with('error', 'Users not found.');
        }

        // Update the Users status to deactivated
        $affiliate->update(['IsActive' => false]);

        return redirect()->route('user.index')->with('success', 'Users deactivated successfully.');
    }


    public function activate($Id)
    {
        $affiliate = DB::connection('sqlsrv')->table('AspNetUsers')->where('Id', $Id)->first();

        if (!$affiliate) {
            return redirect()->route('user.index')->with('error', 'Users not found.');
        }

        // Update the Users status to deactivated
        $affiliate->update(['IsActive' => true]);

        return redirect()->route('user.index')->with('success', 'Users Activated successfully.');
    }


    public function usersView(Request $request)
    {

        return "Coming soon";

    }



}
