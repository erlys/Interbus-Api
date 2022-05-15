<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class BusController extends Controller
{
    public function index()
    {   
        $user = User::with(['buses.agency', 'buses.travels.tickets.user'])->first();
        return response()->json($user->buses);
    }
}
