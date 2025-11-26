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

        return view('pages.admin.dashboard', compact('pageTitle','mensagens'));
    }
}
