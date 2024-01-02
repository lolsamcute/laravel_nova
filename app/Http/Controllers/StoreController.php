<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class StoreController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $filter = $request->input('filter', 'all');

        $userGrossSales = DB::connection('sqlsrv')
            ->table('AspNetUsers')
            ->select(
                'AspNetUsers.BusinessLogo',
                'AspNetUsers.BusinessName',
                'KreatorProducts.Status',
                'KreatorProducts.DateCreated',
                'AspNetUsers.Email',
                'KreatorProducts.Id',
                DB::raw('SUM(KreatorProducts.SellingPrice) as gross_sales')
            )
            ->leftJoin('KreatorProducts', 'AspNetUsers.Id', '=', 'KreatorProducts.UserId')
            ->groupBy(
                'AspNetUsers.BusinessLogo',
                'AspNetUsers.BusinessName',
                'KreatorProducts.Status',
                'KreatorProducts.DateCreated',
                'AspNetUsers.Email',
                'KreatorProducts.Id',
            )
            ->latest('DateCreated')
            ->get();

        return view('pages.store.index', [
            'filter' => $filter,
            'userGrossSales' => $userGrossSales,
        ]);
    }



    public function filterStore(Request $request)
    {
        $search = $request->input('search');
        $show = $request->input('show');
        $currency = $request->input('currency');
        $dateFrom = $request->input('dateFrom');
        $dateTo = $request->input('dateTo');

        $filter = $request->input('filter', 'all');

        $userGrossSales = DB::connection('sqlsrv')
            ->table('AspNetUsers')
            ->select(
                'AspNetUsers.BusinessLogo',
                'AspNetUsers.BusinessName',
                'KreatorProducts.Status',
                'KreatorProducts.DateCreated',
                'AspNetUsers.Email',
                'KreatorProducts.Id',
                DB::raw('SUM(KreatorProducts.SellingPrice) as gross_sales')
            )
            ->leftJoin('KreatorProducts', 'AspNetUsers.Id', '=', 'KreatorProducts.UserId')
            ->groupBy(
                'AspNetUsers.BusinessLogo',
                'AspNetUsers.BusinessName',
                'KreatorProducts.Status',
                'KreatorProducts.DateCreated',
                'AspNetUsers.Email',
                'KreatorProducts.Id',
            )
            ->get();

        // Apply search condition
        if ($search) {
            $userGrossSales->where(function ($query) use ($search) {
                $query->where('FullName', 'like', "%$search%")
                    ->orWhere('Email', 'like', "%$search%")
                    ->orWhere('PhoneNumber', 'like', "%$search%");
            });
        }

        // Apply show condition
        if ($show) {
            switch ($show) {
                case 'Today':
                    $userGrossSales->whereDate('CreatedAt', Carbon::today());
                    break;
                case 'Yesterday':
                    $userGrossSales->whereDate('CreatedAt', Carbon::yesterday());
                    break;
                case 'LastMonth':
                    $userGrossSales->whereMonth('CreatedAt', Carbon::now()->subMonth()->month);
                    break;
                case 'Last6Months':
                    $userGrossSales->where('CreatedAt', '>=', Carbon::now()->subMonths(6));
                    break;
                // Add other cases for different "show" options
                default:
                    // Handle default case or additional logic
                    break;
            }
        }

       // Apply date range condition
        if ($dateFrom) {
           $userGrossSales->whereDate('CreatedAt', '>=', $dateFrom);
        }

        if ($dateTo) {
            $userGrossSales->whereDate('CreatedAt', '<=', $dateTo);
        }


        return view('pages.store.index', [
            'filter' => $filter,
            'userGrossSales' => $userGrossSales,
        ]);
    }





    public function deactivate($Id)
    {
        $userGrossSales = DB::connection('sqlsrv')
            ->table('AspNetUsers')
            ->select(
                'AspNetUsers.BusinessLogo',
                'AspNetUsers.BusinessName',
                'PaymentCheckOutDetails.Status',
                'PaymentCheckOutDetails.DateCreated',
                'PaymentCheckOutDetails.CustomerEmailAddress',
                'PaymentCheckOutDetails.Id',
                DB::raw('SUM(PaymentCheckOutDetails.Amount) as gross_sales')
            )
            ->leftJoin('PaymentCheckOutDetails', 'AspNetUsers.Id', '=', 'PaymentCheckOutDetails.UserId')
            ->where('PaymentCheckOutDetails.Id', $Id)
            ->groupBy(
                'AspNetUsers.BusinessLogo',
                'AspNetUsers.BusinessName',
                'PaymentCheckOutDetails.Status',
                'PaymentCheckOutDetails.DateCreated',
                'PaymentCheckOutDetails.CustomerEmailAddress',
                'PaymentCheckOutDetails.Id',
            )
           ->first();

        if (!$userGrossSales) {
            return back()->with('error', 'Store not found.');
        }

        // Update the Store status to deactivated
        $userGrossSales->update(['IsActive' => 'True', 'IsActive' => 'true', 'Status' => '3']);

        return back()->with('success', 'Users deactivated successfully.');
    }


    public function storeActivate($Id)
    {
        $userGrossSales = DB::connection('sqlsrv')
            ->table('AspNetUsers')
            ->select(
                'AspNetUsers.BusinessLogo',
                'AspNetUsers.BusinessName',
                'PaymentCheckOutDetails.Status',
                'PaymentCheckOutDetails.DateCreated',
                'PaymentCheckOutDetails.CustomerEmailAddress',
                'PaymentCheckOutDetails.Id',
                DB::raw('SUM(PaymentCheckOutDetails.Amount) as gross_sales')
            )
            ->leftJoin('PaymentCheckOutDetails', 'AspNetUsers.Id', '=', 'PaymentCheckOutDetails.UserId')
            ->where('PaymentCheckOutDetails.Id', $Id)
            ->groupBy(
                'AspNetUsers.BusinessLogo',
                'AspNetUsers.BusinessName',
                'PaymentCheckOutDetails.Status',
                'PaymentCheckOutDetails.DateCreated',
                'PaymentCheckOutDetails.CustomerEmailAddress',
                'PaymentCheckOutDetails.Id',
            )
           ->first();

        if (!$userGrossSales) {
            return back()->with('error', 'Store not found.');
        }

        // Update the Store status to deactivated
        $userGrossSales->update(['IsActive' => 'True', 'IsActive' => 'true', 'Status' => '3']);

        return back()->with('success', 'Store Activated successfully.');
    }




    public function switchPaymentMethod()
    {
        return view('pages.store.switchPaymentMethod');
    }





}
