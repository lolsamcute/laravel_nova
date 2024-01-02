<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon; // For date/time calculations
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // Calculate the date 30 days ago
        $timeFrame = Carbon::now()->subDays(30);

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


        // KREATORS COUNTERS
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

        // $getDeactivatedKreators = DB::connection('sqlsrv')
        //     ->table('KreatorProducts as kp')
        //     ->join('AspNetUsers as au', 'kp.UserId', '=', 'au.Id')
        //     ->where(['kp.IsActive','=', 'False', 'kp.IsActive','=', 'false'])
        //     ->distinct()
        //     ->count('kp.UserId');


        // AFFILIATES COUNTERS

        // Get unique UserIds from AffiliateUser model
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

        return view('home',[

            'userCount' => $userCount,
            'userActiveCount' => $userActiveCount,
            'userInActiveCount' => $userInActiveCount,
            'getInTotalKreators' => $getInTotalKreators,
            'getInActiveKreators' => $getInActiveKreators,
            'inactiveProducts' => $inactiveProducts,
            // 'getDeactivatedKreators' => $getDeactivatedKreators,
            'getInTotalAffiliates' => $getInTotalAffiliates,
            'getActiveAffiliates' => $getActiveAffiliates,
            'getInActiveAffiliates' => $getInActiveAffiliates,
            'userDeactivatedCount' => $userDeactivatedCount,
        ]);
    }


    public function filterDashboard(Request $request)
    {

        $now = Carbon::now();
        $startOfWeek = $now->startOfWeek();
        $endOfWeek = $now->endOfWeek();

        // Define default filter values
        $show = $request->input('show', 'Today');
        $dateFrom = $request->input('dateFrom');
        $dateTo = $request->input('dateTo');

        // Filter the User based on the selected "Show" option
        if ($show === 'Today') {
            $userCount = DB::connection('sqlsrv')->table('AspNetUsers')->whereDate('CreatedAt', Carbon::today())->count();
            $userActiveCount = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsActive', true)->whereDate('CreatedAt', Carbon::today())->count();
            $userInActiveCount = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsActive', false)->whereDate('CreatedAt', Carbon::today())->count();

        } elseif ($show === 'Yesterday') {
            // Implement filtering for yesterday
            $userCount = DB::connection('sqlsrv')->table('AspNetUsers')->whereDate('CreatedAt', Carbon::yesterday())->count();
            $userActiveCount = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsActive', true)->whereDate('CreatedAt', Carbon::yesterday())->count();
            $userInActiveCount = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsActive', false)->whereDate('CreatedAt', Carbon::yesterday())->count();

        } elseif ($show === 'LastMonth') {
            // Implement filtering for last month
            $userCount = DB::connection('sqlsrv')
                            ->table('AspNetUsers')
                            ->whereYear('CreatedAt', '=', Carbon::now()->subMonth()->year)
                            ->whereMonth('CreatedAt', '=', Carbon::now()->subMonth()->month)
                            ->count();


            $userActiveCount = DB::connection('sqlsrv')
                            ->table('AspNetUsers')
                            ->where('IsActive', true)
                            ->whereYear('CreatedAt', '=', Carbon::now()->subMonth()->year)
                            ->whereMonth('CreatedAt', '=', Carbon::now()->subMonth()->month)
                            ->count();


            $userInActiveCount = DB::connection('sqlsrv')
                            ->table('AspNetUsers')
                            ->where('IsActive', false)->whereYear('CreatedAt', '=', Carbon::now()->subMonth()->year)
                            ->whereMonth('CreatedAt', '=', Carbon::now()->subMonth()->month)
                            ->count();



        } elseif ($show === 'Last6Months') {
            // Implement filtering for the last 6 months
            $userCount = DB::connection('sqlsrv')
                            ->table('AspNetUsers')
                            ->where('CreatedAt', '>=', Carbon::now()->subMonths(6))
                            ->count();


            $userActiveCount = DB::connection('sqlsrv')
                            ->table('AspNetUsers')
                            ->where('IsActive', true)
                            ->where('CreatedAt', '>=', Carbon::now()->subMonths(6))
                            ->count();


            $userInActiveCount = DB::connection('sqlsrv')
                            ->table('AspNetUsers')
                            ->where('IsActive', false)->where('CreatedAt', '>=', Carbon::now()->subMonths(6))
                            ->count();


        }



        // Filter the KreatorProduct model based on the selected "Show" option
        if ($show === 'Today') {

            $getInTotalKreators = DB::connection('sqlsrv')->table('AspNetUsers')->whereDate('CreatedAt', Carbon::today())->count();
            $getInActiveKreators = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsActive', true)->whereDate('CreatedAt', Carbon::today())->where('IsAffiliate', false)->count();
            $inactiveProducts = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsActive', false)->whereDate('CreatedAt', Carbon::today())->where('IsAffiliate', false)->count();

        } elseif ($show === 'Yesterday') {
            // Implement filtering for yesterday

            $getInTotalKreators = DB::connection('sqlsrv')->table('AspNetUsers')->whereDate('CreatedAt', Carbon::yesterday())->count();
            $getInActiveKreators = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsActive', true)->whereDate('CreatedAt', Carbon::yesterday())->where('IsAffiliate', false)->count();
            $inactiveProducts = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsActive', false)->whereDate('CreatedAt', Carbon::yesterday())->where('IsAffiliate', false)->count();

        } elseif ($show === 'LastMonth') {
            // Implement filtering for last month
            $getInTotalKreators = DB::connection('sqlsrv')->table('AspNetUsers')
                                            ->whereYear('CreatedAt', '=', Carbon::now()->subMonth()->year)
                                            ->whereMonth('CreatedAt', '=', Carbon::now()->subMonth()->month)
                                            ->count();

            $getInActiveKreators = DB::connection('sqlsrv')->table('AspNetUsers')
                                            ->where('IsActive', true)
                                            ->whereYear('CreatedAt', '=', Carbon::now()->subMonth()->year)
                                            ->whereMonth('CreatedAt', '=', Carbon::now()->subMonth()->month)
                                            ->where('IsAffiliate', false)
                                            ->count();

            $inactiveProducts = DB::connection('sqlsrv')->table('AspNetUsers')
                                        ->where('IsActive', false)
                                        ->whereYear('CreatedAt', '=', Carbon::now()->subMonth()->year)
                                        ->whereMonth('CreatedAt', '=', Carbon::now()->subMonth()->month)
                                        ->where('IsAffiliate', false)
                                        ->count();




        } elseif ($show === 'Last6Months') {
            // Implement filtering for the last 6 months
            $getInTotalKreators = DB::connection('sqlsrv')->table('AspNetUsers')
                                            ->where('CreatedAt', '>=', Carbon::now()->subMonths(6))
                                            ->where('IsAffiliate', false)
                                            ->count();

            $getInActiveKreators = DB::connection('sqlsrv')->table('AspNetUsers')
                                            ->where('IsActive', true)
                                            ->where('CreatedAt', '>=', Carbon::now()->subMonths(6))
                                            ->where('IsAffiliate', false)
                                            ->count();

            $inactiveProducts = DB::connection('sqlsrv')->table('AspNetUsers')
                                        ->where('IsActive', false)
                                        ->where('CreatedAt', '>=', Carbon::now()->subMonths(6))
                                        ->where('IsAffiliate', false)
                                        ->count();


        }


        // Filter the AffiliateUser based on the selected "Show" option
         if ($show === 'Today') {
            $getInTotalAffiliates = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsAffiliate', true)->whereDate('CreatedAt', Carbon::today())->count();
            $getActiveAffiliates = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsActive', true)->whereDate('CreatedAt', Carbon::today())->where('IsAffiliate', true)->count();
            $getInActiveAffiliates = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsActive', false)->whereDate('CreatedAt', Carbon::today())->where('IsAffiliate', true)->count();

        } elseif ($show === 'Yesterday') {
            // Implement filtering for yesterday
            $getInTotalAffiliates = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsAffiliate', true)->whereDate('CreatedAt', Carbon::yesterday())->count();
            $getActiveAffiliates = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsActive', true)->whereDate('CreatedAt', Carbon::yesterday())->where('IsAffiliate', true)->count();
            $getInActiveAffiliates = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsActive', false)->whereDate('CreatedAt', Carbon::yesterday())->where('IsAffiliate', true)->count();


        } elseif ($show === 'LastMonth') {
            // Implement filtering for last month
            $getInTotalAffiliates = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsAffiliate', true)->whereYear('CreatedAt', '=', Carbon::now()->subMonth()->year)
                                            ->whereMonth('CreatedAt', '=', Carbon::now()->subMonth()->month)->count();
            $getActiveAffiliates = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsActive', true)->whereYear('CreatedAt', '=', Carbon::now()->subMonth()->year)
                                            ->whereMonth('CreatedAt', '=', Carbon::now()->subMonth()->month)->where('IsAffiliate', true)->count();
            $getInActiveAffiliates = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsActive', false)->whereYear('CreatedAt', '=', Carbon::now()->subMonth()->year)
                                            ->whereMonth('CreatedAt', '=', Carbon::now()->subMonth()->month)->where('IsAffiliate', true)->count();


        } elseif ($show === 'Last6Months') {
            // Implement filtering for the last 6 months
            $getInTotalAffiliates = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsAffiliate', true)->where('CreatedAt', '>=', Carbon::now()->subMonths(6))->count();
            $getActiveAffiliates = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsActive', true)->where('CreatedAt', '>=', Carbon::now()->subMonths(6))->where('IsAffiliate', true)->count();
            $getInActiveAffiliates = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsActive', false)->where('CreatedAt', '>=', Carbon::now()->subMonths(6))->where('IsAffiliate', true)->count();


        }


        // Additional date filtering if "From" and "To" dates are provided
        if ($dateFrom) {
            // Implement date filtering for User model
            $userCount = DB::connection('sqlsrv')->table('AspNetUsers')->whereDate('CreatedAt', '>=', $dateFrom)
                ->count();
            $userActiveCount = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsActive', true)
                 ->whereDate('CreatedAt', '>=', $dateFrom)
                 ->count();
            $userInActiveCount = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsActive', false)->whereDate('CreatedAt', '>=', $dateFrom)
                ->count();


            // KREATORS COUNTERS
            $getInTotalKreators = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsAffiliate', false)->whereDate('CreatedAt', '>=', $dateFrom)->count();
            $getInActiveKreators = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsActive', true)->whereDate('CreatedAt', '>=', $dateFrom)->where('IsAffiliate', false)->count();
            $inactiveProducts = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsActive', false)->whereDate('CreatedAt', '>=', $dateFrom)->where('IsAffiliate', false)->count();

            // AFFILIATES COUNTERS

            // Get unique UserIds from AffiliateUser model
            $getInTotalAffiliates = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsAffiliate', true)->whereDate('CreatedAt', '>=', $dateFrom)->count();
            $getActiveAffiliates = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsActive', true)->whereDate('CreatedAt', '>=', $dateFrom)->where('IsAffiliate', true)->count();
            $getInActiveAffiliates = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsActive', false)->whereDate('CreatedAt', '>=', $dateFrom)->where('IsAffiliate', true)->count();


        }

        if ($dateTo) {
            // Implement date filtering for User model
            $userCount = DB::connection('sqlsrv')->table('AspNetUsers')->whereDate('CreatedAt', '>=', $dateTo)
                ->count();
            $userActiveCount = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsActive', true)
                 ->whereDate('CreatedAt', '>=', $dateTo)
                 ->count();
            $userInActiveCount = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsActive', false)->whereDate('CreatedAt', '>=', $dateTo)
                ->count();


            // KREATORS COUNTERS
            $getInTotalKreators = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsAffiliate', false)->whereDate('CreatedAt', '>=', $dateTo)->count();
            $getInActiveKreators = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsActive', true)->whereDate('CreatedAt', '>=', $dateTo)->where('IsAffiliate', false)->count();
            $inactiveProducts = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsActive', false)->whereDate('CreatedAt', '>=', $dateTo)->where('IsAffiliate', false)->count();

            // AFFILIATES COUNTERS
            // Get unique UserIds from AffiliateUser model
            $getInTotalAffiliates = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsAffiliate', true)->whereDate('CreatedAt', '>=', $dateTo)->count();
            $getActiveAffiliates = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsActive', true)->whereDate('CreatedAt', '>=', $dateTo)->where('IsAffiliate', true)->count();
            $getInActiveAffiliates = DB::connection('sqlsrv')->table('AspNetUsers')->where('IsActive', false)->whereDate('CreatedAt', '>=', $dateTo)->where('IsAffiliate', true)->count();


        }

        // Return the updated data to the view
        return view('home', [
            'startOfWeek' => $startOfWeek,
            'endOfWeek' => $endOfWeek,
            'startOfWeek' => $startOfWeek,
            'endOfWeek' => $endOfWeek,
            'userCount' => $userCount,
            'userActiveCount' => $userActiveCount,
            'userInActiveCount' => $userInActiveCount,
            'getInTotalKreators' => $getInTotalKreators,
            'getInActiveKreators' => $getInActiveKreators,
            'inactiveProducts' => $inactiveProducts,
            'getInTotalAffiliates' => $getInTotalAffiliates,
            'getActiveAffiliates' => $getActiveAffiliates,
            'getInActiveAffiliates' => $getInActiveAffiliates,
        ]);
    }

}
