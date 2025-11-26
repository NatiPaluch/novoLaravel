<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;

class DashboardController extends Controller
{
    public function index()
    {
        $pageTitle = 'Dashboard';

        $mensagens = SiteContato::latest()->get();

<<<<<<< HEAD
        return view('pages.admin.dashboard', compact('pageTitle','mensagens'));
=======
        return view('pages.admin.dashboard', compact('pageTitle', 'mensagens'));
>>>>>>> 1033cc00b0f653bc28941259b58825fd80cf1283
    }
}
