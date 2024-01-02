<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TransactionsController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function transactions(Request $request)
    {
        $filter = $request->input('filter', 'all');

        $transactions = DB::connection('sqlsrv')
            ->table('AspNetUsers')
            ->select(
                'AspNetUsers.Fullname',
                'AspNetUsers.Email',
                'KreatorProducts.ProductName',
                'PaymentCheckOutDetails.Total',
                'PaymentCheckOutDetails.DateCreated',
                'PaymentCheckOutDetails.Id',
                'PaymentCheckOutDetails.Status',
                'PaymentCheckOutDetails.CardType',
            )
            ->join('PaymentCheckOutDetails', 'AspNetUsers.Id', '=', 'PaymentCheckOutDetails.UserId')
            ->join('KreatorProducts', 'PaymentCheckOutDetails.ProductId', '=', 'KreatorProducts.Id')
            ->latest('PaymentCheckOutDetails.DateCreated')
            ->get();


            $countSuccessful = $transactions->where('Status', 'Successful')->count();
            $countFailed = $transactions->where('Status', 'Failed')->count();
            $countPending = $transactions->where('Status', 'Pending')->count();
            $countAbandoned = $transactions->where('Status', 'Abandoned')->count();

            if ($filter == 'pending') {
                $transactions = $transactions->where('Status', 'Pending');
            } elseif ($filter == 'failed') {
                $transactions = $transactions->where('Status', 'Failed');
            } elseif ($filter == 'successful') {
                $transactions = $transactions->where('Status', 'Successful');
            } elseif ($filter == 'abandoned') {
                $transactions = $transactions->where('Status', 'Abandoned');
            }

        return view('pages.transactions.index', [
            'filter' => $filter,
            'transactions' => $transactions,
            'countSuccessful' => $countSuccessful,
            'countFailed' => $countFailed,
            'countPending' => $countPending,
            'countAbandoned' => $countAbandoned,
        ]);
    }





    public function filterTransactions()
    {
        $search = $request->input('search');
        $show = $request->input('show');
        $currency = $request->input('currency');
        $dateFrom = $request->input('dateFrom');
        $dateTo = $request->input('dateTo');

        $filter = $request->input('filter', 'all');
        $transactions = DB::connection('sqlsrv')
            ->table('AspNetUsers')
            ->select(
                'PaymentCheckOutDetails.CustomerFullname',
                'PaymentCheckOutDetails.CustomerEmailAddress',
                'KreatorProducts.ProductName',
                'PaymentCheckOutDetails.Total',
                'PaymentCheckOutDetails.DateCreated',
                'PaymentCheckOutDetails.Id',
                'PaymentCheckOutDetails.Status',
                'PaymentCheckOutDetails.CardType',
            )
            ->join('PaymentCheckOutDetails', 'AspNetUsers.Id', '=', 'PaymentCheckOutDetails.UserId')
            ->join('KreatorProducts', 'PaymentCheckOutDetails.ProductId', '=', 'KreatorProducts.Id')
            ->latest('PaymentCheckOutDetails.DateCreated')
            ->get();

            Log::info('Fetch Transactions Types.');



            if ($filter == 'pending') {
                $transactions = $transactions->where('Status', 'Pending');
            } elseif ($filter == 'failed') {
                $transactions = $transactions->where('Status', 'Failed');
            } elseif ($filter == 'successful') {
                $transactions = $transactions->where('Status', 'Successful');
            } elseif ($filter == 'abandoned') {
                $transactions = $transactions->where('Status', 'Abandoned');
            }

        // Apply search condition
        if ($search) {
            $transactions = $transactions->where(function ($query) use ($search) {
                $query->where('ProductName', 'like', "%$search%")
                    ->orWhere('Total', 'like', "%$search%")
                    ->orWhere('CustomerFullname', 'like', "%$search%")
                    ->orWhere('CustomerEmailAddress', 'like', "%$search%");
            });
        }

        // Apply show condition
        if ($show) {
            switch ($show) {
                case 'Today':
                    $transactions->whereDate('DateCreated', Carbon::today());
                    $countSuccessful = $transactions->where('Status', 'Successful')->whereDate('DateCreated', Carbon::today())->count();
                    $countFailed = $transactions->where('Status', 'Failed')->whereDate('DateCreated', Carbon::today())->count();
                    $countPending = $transactions->where('Status', 'Pending')->whereDate('DateCreated', Carbon::today())->count();
                    $countAbandoned = $transactions->where('Status', 'Abandoned')->whereDate('DateCreated', Carbon::today())->count();

                    break;
                case 'Yesterday':
                    $transactions->whereDate('DateCreated', Carbon::yesterday());
                    $countSuccessful = $transactions->where('Status', 'Successful')->whereDate('DateCreated', Carbon::yesterday())->count();
                    $countFailed = $transactions->where('Status', 'Failed')->whereDate('DateCreated', Carbon::yesterday())->count();
                    $countPending = $transactions->where('Status', 'Pending')->whereDate('DateCreated', Carbon::yesterday())->count();
                    $countAbandoned = $transactions->where('Status', 'Abandoned')->whereDate('DateCreated', Carbon::yesterday())->count();

                    break;
                case 'LastMonth':
                    $transactions->whereMonth('DateCreated', Carbon::now()->subMonth()->month);
                    $countSuccessful = $transactions->where('Status', 'Successful')->whereDate('DateCreated', Carbon::now()->subMonth()->month)->count();
                    $countFailed = $transactions->where('Status', 'Failed')->whereDate('DateCreated', Carbon::now()->subMonth()->month)->count();
                    $countPending = $transactions->where('Status', 'Pending')->whereDate('DateCreated', Carbon::now()->subMonth()->month)->count();
                    $countAbandoned = $transactions->where('Status', 'Abandoned')->whereDate('DateCreated', Carbon::now()->subMonth()->month)->count();


                    break;
                case 'Last6Months':
                    $transactions->where('DateCreated', '>=', Carbon::now()->subMonths(6));
                    $countSuccessful = $transactions->where('Status', 'Successful')->whereDate('DateCreated', Carbon::now()->subMonths(6))->count();
                    $countFailed = $transactions->where('Status', 'Failed')->whereDate('DateCreated', Carbon::now()->subMonths(6))->count();
                    $countPending = $transactions->where('Status', 'Pending')->whereDate('DateCreated', Carbon::now()->subMonths(6))->count();
                    $countAbandoned = $transactions->where('Status', 'Abandoned')->whereDate('DateCreated', Carbon::now()->subMonths(6))->count();

                    break;
                // Add other cases for different "show" options
                default:
                    // Handle default case or additional logic
                    break;
            }
        }

       // Apply date range condition
        if ($dateFrom) {
            $transactions->whereDate('DateCreated', '>=', $dateFrom);
            $countSuccessful = $transactions->where('Status', 'Successful')->whereDate('DateCreated', '>=', $dateFrom)->count();
            $countFailed = $transactions->where('Status', 'Failed')->whereDate('DateCreated', '>=', $dateFrom)->count();
            $countPending = $transactions->where('Status', 'Pending')->whereDate('DateCreated', '>=', $dateFrom)->count();
            $countAbandoned = $transactions->where('Status', 'Abandoned')->whereDate('DateCreated', '>=', $dateFrom)->count();

        }

        if ($dateTo) {
            $transactions->whereDate('DateCreated', '<=', $dateTo);
            $countSuccessful = $transactions->where('Status', 'Successful')->whereDate('DateCreated', '>=', $dateTo)->count();
            $countFailed = $transactions->where('Status', 'Failed')->whereDate('DateCreated', '>=', $dateTo)->count();
            $countPending = $transactions->where('Status', 'Pending')->whereDate('DateCreated', '>=', $dateTo)->count();
            $countAbandoned = $transactions->where('Status', 'Abandoned')->whereDate('DateCreated', '>=', $dateTo)->count();

        }


        return view('pages.transactions.index', [
            'transactions' => $transactions,
            'countSuccessful' => $countSuccessful,
            'countFailed' => $countFailed,
            'countPending' => $countPending,
            'countAbandoned' => $countAbandoned,
            'filter' => $filter,
        ]);

    }




    /**
     * Show the Withdrawal dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function withdrawal(Request $request)
    {
        $filter = $request->input('filter', 'all');

        $transactions = DB::connection('sqlsrv')
            ->table('AspNetUsers')
            ->select(
                'PaymentCheckOutDetails.CustomerFullname',
                'PaymentCheckOutDetails.CustomerEmailAddress',
                'KreatorProducts.ProductName',
                'PaymentCheckOutDetails.Total',
                'PaymentCheckOutDetails.DateCreated',
                'PaymentCheckOutDetails.Id',
                'PaymentCheckOutDetails.Status',
                'PaymentCheckOutDetails.CardType',
            )
            ->join('PaymentCheckOutDetails', 'AspNetUsers.Id', '=', 'PaymentCheckOutDetails.UserId')
            ->join('KreatorProducts', 'PaymentCheckOutDetails.ProductId', '=', 'KreatorProducts.Id')
            ->latest('PaymentCheckOutDetails.DateCreated')
            ->get();


            $countSuccessful = $transactions->where('Status', 'Successful')->count();
            $countFailed = $transactions->where('Status', 'Failed')->count();
            $countPending = $transactions->where('Status', 'Pending')->count();
            $countAbandoned = $transactions->where('Status', 'Abandoned')->count();

            if ($filter == 'pending') {
                $transactions = $transactions->where('Status', 'Pending');
            } elseif ($filter == 'failed') {
                $transactions = $transactions->where('Status', 'Failed');
            } elseif ($filter == 'successful') {
                $transactions = $transactions->where('Status', 'Successful');
            } elseif ($filter == 'abandoned') {
                $transactions = $transactions->where('Status', 'Abandoned');
            }

        return view('pages.transactions.withdrawal', [
            'filter' => $filter,
            'transactions' => $transactions,
            'countSuccessful' => $countSuccessful,
            'countFailed' => $countFailed,
            'countPending' => $countPending,
            'countAbandoned' => $countAbandoned,
        ]);
    }



}
