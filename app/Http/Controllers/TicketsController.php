<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class TicketsController extends Controller
{

    /**
     * Tickets dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function tickets(Request $request)
    {
        $filter = $request->input('filter', 'all');

        $getAllTickets = DB::connection('sqlsrv')
            ->table('Tickets')
            ->join('AspNetUsers', 'Tickets.UserId', '=', 'AspNetUsers.Id')
            ->select(
                'AspNetUsers.Fullname',
                'AspNetUsers.Email',
                'Tickets.Id',
                'Tickets.Heading',
                'Tickets.TicketReference',
                'Tickets.Department',
                'Tickets.Status',
                'Tickets.UserId',
                'Tickets.CreatedAt'
            )
            ->latest('Tickets.CreatedAt')
            ->get();


        $countAllTickets = $getAllTickets->count();
        $countOpenTickets = $getAllTickets->where('Status', 'open')->count();
        $countClosedTickets = $getAllTickets->where('Status', 'Closed')->count();
        $countAdminReplies = 0;

        return view('pages.support.tickets.index', [

            'getAllTickets' => $getAllTickets,
            'countAllTickets' => $countAllTickets,
            'countOpenTickets' => $countOpenTickets,
            'countClosedTickets' => $countClosedTickets,
            'countAdminReplies' => $countAdminReplies
        ]);
    }


    public function ticketView($Id)
    {
        $viewTicket = DB::connection('sqlsrv')
            ->table('Tickets')
            ->join('AspNetUsers', 'Tickets.UserId', '=', 'AspNetUsers.Id')
            ->select(
                'AspNetUsers.Fullname',
                'AspNetUsers.Email',
                'AspNetUsers.BusinessLogo',
                'Tickets.Id',
                'Tickets.Heading',
                'Tickets.Message',
                'Tickets.TicketReference',
                'Tickets.Department',
                'Tickets.Status',
                'Tickets.UserId',
                'Tickets.CreatedAt'
            )
            ->where('Tickets.Id', $Id)
            ->first();

        return view('pages.support.tickets.view', [

            'viewTicket' => $viewTicket,
        ]);
    }


    public function ticketReply($Id)
    {

         $viewTickets = DB::connection('sqlsrv')
            ->table('TicketReplys')
            ->join('AspNetUsers', 'TicketReplys.RepliedByUserId', '=', 'AspNetUsers.Id')
            ->join('Tickets', 'TicketReplys.TicketId', '=', 'Tickets.Id')
            ->select(
                'AspNetUsers.Fullname',
                'AspNetUsers.Email',
                'AspNetUsers.BusinessLogo',
                'Tickets.Id',
                'Tickets.TicketReference',
                'Tickets.Department',
                'Tickets.Status',
                'Tickets.CreatedAt',
                'TicketReplys.Message',
            )
            ->where('TicketReplys.TicketId', $Id)
            ->get();

            $viewTicket = DB::connection('sqlsrv')
            ->table('Tickets')
            ->select(
                'Tickets.TicketReference',
                'Tickets.Department',
                'Tickets.Status',
                'Tickets.CreatedAt',
            )
            ->where('Tickets.Id', $Id)
            ->first();

            $countAttachment =  $viewTickets->where('FilePath', 'Tickets.FilePath')->count();


        return view('pages.support.tickets.reply', [

            'viewTickets' => $viewTickets,
            'viewTicket' => $viewTicket,
            'countAttachment' => $countAttachment
        ]);
    }

     public function ticketReplyPost(Request $request, $Id)
    {

         $getTicket = DB::connection('sqlsrv')
            ->table('Tickets')
            ->where('Tickets.Id', $Id)
            ->first();

        $closeTicket = DB::connection('sqlsrv')
            ->table('TicketReplys')
            ->insert([

                'Message' => $request->Message,
                'RepliedByUserId'  => $getTicket->UserId,
                'Status' => $getTicket->Status,
                'TicketId' => $Id,
                'CreatedAt' => now(),

            ]);

        return back()->with('success', 'Your response has been submitted');
    }



    public function ticketClose(Request $request, $Id)
    {
        $closeTicket = DB::connection('sqlsrv')
            ->table('Tickets')
            ->where('Id', $Id)
            ->update([

                'Status' => "Closed"
            ]);
        return back()->with('success', 'Ticket Closed Successfully');
    }


    public function ticketOpen(Request $request, $Id)
    {
        $closeTicket = DB::connection('sqlsrv')
            ->table('Tickets')
            ->where('Id', $Id)
            ->update([

                'Status' => "open"
            ]);
        return back()->with('success', 'Ticket Open Successfully');
    }


     public function incidents(Request $request)
    {
        $filter = $request->input('filter', 'all');

        // $getAllTickets = DB::connection('sqlsrv')
        //     ->table('Tickets')
        //     ->join('AspNetUsers', 'Tickets.UserId', '=', 'AspNetUsers.Id')
        //     ->select(
        //         'AspNetUsers.Fullname',
        //         'AspNetUsers.Email',
        //         'Tickets.Id',
        //         'Tickets.Heading',
        //         'Tickets.TicketReference',
        //         'Tickets.Department',
        //         'Tickets.Status',
        //         'Tickets.UserId',
        //         'Tickets.CreatedAt'
        //     )
        //     ->latest('Tickets.CreatedAt')
        //     ->get();


        // $countAllTickets = $getAllTickets->count();
        // $countOpenTickets = $getAllTickets->where('Status', 'open')->count();
        // $countClosedTickets = $getAllTickets->where('Status', 'Closed')->count();
        // $countAdminReplies = 0;

        return view('pages.support.incidents.index');
    }


    public function paymentIntegration(Request $request)
    {
        $filter = $request->input('filter', 'all');

        // $getAllTickets = DB::connection('sqlsrv')
        //     ->table('Tickets')
        //     ->join('AspNetUsers', 'Tickets.UserId', '=', 'AspNetUsers.Id')
        //     ->select(
        //         'AspNetUsers.Fullname',
        //         'AspNetUsers.Email',
        //         'Tickets.Id',
        //         'Tickets.Heading',
        //         'Tickets.TicketReference',
        //         'Tickets.Department',
        //         'Tickets.Status',
        //         'Tickets.UserId',
        //         'Tickets.CreatedAt'
        //     )
        //     ->latest('Tickets.CreatedAt')
        //     ->get();


        // $countAllTickets = $getAllTickets->count();
        // $countOpenTickets = $getAllTickets->where('Status', 'open')->count();
        // $countClosedTickets = $getAllTickets->where('Status', 'Closed')->count();
        // $countAdminReplies = 0;

        return view('pages.support.paymentIntegration.index');
    }


}
