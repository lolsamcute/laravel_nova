<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon; // For date/time calculations
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class AllAffiliatesDasboardController extends Controller
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
            $getUser = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsAffiliate', true)->take(5)->latest('DateUpdated')->get();


            // Kreators COUNTERS
            $getInTotalAffiliates = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsAffiliate', true)->count();

            $getActiveAffiliates = DB::connection('sqlsrv')
                    ->table('AspNetUsers')
                    ->where('IsActive', true)
                    ->where('IsAffiliate', true)
                    ->where('DateUpdated', '>=', $timeFrame)
                    ->count();

            $getInActiveAffiliates = DB::connection('sqlsrv')
                    ->table('AspNetUsers')
                    ->where('IsActive', false)
                    ->where('IsAffiliate', true)
                    ->where(function ($query) use ($timeFrame) {
                        $query->where('DateUpdated', '<', $timeFrame)
                            ->orWhereNull('DateUpdated');
                    })
                    ->count();



            // Initialize $sumSales
            $sumSales = 0;

            // Fetch the sales data from your database and prepare it for the chart
            $labels = [];
            $data = [];

            $monthlySales = DB::connection('sqlsrv')
                ->table('AspNetUsers')
                ->join('PaymentCheckOutDetails', 'AspNetUsers.Id', '=', 'PaymentCheckOutDetails.UserId')
                ->select('AspNetUsers.Id', 'PaymentCheckOutDetails.DateCreated', 'PaymentCheckOutDetails.Amount')
                ->where('AspNetUsers.IsAffiliate', true)
                ->where('AspNetUsers.IsActive', true)
                ->where('PaymentCheckOutDetails.Status', 'Successful')
                ->where('PaymentCheckOutDetails.Currency', 'NGN')
                ->get()
                ->groupBy(function ($date) {
                    return Carbon::parse($date->DateCreated)->format('M');
                });



            $labels = array_merge($labels, $monthlySales->keys()->toArray());
            $data = array_merge($data, $monthlySales->map->sum('Amount')->toArray());
            $sumSales += $monthlySales->sum('Amount');

            Log::info("Processed sales count");

            return view('pages.dashboards.affiliates.AllAffiliatesDashboard', [
                            'getUser' => $getUser,
                            'getInTotalAffiliates' => $getInTotalAffiliates,
                            'getActiveAffiliates' => $getActiveAffiliates,
                            'getInActiveAffiliates' => $getInActiveAffiliates,
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
            $getUser = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsAffiliate', true)->take(5)->latest('DateUpdated')->get();


            // Kreators COUNTERS
            $getInTotalAffiliates = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsAffiliate', true)->count();

            $getActiveAffiliates = DB::connection('sqlsrv')
                    ->table('AspNetUsers')
                    ->where('IsActive', true)
                    ->where('IsAffiliate', true)
                    ->where('DateUpdated', '>=', $timeFrame)
                    ->count();

            $getInActiveAffiliates = DB::connection('sqlsrv')
                    ->table('AspNetUsers')
                    ->where('IsActive', false)
                    ->where('IsAffiliate', true)
                    ->where(function ($query) use ($timeFrame) {
                        $query->where('DateUpdated', '<', $timeFrame)
                            ->orWhereNull('DateUpdated');
                    })
                    ->count();
        // Get the selected filter option from the request (assuming the select element has a name "filterMe")
        $filter = $request->filterMe;

        // Initialize $sumSales
        $sumSales = 0;

        // Calculate the sales amount based on the selected filter
            if ($filter === 'SalesthisToday') {
                $sumSales = DB::connection('sqlsrv')->table('AspNetUsers')
                            ->select('AspNetUsers.Id', DB::raw('SUM(PaymentCheckOutDetails.Amount) as gross_sales'))
                            ->leftJoin('PaymentCheckOutDetails', 'AspNetUsers.Id', '=', 'PaymentCheckOutDetails.UserId')
                            ->where('AspNetUsers.IsAffiliate', true) // Specify the table for IsAffiliate
                            ->where('PaymentCheckOutDetails.Status', 'Successful')
                            ->where('PaymentCheckOutDetails.Currency', 'NGN')
                            ->whereDate('PaymentCheckOutDetails.DateCreated', Carbon::today()) // Corrected the date filter
                            ->groupBy('AspNetUsers.Id') // You may need to include other columns from AspNetUsers here
                            ->sum('Amount');

                       } elseif ($filter === 'SalesthisWeek') {
                $sumSales = DB::connection('sqlsrv')->table('AspNetUsers')
                            ->select('AspNetUsers.Id', DB::raw('SUM(PaymentCheckOutDetails.Amount) as gross_sales'))
                            ->leftJoin('PaymentCheckOutDetails', 'AspNetUsers.Id', '=', 'PaymentCheckOutDetails.UserId')
                            ->where('AspNetUsers.IsAffiliate', true) // Specify the table for IsAffiliate
                            ->where('PaymentCheckOutDetails.Status', 'Successful')
                            ->where('PaymentCheckOutDetails.Currency', 'NGN')
                            ->whereDate('PaymentCheckOutDetails.DateCreated', [$startOfWeek, $endOfWeek]) // Corrected the date filter
                            ->groupBy('AspNetUsers.Id') // You may need to include other columns from AspNetUsers here
                            ->sum('Amount');

            } elseif ($filter === 'SalesthisMonth') {
                $sumSales = DB::connection('sqlsrv')->table('AspNetUsers')
                            ->select('AspNetUsers.Id', DB::raw('SUM(PaymentCheckOutDetails.Amount) as gross_sales'))
                            ->leftJoin('PaymentCheckOutDetails', 'AspNetUsers.Id', '=', 'PaymentCheckOutDetails.UserId')
                            ->where('AspNetUsers.IsAffiliate', true) // Specify the table for IsAffiliate
                            ->where('PaymentCheckOutDetails.Status', 'Successful')
                            ->where('PaymentCheckOutDetails.Currency', 'NGN')
                            ->whereDate('PaymentCheckOutDetails.DateCreated', Carbon::now()->month) // Corrected the date filter
                            ->groupBy('AspNetUsers.Id') // You may need to include other columns from AspNetUsers here
                            ->sum('Amount');


            } elseif ($filter === 'AlltimeSales') {
                $sumSales = DB::connection('sqlsrv')->table('AspNetUsers')
                            ->select('AspNetUsers.Id', DB::raw('SUM(PaymentCheckOutDetails.Amount) as gross_sales'))
                            ->leftJoin('PaymentCheckOutDetails', 'AspNetUsers.Id', '=', 'PaymentCheckOutDetails.UserId')
                            ->where('AspNetUsers.IsAffiliate', true) // Specify the table for IsAffiliate
                            ->where('PaymentCheckOutDetails.Status', 'Successful')
                            ->where('PaymentCheckOutDetails.Currency', 'NGN')
                            ->groupBy('AspNetUsers.Id') // You may need to include other columns from AspNetUsers here
                            ->sum('Amount');

            }


       // Fetch the sales data from your database and prepare it for the chart
        $labels = [];
        $data = [];

        $monthlySales = DB::connection('sqlsrv')
                ->table('AspNetUsers')
                ->join('PaymentCheckOutDetails', 'AspNetUsers.Id', '=', 'PaymentCheckOutDetails.UserId')
                ->select('AspNetUsers.Id', 'PaymentCheckOutDetails.DateCreated', 'PaymentCheckOutDetails.Amount')
                ->where('AspNetUsers.IsAffiliate', true)
                ->where('AspNetUsers.IsActive', true)
                ->where('PaymentCheckOutDetails.Status', 'Successful')
                ->where('PaymentCheckOutDetails.Currency', 'NGN')
                ->get()
                ->groupBy(function ($date) {
                    return Carbon::parse($date->DateCreated)->format('M');
                });
        $labels = array_merge($labels, $monthlySales->keys()->toArray());
        $data = array_merge($data, $monthlySales->map->sum('Amount')->toArray());
        $sumSales += $monthlySales->sum('Amount');

        Log::info("Processed sales count");


        return view('pages.dashboards.affiliates.AllAffiliatesDashboard', [
            'getUser' => $getUser,
            'labels' => $labels,
            'data' => $data,
            'sumSales' => $sumSales,
            'getInTotalAffiliates' => $getInTotalAffiliates,
            'getActiveAffiliates' => $getActiveAffiliates,
            'getInActiveAffiliates' => $getInActiveAffiliates,
        ]);
    }








    /**
     * Show the Affiliates dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function affiliates(Request $request)
    {

        Log::info('Start processing index method.');

        $filter = $request->input('filter', 'all');

        // Fetch users with their aggregated gross sales
        $userGrossSales = DB::connection('sqlsrv')->table('AspNetUsers')
                ->select('AspNetUsers.Id', 'AspNetUsers.CreatedAt', 'AspNetUsers.FullName', 'AspNetUsers.Email', 'AspNetUsers.PhoneNumber', 'AspNetUsers.IsAffiliate', 'AspNetUsers.IsActive', DB::raw('SUM(PaymentCheckOutDetails.Amount) as gross_sales'))
                ->leftJoin('PaymentCheckOutDetails', 'AspNetUsers.Id', '=', 'PaymentCheckOutDetails.UserId')
                ->where('AspNetUsers.IsAffiliate', true) // Specify the table for IsAffiliate
                ->groupBy('AspNetUsers.Id', 'AspNetUsers.CreatedAt', 'AspNetUsers.FullName', 'AspNetUsers.Email', 'AspNetUsers.PhoneNumber', 'AspNetUsers.IsAffiliate', 'AspNetUsers.IsActive')
                ->orderByDesc('gross_sales') // Order by total gross sales in descending order
                ->get();

        Log::info('Complete processing Fetch user per payment');


        return view('pages.users.affiliates.affiliates', [
            'userGrossSales' => $userGrossSales,
            'filter' => $filter, // Add this line to pass $filter to the view
        ]);
    }





    public function filterAffiliatesDashboard(Request $request)
    {
        $search = $request->input('search');
        $show = $request->input('show');
        $currency = $request->input('currency');
        $dateFrom = $request->input('dateFrom');
        $dateTo = $request->input('dateTo');

       $filter = $request->input('filter', 'all');
       $getAllUsers = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsAffiliate', true)->latest('CreatedAt');

        if ($filter == 'active') {
            $getAllUsers->where('IsActive', 1);
        } elseif ($filter == 'deactivated') {
            $getAllUsers->where('IsActive', 0);
        }

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
                ->select('AspNetUsers.Id', 'AspNetUsers.CreatedAt', 'AspNetUsers.FullName', 'AspNetUsers.Email', 'AspNetUsers.PhoneNumber', 'AspNetUsers.IsAffiliate', 'AspNetUsers.IsActive', DB::raw('SUM(PaymentCheckOutDetails.Amount) as gross_sales'))
                ->leftJoin('PaymentCheckOutDetails', 'AspNetUsers.Id', '=', 'PaymentCheckOutDetails.UserId')
                ->where('AspNetUsers.IsAffiliate', true) // Specify the table for IsAffiliate
                ->where('PaymentCheckOutDetails.Status', 'Successful')
                ->where('PaymentCheckOutDetails.Currency', 'NGN')
                ->groupBy('AspNetUsers.Id', 'AspNetUsers.CreatedAt', 'AspNetUsers.FullName', 'AspNetUsers.Email', 'AspNetUsers.PhoneNumber', 'AspNetUsers.IsAffiliate', 'AspNetUsers.IsActive')
                ->orderByDesc('gross_sales') // Order by total gross sales in descending order
                ->get();




        return view('pages.users.affiliates.affiliates', [
            'getAllUsers' => $getAllUsers,
            'grossSales' => $grossSales,
            'search' => $search,
            'show' => $show,
            'currency' => $currency,
            'dateFrom' => $dateFrom,
            'dateTo' => $dateTo,
             'filter' => $filter,
        ]);
    }


    public function affiliateActivate($Id)
    {
        $affiliate = User::where('Id', $Id)->first();

        if (!$affiliate) {
            return redirect()->route('affiliates.index')->with('error', 'Affiliate not found.');
        }

        // Update the affiliate status to deactivated
        $affiliate->update(['IsActive' => true]);

        return redirect()->route('affiliates.index')->with('success', 'Affiliate Activated successfully.');
    }


    public function deactivate($Id)
    {
        $affiliate = User::where('Id', $Id)->first();

        if (!$affiliate) {
            return redirect()->route('affiliates.index')->with('error', 'Affiliate not found.');
        }

        // Update the affiliate status to deactivated
        $affiliate->update(['IsActive' => false]);

        return redirect()->route('affiliates.index')->with('success', 'Affiliate deactivated successfully.');
    }


}
