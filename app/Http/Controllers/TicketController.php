<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function validateCode(Request $request)
    {
        $code = $request->code;
        $t = Ticket::with(['user', 'travel.bus'])->where('code', $code)->first();
        if ($t) {
            return response()->json([
               "status" => true,
               "ticket" => $t
            ]);
        } else {
            return response()->json([
               "status" => false,               
            ]);
        }   
    }

    public function markTicket(Request $request)
    {        
        $code = $request->code;
        $t = Ticket::with(['user', 'travel.bus'])->where('code', $code)->first();
        if ($t) {
            $t->boarded = 1;
            $t->save();
            return response()->json([
               "status" => true,
               "ticket" => $t
            ]);
        } else {
            return response()->json([
               "status" => false,
               "message" => 'Ocurrio un error'
            ]);
        }
    }
}
