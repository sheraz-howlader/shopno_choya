<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Response;

class DashboardController extends Controller
{
    public function index()
    {
        //abort_if( Gate::none( ['dashboard'] ), Response::HTTP_FORBIDDEN );


        return view('backend.dashboard.index');
    }

}
